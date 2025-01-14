<?php

namespace Controllers\Backend;

use controllers\BaseController;

class DashboardController extends BaseController
{
    public function __construct()
    {
        parent::checkUserBackend(); // Kiểm tra quyền truy cập backend
    }

    public function index()
    {
        $data = [
            'title' => 'Trang chủ',
            'welcome_message' => 'Chào mừng bạn đến với trang chủ!',
        ];
       
        $this->renderBackend('backend/dashboard', $data);
    }
}
