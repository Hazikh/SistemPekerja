<?php
include 'config.php';

// Assume you receive these fields from your form
$id = $_POST['id'];
$ic = $_POST['ic'];
$nama = $_POST['nama'];
$hp = $_POST['hp'];
$jantina = $_POST['jantina'];

// Update query
$sql = "UPDATE pekerja SET ic='$ic', nama='$nama', hp='$hp', jantina='$jantina' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Maklumat pekerja berjaya dikemaskini.";
} else {
    echo "Ralat: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
