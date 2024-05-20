<?php
// الاتصال بقاعدة البيانات
$conn = new mysqli("localhost", "root", "", "skincare3");

// التحقق من الاتصال
if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}

?>