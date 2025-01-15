<?php

namespace controllers\frontend;

use controllers\BaseController;


class HomeController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Trang chủ',
            'welcome_message' => 'Chào mừng bạn đến với trang chủ!',
        ];

        $this->renderFrontend('frontend/layout', $data);
    }
}
