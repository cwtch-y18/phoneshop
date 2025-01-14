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

        if ($password == $user['password']) {
            // Đăng nhập thành công
            $_SESSION['logged_in'] = true;
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['phone_number'] = $user['phone number'];
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
        $errors = [];

        // Lấy dữ liệu từ form
        $name = $_POST['name'] ?? '';
        $phone_number = $_POST['phone_number'] ?? '';
        $address = $_POST['address'] ?? '';
        $sex = $_POST['sex'] ?? '';
        $date_of_birth = $_POST['date_of_birth'] ?? '';
        $account = $_POST['account'] ?? '';
        $password = $_POST['password'] ?? '';
        $re_password = $_POST['re_password'] ?? '';

        // Regex kiểm tra
        $regexNameUser = "/^[a-zA-ZÀ-ỹ\s]{2,}$/";
        $regexPhoneNumber = "/^((\+\d{0,3})|0){1}\d{9}$/";
        $regexAddress = "/^[a-zA-ZÀ-ỹ0-9\,\-\s]{2,}$/";
        $regexAccount = "/^[a-zA-ZÀ-ỹ0-9\-\_\.]{2,}$/";
        $regexPassword = "/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{6,}$/";

        // Kiểm tra từng trường
        if (empty($name) || !preg_match($regexNameUser, $name)) {
            $errors['name'] = "Họ tên không hợp lệ. Vui lòng nhập ít nhất 2 ký tự, không chứa số hoặc ký tự đặc biệt.";
        }

        if (empty($phone_number) || !preg_match($regexPhoneNumber, $phone_number)) {
            $errors['phone_number'] = "Số điện thoại không hợp lệ. Vui lòng nhập đúng định dạng.";
        }

        if (empty($address) || !preg_match($regexAddress, $address)) {
            $errors['address'] = "Địa chỉ không hợp lệ. Vui lòng nhập ít nhất 2 ký tự, chỉ chứa chữ cái, số và ký tự (, -).";
        }

        if (empty($sex) || !in_array($sex, ['male', 'female'])) {
            $errors['sex'] = "Vui lòng chọn giới tính.";
        }

        if (empty($date_of_birth) || strtotime($date_of_birth) > time()) {
            $errors['date_of_birth'] = "Ngày sinh không hợp lệ. Vui lòng chọn ngày trong quá khứ.";
        }

        if (empty($account) || !preg_match($regexAccount, $account)) {
            $errors['account'] = "Tên tài khoản không hợp lệ. Vui lòng nhập ít nhất 2 ký tự, không chứa khoảng trắng và ký tự đặc biệt.";
        }

        if (empty($password) || !preg_match($regexPassword, $password)) {
            $errors['password'] = "Mật khẩu không hợp lệ. Vui lòng nhập ít nhất 6 ký tự, gồm chữ cái, số và ký tự đặc biệt.";
        }

        if ($password !== $re_password) {
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

        

        // Mã hóa mật khẩu
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // Lưu dữ liệu vào database
        $query = "INSERT INTO users (name, phone_number, address, sex, date_of_birth, account, password) 
                  VALUES (?, ?, ?, ?, ?, ?, ?)";
        $result = $this->db->execute($query, [
            $name, $phone_number, $address, $sex, $date_of_birth, $account, $hashedPassword
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
