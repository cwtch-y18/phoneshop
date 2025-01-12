<?php

namespace controllers;


use Core\View;

class BaseController {
    public function checkUserBackend() {
        session_start();
        // Kiểm tra nếu chưa đăng nhập, chuyển hướng về trang login
        if (empty($_SESSION['logged_in'])) {
            header('Location: /admin/login');
            exit();
        }
    }

    public function renderFrontend($view, $data = [], $script = '')
    {
        // Tạo nội dung cần hiển thị cho các trang con
        ob_start();
        View::render($view, $data);
        $content = ob_get_clean();

        $srcJs = $script;
        // Bao gồm layout và chèn nội dung vào đó
        include '../App/views/frontend/layout.php';
    }

    public function renderBackend($view, $data = [], $script = '')
    {
        // Tạo nội dung cần hiển thị cho các trang con
        ob_start();
        View::render($view, $data);
        $content = ob_get_clean();

        $srcJs = $script;
        // Bao gồm layout và chèn nội dung vào đó
        include '../App/views/backend/layout.php';
    }
}
