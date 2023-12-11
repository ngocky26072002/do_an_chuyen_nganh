<?php
$mysqli = new mysqli("localhost", "root", "", "laptop_world");

// Check connection
if ($mysqli->connect_errno) {
    echo "Kết nối với MySQLi lỗi" . $mysqli->connect_error;
    exit();
}
?>