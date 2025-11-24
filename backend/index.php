<?php
header("Content-Type: text/plain; charset=utf-8");

if (!isset($_POST['fullname'])) {
    echo "Không nhận được dữ liệu!";
    exit;
}

$name = htmlspecialchars($_POST['fullname']);

echo "Xin chào $name! Backend (PHP) đã nhận được dữ liệu từ Frontend.";
