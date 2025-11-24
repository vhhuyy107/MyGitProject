<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ten = $_POST["hoten"] ?? "Không có dữ liệu";
    echo "Xin chào: " . htmlspecialchars($ten);
} else {
    echo "Vui lòng gửi dữ liệu bằng POST!";
}
?>
