<?php
// Include các file cần thiết
require_once '../app/helpers/UrlHelper.php';
require_once '../app/core/View.php';
require_once '../app/core/Router.php';
require_once '../app/core/Database.php';
require_once '../app/controllers/BaseController.php';
require_once '../app/controllers/frontend/HomeController.php';
require_once '../app/controllers/frontend/AboutController.php';
require_once '../app/controllers/backend/DashboardController.php';
require_once '../app/controllers/backend/AuthController.php';
require_once '../app/controllers/backend/UserController.php';
require_once '../app/Models/User.php';

// Đăng ký route cho phương thức GET


Core\Router::get('/admin/register',['controller' => 'Backend\\AuthController' , 'action' => 'registerform']);





Core\Router::get('/', ['controller' => 'Frontend\\HomeController', 'action' => 'index']);
Core\Router::get('/about', ['controller' => 'Frontend\\AboutController', 'action' => 'index']);
Core\Router::get('/admin', ['controller' => 'Backend\\DashboardController', 'action' => 'index']);
Core\Router::get('/admin/login', ['controller' => 'Backend\\AuthController', 'action' => 'loginForm']);
Core\Router::post('/admin/login', ['controller' => 'Backend\\AuthController', 'action' => 'login']);
Core\Router::get('/admin/user', ['controller' => 'Backend\\UserController', 'action' => 'index']);
Core\Router::post('/admin/user/delete', ['controller' => 'Backend\\UserController', 'action' => 'delete']);

// Lấy URL và phương thức HTTP
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];  // Lấy phương thức GET hoặc POST

$basePath = '/shopping/public';

if (strpos($url, $basePath) === 0) {
    $url = substr($url, strlen($basePath));
}

Core\Router::route($url, $method);
