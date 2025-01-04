<?php

namespace Core;

class View
{
    public static function render($view, $data = [])
    {
        // Chuyển mảng dữ liệu thành các biến
        extract($data);

        // Đường dẫn tới file view
        $viewFile = "../app/views/" . $view . ".php";

        if (file_exists($viewFile)) {
            require $viewFile;
        } else {
            die("View file '$view' không tồn tại.");
        }
    }
}
