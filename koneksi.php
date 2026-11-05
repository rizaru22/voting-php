<?php

$host = "localhost";
$dbname = "voting";
$username = "root";
$password = "";

try {
    // Membuat objek koneksi PDO ke database MySQL
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4",$username,$password);

    // Mengatur mode error PDO agar menampilkan exception jika terjadi kesalahan
    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

    // Mengatur hasil query menjadi associative array
    $pdo->setAttribute(
        PDO::ATTR_DEFAULT_FETCH_MODE,
        PDO::FETCH_ASSOC
    );

} catch (PDOException $e) {
    die("Koneksi database gagal: " . $e->getMessage());
}