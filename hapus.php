<?php
include '../PPDB PAUD AL HUDA/koneksi.php';

$id = $_GET['id'];

// Ambil semua file dokumen yang terkait dengan siswa
$sql_dokumen = "SELECT file_path FROM dokumen WHERE id_siswa = $id";
$result = $conn->query($sql_dokumen);

while ($row = $result->fetch_assoc()) {
    $file_path = '../PPDB PAUD AL HUDA/' . $row['file_path'];
    if (file_exists($file_path)) {
        unlink($file_path); // Hapus file dari folder uploads
    }
}

// Hapus data dokumen dari database
$conn->query("DELETE FROM dokumen WHERE id_siswa = $id");

// Hapus data siswa dari database
$sql = "DELETE FROM siswa WHERE id_siswa = $id";
if ($conn->query($sql) === TRUE) {
    header("Location: index.php"); // Kembali ke dashboard admin
} else {
    echo "Gagal menghapus data: " . $conn->error;
}

$conn->close();
?>
