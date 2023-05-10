<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$jabatan = $_POST['jabatan'];

$sql = "INSERT INTO tabel_karyawan (nama, jenis_kelamin, alamat, jabatan)
VALUES ('$nama', '$jenis_kelamin', '$alamat', '$jabatan')";

if ($koneksi->query($sql) === true) {
    echo "Data peminjaman berhasil disimpan.";
    header("location:index.php");
} else {
    echo "Gagal menghapus data";
}

$koneksi->close();
?>
<br><br>
<a href="index.php">Kembali</a>
