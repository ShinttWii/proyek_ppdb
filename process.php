<?php
include 'koneksi.php';
include 'upload.php';

if (isset($_POST['submit_form'])) {
  $nama_siswa = $_POST['nama_siswa'];
  $tanggal_lahir = $_POST['tanggal_lahir'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $alamat = $_POST['alamat'];
  $nama_orangtua = $_POST['nama_orangtua'];
  $no_telepon = $_POST['no_telepon'];

  $sql = "INSERT INTO siswa (nama_siswa, tanggal_lahir, jenis_kelamin, no_telepon, alamat, nama_orangtua, status_pendaftaran) VALUES (?, ?, ?, ?, ?, ?, 'dalamproses')";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ssssss", $nama_siswa, $tanggal_lahir, $jenis_kelamin, $no_telepon, $alamat, $nama_orangtua);

  if ($stmt->execute()) {
    $id_siswa = $stmt->insert_id ? $stmt->insert_id : $conn->insert_id;

    uploadDokumen($id_siswa, $_FILES['akta'], "Akta Kelahiran");
    uploadDokumen($id_siswa, $_FILES['foto'], "Foto Siswa");
    uploadDokumen($id_siswa, $_FILES['kk'], "Kartu Keluarga");

    echo "Pendaftaran berhasil dan dokumen berhasil diunggah.";
  } else {
    echo "Gagal mengirim data siswa.";
  }
}
?>
