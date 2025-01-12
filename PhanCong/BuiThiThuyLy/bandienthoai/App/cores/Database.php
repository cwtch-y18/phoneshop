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

    public function fetchAll($sql, $params = [])
    {
        $stmt = $this->connection->prepare($sql);

        if ($params) {
            $types = str_repeat('s', count($params)); // Định dạng các tham số (s = string)
            $stmt->bind_param($types, ...$params);
        }

        $stmt->execute();
        $result = $stmt->get_result();

        if ($result === false) {
            return false;
        }

        return $result->fetch_all(MYSQLI_ASSOC); // Trả về mảng kết quả
    }

    // Phương thức lấy một bản ghi duy nhất
    public function fetchOne($sql, $params = []) {
    //    var_dump(1231, $sql);
    //    die;
        $stmt = $this->connection->prepare($sql);

        if ($params) {
            $types = str_repeat('s', count($params));
            $stmt->bind_param($types, ...$params);
        }

        $stmt->execute();
        $result = $stmt->get_result();

        if ($result === false) {
            return null;
        }

        return $result->fetch_assoc(); // Trả về bản ghi đầu tiên dưới dạng mảng kết hợp
    }

    public function deleteById($table, $id) {
        $query = "DELETE FROM $table WHERE id = ?";
        $stmt = $this->connection->prepare($query);

        if ($stmt) {
            $stmt->bind_param("i", $id); // Bind giá trị $id với kiểu integer
            return $stmt->execute();    // Thực thi câu lệnh
        } else {
            return false;
        }
    }
}
