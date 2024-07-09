<?php
include 'config.php';

// Assume you receive these fields from your form
$ic = $_POST['ic'];
$nama = $_POST['nama'];
$hp = $_POST['hp'];
$jantina = $_POST['jantina'];

// Insert query
$sql = "INSERT INTO pekerja (ic, nama, hp, jantina) VALUES ('$ic', '$nama', '$hp', '$jantina')";

if ($conn->query($sql) === TRUE) {
    echo "Maklumat pekerja berjaya ditambah.";
} else {
    echo "Ralat: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
