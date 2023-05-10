<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$jabatan = $_POST['jabatan'];

$sql = "UPDATE tabel_karyawan SET nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat', jabatan='$jabatan' WHERE id=$id";

if ($koneksi->query($sql) === true) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
