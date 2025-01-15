<?php

namespace Helpers;

class UrlHelper
{
    // Tạo URL đầy đủ dựa trên base URL và đường dẫn con
    public static function baseUrl($path = '')
    {
        $base = 'https://shopping';
        return rtrim($base, '/') . '/' . ltrim($path, '/');
    }

    // Chuyển hướng đến URL khác
    public static function redirect($url)
    {
        header("Location: " . self::baseUrl($url));
        exit;
    }

    public static function trimmedUri()
    {
        // Lấy phần URI từ $_SERVER['REQUEST_URI']
        $requestUri = $_SERVER['REQUEST_URI'];

        // Loại bỏ dấu "/" ở đầu nếu cần
        $trimmedUri = ltrim($requestUri, '/');

        // Hiển thị kết quả
        return $trimmedUri;
    }
}