<?php
$host = "172.18.0.2";  // IP của container MySQL
$user = "root";
$pass = "zenco2020";
$dbname = "namlongasia";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✅ Database connection successful!";
} catch (PDOException $e) {
    echo "❌ Database connection failed: " . $e->getMessage();
}
?>
