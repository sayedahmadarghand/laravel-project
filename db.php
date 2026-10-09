<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "online_store";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("د Database سره اړیکه جوړه نه شوه: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

?>