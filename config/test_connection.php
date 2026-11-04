<?php

require_once 'config/database.php';

try {
    $database = new Database();
    $conn = $database->getConnection();

    echo "Koneksi database berhasil!";

} catch (PDOException $e) {
    echo "Koneksi database gagal: " . $e->getMessage();
}