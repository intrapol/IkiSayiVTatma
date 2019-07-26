<?php
$servername = "localhost";
$username   = "root";
$password   = "123456";
$dbname     = "bilgiler";

// Veritabanı bağlantısının oluşturulması
$db = mysqli_connect($servername, $username, $password, $dbname);
// HATA VARSA HATAYI GÖSTER
if (!$db) { die("Hata oluştu: " . mysqli_connect_error()); }

 ?>
