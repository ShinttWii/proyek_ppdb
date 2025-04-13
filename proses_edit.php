<?php
include '../PPDB PAUD AL HUDA/koneksi.php';

$id_siswa = $_POST['id_siswa'];
$nama_siswa = $_POST['nama_siswa'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$nama_orangtua = $_POST['nama_orangtua'];
$no_telepon = $_POST['no_telepon'];

$sql = "UPDATE siswa SET 
            nama_siswa='$nama_siswa',
            tanggal_lahir='$tanggal_lahir',
            jenis_kelamin='$jenis_kelamin',
            alamat='$alamat',
            nama_orangtua='$nama_orangtua',
            no_telepon='$no_telepon'
        WHERE id_siswa='$id_siswa'";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
