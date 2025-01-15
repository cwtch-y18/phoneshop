<?php

namespace Core;

class Router
{
    // Mảng lưu trữ các route
    private static $routes = [
        'GET' => [],
        'POST' => [],
    ];

    // Đăng ký route GET
    public static function get($url, $action)
    {
        self::$routes['GET'][$url] = $action;
    }

    // Đăng ký route POST
    public static function post($url, $action)
    {
        self::$routes['POST'][$url] = $action;
    }

    // Xử lý route dựa trên phương thức HTTP
    public static function route($url, $method)
    {
        $url = parse_url($url, PHP_URL_PATH);
        $method = strtoupper($method);
        if (isset(self::$routes[$method][$url])) {
            $action = self::$routes[$method][$url];
            $controllerName = $action['controller'];
            $actionName = $action['action'];

            // Include controller class
            $controllerName = "\\Controllers\\" . $controllerName;
            // Tạo đối tượng controller và gọi phương thức action
            $controller = new $controllerName();
            $controller->$actionName();
        } else {
            View::render('404');
//            die("Route not found: $url with method $method");
        }
    }
}
