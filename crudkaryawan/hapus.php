<?php
include 'koneksi.php';

$id = $_GET['id'];

$hapus = mysqli_query($koneksi, "DELETE FROM tabel_karyawan WHERE id='$id'");

if ($hapus) {
    header("location:index.php");
} else {
    echo "Gagal menghapus data";
}
