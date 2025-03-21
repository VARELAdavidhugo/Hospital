<?php
$host = '192.168.100.11';
$db   = 'hopital';
$user = 'david';
$pass = 'david';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (\PDOException $e) {
    echo "❌ Erreur de connexion : " . $e->getMessage();
    exit;
}
?>
