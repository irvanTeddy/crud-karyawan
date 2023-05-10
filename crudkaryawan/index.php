<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Data Karyawan</h2>
        <a href="tambah.php" class="btn btn-primary mb-3">Tambah Data</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Jabatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
include 'koneksi.php';
$id = 1;
$query = mysqli_query($koneksi, "SELECT * FROM tabel_karyawan");
while ($row = mysqli_fetch_array($query)) {
    ?>
                <tr>
                    <td><?php echo $id++; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['jenis_kelamin']; ?></td>
                    <td><?php echo $row['alamat']; ?></td>
                    <td><?php echo $row['jabatan']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a>
                        <a href="hapus.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"
                            onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</body>

</html>