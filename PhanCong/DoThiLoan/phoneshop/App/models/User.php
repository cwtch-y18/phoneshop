<?php

namespace Models;

//use Core\Database;

use Core\Database;

class User
{
    private $db;
    private $table = 'users';
    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    // Lấy danh sách tất cả người dùng
    public function getAll()
    {
        $query = "SELECT * FROM $this->table WHERE role ='2'";
        $result = $this->db->fetchAll($query);
        return $result;
    }

    // Lấy danh sách tất cả người dùng
    public function find($id)
    {
        $query = "SELECT * FROM $this->table WHERE role ='2' AND id = ?";
        $result = $this->db->fetchOne($query, [$id]);
        return $result;
    }

    /**
     * @return bool
     */
    // public function delete($id)
    // {
    //     return $this->db->deleteById($this->table, $id);
    // }
}
