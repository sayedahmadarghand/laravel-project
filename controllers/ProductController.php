<?php

require_once __DIR__ . '/../db.php';

class ProductController
{
    public function index()
    {
        global $conn;

        $sql = "SELECT * FROM products ORDER BY id DESC";
        $result = $conn->query($sql);

        return $result;
    }
}
