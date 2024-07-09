<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pengurusan_pekerja";

// Buat sambungan
$conn = new mysqli($servername, $username, $password, $dbname);

// Semak sambungan
if ($conn->connect_error) {
    die("Sambungan gagal: " . $conn->connect_error);
}
?>
