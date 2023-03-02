<?php
$host = 'localhost';
$db   = 'cbtth01_cse485';
$username = 'root';
$password = '';
$charset = 'utf8mb4';
  
$conn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($conn, $username, $password, $options);
?>