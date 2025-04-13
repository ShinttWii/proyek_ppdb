<?php
function uploadDokumen($id_siswa, $file, $nama_label) {
  global $conn;

  if ($file['error'] === 0) {
    $allowed_types = ['image/jpeg', 'image/jpg', 'image/png', 'application/pdf'];
    $file_type = $file['type'];

    if (in_array($file_type, $allowed_types)) {
      if (!file_exists('uploads')) {
        mkdir('uploads', 0777, true);
      }

      $file_name = basename($file['name']);
      $file_path = "uploads/" . time() . "_" . $file_name;
      $tanggal_upload = date('Y-m-d H:i:s');

      if (move_uploaded_file($file['tmp_name'], $file_path)) {
        $sql = "INSERT INTO dokumen (id_siswa, nama_dokumen, file_path, tanggal_upload) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("isss", $id_siswa, $nama_label, $file_path, $tanggal_upload);
        $stmt->execute();
      } else {
        echo "Gagal memindahkan file $nama_label.<br>";
      }
    } else {
      echo "Tipe file tidak diizinkan untuk $nama_label.<br>";
    }
  }
}
?>
