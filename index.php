<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <h2>Formulir Pendaftaran</h2>
    <form action="process.php" method="POST" enctype="multipart/form-data">
        <label>Nama Siswa:</label>
        <input type="text" name="nama_siswa" required><br>

        <label>Tanggal Lahir:</label>
        <input type="date" name="tanggal_lahir" required><br>

        <label>Jenis Kelamin:</label>
        <select name="jenis_kelamin" required>
            <option value="">-- Pilih --</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br>

        <label>Alamat:</label>
        <input type="text" name="alamat" required><br>

        <label>Nama Orang Tua/Wali:</label>
        <input type="text" name="nama_orangtua" required><br>

        <label>No Telepon:</label>
        <input type="text" name="no_telepon" required><br>

        <label>Upload Akta Kelahiran:</label>
        <input type="file" name="akta" accept=".jpg,.jpeg,.png,.pdf" required><br>

        <p> Contoh Nama File: Dewi_Akta_Kelahiran</p>

        <label>Upload Foto Siswa:</label>
        <input type="file" name="foto" accept=".jpg,.jpeg,.png,.pdf" required><br>

        <p> Contoh Nama File: Dewi_Foto_Siswa</p>

        <label>Upload Kartu Keluarga:</label>
        <input type="file" name="kk" accept=".jpg,.jpeg,.png,.pdf" required><br>

        <p> Contoh Nama File: Dewi_Kartu_Keluarga</p>

        <button type="submit" name="submit_form">Daftar</button>
    </form>
</body>
</html>
