<?php

namespace Core;

use mysqli;

class Database
{
    private static $instance = null;
    private $connection;

    // Cấu hình thông tin kết nối
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'phone_stories';

    private function __construct()
    {
        // Kết nối MySQL
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        // Kiểm tra lỗi kết nối
        if ($this->connection->connect_error) {
            die("Kết nối thất bại: " . $this->connection->connect_error);
        }
    }

    // Lấy instance duy nhất
    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    // Thực hiện truy vấn lấy tất cả bản ghi
    public function fetchAll($sql, $params = [])
    {
        $stmt = $this->prepareStatement($sql, $params);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result === false) {
            return false;
        }

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // Thực hiện truy vấn lấy một bản ghi
    public function fetchOne($sql, $params = [])
    {
        $stmt = $this->prepareStatement($sql, $params);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result === false) {
            return null;
        }

        return $result->fetch_assoc();
    }

    // Thực hiện truy vấn INSERT/UPDATE/DELETE
    public function execute($sql, $params = [])
    {
        $stmt = $this->prepareStatement($sql, $params);
        return $stmt->execute();
    }

    // Chuẩn bị câu lệnh truy vấn
    private function prepareStatement($sql, $params)
    {
        $stmt = $this->connection->prepare($sql);

        if (!$stmt) {
            die("Lỗi prepare SQL: " . $this->connection->error);
        }

        if ($params) {
            $types = str_repeat('s', count($params)); // Tất cả tham số được coi là chuỗi
            $stmt->bind_param($types, ...$params);
        }

        return $stmt;
    }
} 
