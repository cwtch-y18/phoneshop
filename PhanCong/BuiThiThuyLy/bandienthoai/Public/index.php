<?php
require_once '../App/Cores/Database.php';
require_once '../App/Cores/View.php';
require_once '../App/Cores/Router.php';
require_once '../App/helpers/UrlHelper.php';
require_once '../app/controllers/BaseController.php';
require_once '../App/controllers/Frontend/HomeController.php';
require_once '../App/controllers/Backend/DashboardController.php';
require_once '../App/controllers/Backend/AuthController.php';
require_once '../App/controllers/Backend/UserController.php';

Core\Router::get('/', ['controller' => 'Frontend\\HomeController', 'action' => 'index']);
// Core\Router::get('/about', ['controller' => 'Frontend\\AboutController', 'action' => 'index']);
Core\Router::get('/admin', ['controller' => 'Backend\\DashboardController', 'action' => 'index']);
Core\Router::get('/admin/login',['controller' => 'Backend\\AuthController' , 'action' => 'loginForm']);
Core\Router::post('/admin/login', ['controller' => 'Backend\\AuthController', 'action' => 'login']);
Core\Router::get('/admin/signup',['controller' => 'Backend\\AuthController' , 'action' => 'signupForm']);
Core\Router::post('/admin/signup',['controller' => 'Backend\\AuthController' , 'action' => 'signup']);
Core\Router::get('/admin/dashboard',['controller' => 'Backend\\DashboardController' , 'action' => 'index']);
Core\Router::post('/admin/catagori',['controller' => 'Backend\\AuthController' , 'action' => 'categories']);
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];  // Lấy phương thức GET hoặc POST

$basePath = '/bandienthoai/Public';

if (strpos($url, $basePath) === 0) {
    $url = substr($url, strlen($basePath));
}

Core\Router::route($url, $method);