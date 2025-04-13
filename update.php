<?php
include '../PPDB PAUD AL HUDA/koneksi.php';

$id_siswa = $_POST['id_siswa'];
$status = $_POST['status_pendaftaran'];

$sql = "UPDATE siswa SET status_pendaftaran = '$status' WHERE id_siswa = '$id_siswa'";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Gagal memperbarui status: " . $conn->error;
}

$conn->close();
