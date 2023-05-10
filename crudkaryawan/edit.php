<?php
include 'koneksi.php';

$id = $_GET['id'];

$sql = "SELECT * FROM tabel_karyawan WHERE id=$id";
$result = $koneksi->query($sql);

$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit data Karyawan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h3 class="mb-5">Edit Karyawan </h3>
        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" value="<?php echo $row['nama']; ?>">
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis kelamin</label>
                <input type="text" class="form-control" name="jenis_kelamin"
                    value="<?php echo $row['jenis_kelamin']; ?>">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" name="alamat" value="<?php echo $row['alamat']; ?>">
            </div>
            <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <input type="text" class="form-control" name="jabatan" value="<?php echo $row['jabatan']; ?>">
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>
</body>

</html>