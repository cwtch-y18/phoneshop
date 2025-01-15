<?php

namespace Controllers\Backend;

use Core\Database;
use Core\View;

class AuthController
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance(); // Lấy instance của Database
        session_start(); // Khởi động phiên làm việc
    }

    // Hiển thị form đăng nhập
    public function loginForm()
    {
        View::render('backend/auth/login');
    }

    // Hiển thị form đăng ký
    public function signupForm()
    {
        View::render('backend/auth/signup');
    }
    public function categories()
    {
        View::render('backend/auth/ProductsPage');
    }
    // Xử lý đăng nhập
    public function login()
    {
        $account = $_POST['account'] ?? '';
        $password = $_POST['password'] ?? '';
    
        // Tìm kiếm người dùng theo account
        $user = $this->db->fetchOne("SELECT * FROM users WHERE account = ?", [$account]);
    
        if ($user && password_verify($password, $user['password'])) {
            // Đăng nhập thành công
            $_SESSION['logged_in'] = true;
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['nameUser'];
            $_SESSION['phone_number'] = $user['phoneNumber'];
            $_SESSION['role'] = $user['role'];
    
            header('Location: /'); // Chuyển hướng đến trang admin
            exit();
        } else {
            // Đăng nhập thất bại
            $_SESSION['message_error'] = "Tài khoản hoặc mật khẩu không đúng";
            header('Location: /admin/login');
            exit();
        }
    }
    
    // Xử lý đăng ký (signup)

    public function signup()
    {
        $requiredFields = ['nameUser', 'phoneNumber', 'address', 'sex', 'dateOfBirth', 'account', 'password', 'reEnterPassword'];
        $errors = [];
    
        // Lấy dữ liệu từ form và kiểm tra trường rỗng
        foreach ($requiredFields as $field) {
            $$field = $_POST[$field] ?? '';
            if (empty($$field)) {
                $errors[$field] = ucfirst($field) . " không được để trống.";
            }
        }
    
        // Kiểm tra mật khẩu khớp
        if ($password !== $reEnterPassword) {
            $errors['re_password'] = "Mật khẩu nhập lại không khớp.";
        }
    
        // Nếu có lỗi, trả về form đăng ký
        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
            header("Location: /admin/signup");
            exit();
        }
    
        // Kiểm tra tài khoản đã tồn tại
        $existingUser = $this->db->fetchOne("SELECT * FROM users WHERE account = ?", [$account]);
        if ($existingUser) {
            $_SESSION['errors']['account'] = "Tên tài khoản đã tồn tại. Vui lòng chọn tài khoản khác.";
            header("Location: /admin/signup");
            exit();
        }
    
        // Mã hóa mật khẩu và lưu vào database
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $query = "INSERT INTO users (nameUser, phoneNumber, address, sex, dateOfBirth, account, password) 
                  VALUES (?, ?, ?, ?, ?, ?, ?)";
        $result = $this->db->execute($query, [
            $nameUser, $phoneNumber, $address, $sex, $dateOfBirth, $account, $hashedPassword
        ]);
    
        if ($result) {
            $_SESSION['message_success'] = "Đăng ký thành công. Vui lòng đăng nhập.";
            header("Location: /admin/login");
        } else {
            $_SESSION['errors']['database'] = "Đã xảy ra lỗi trong quá trình đăng ký.";
            header("Location: /admin/signup");
        }
    }
    
    
    
}
