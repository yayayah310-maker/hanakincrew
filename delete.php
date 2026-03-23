<?php
session_start();
if (!isset($_SESSION['user_id'])) exit;

if (isset($_GET['id'])) {
    $host = 'localhost'; $db = 'hanakin_db'; $user = 'root'; $pass = '';
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    
    $stmt = $pdo->prepare("DELETE FROM news WHERE id = ?");
    $stmt->execute([$_GET['id']]);
}
header('Location: admin.php');
exit;