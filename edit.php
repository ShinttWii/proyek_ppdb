<?php
// admin/edit.php
include '../PPDB PAUD AL HUDA/koneksi.php';

// Ambil data siswa berdasarkan ID
$id = $_GET['id'];
$sql = "SELECT * FROM siswa WHERE id_siswa = $id";
$result = $conn->query($sql);
$data = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Siswa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Edit Data Siswa</h2>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id_siswa" value="<?php echo $data['id_siswa']; ?>">

        <label>Nama Siswa:</label><br>
        <input type="text" name="nama_siswa" value="<?php echo $data['nama_siswa']; ?>" required><br>

        <label>Tanggal Lahir:</label><br>
        <input type="date" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir']; ?>" required><br>

        <label>Jenis Kelamin:</label><br>
        <select name="jenis_kelamin" required>
            <option value="Laki-laki" <?php if($data['jenis_kelamin'] == 'Laki-laki') echo 'selected'; ?>>Laki-laki</option>
            <option value="Perempuan" <?php if($data['jenis_kelamin'] == 'Perempuan') echo 'selected'; ?>>Perempuan</option>
        </select><br>

        <label>Alamat:</label><br>
        <textarea name="alamat" required><?php echo $data['alamat']; ?></textarea><br>

        <label>Nama Orangtua:</label><br>
        <input type="text" name="nama_orangtua" value="<?php echo $data['nama_orangtua']; ?>" required><br>

        <label>No Telepon:</label><br>
        <input type="text" name="no_telepon" value="<?php echo $data['no_telepon']; ?>" required><br>

        <input type="submit" value="Simpan">
        <a href="index.php">Kembali</a>
    </form>
</body>
</html>
