<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tambah data Karyawan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container" style="margin-top: 50px;">
        <h1>Tambah Karyawan </h1>
        <form action="simpan.php" method="post">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label for="text">Jenis Kelamin</label>
                <input type="jenis_kelamin" class="form-control" id="jenis_kelamin" name="jenis_kelamin">
            </div>
            <div class="form-group">
                <label for="text">Alamat</label>
                <input type="alamat" class="form-control" id="alamat" name="alamat">
            </div>
            <div class="form-group">
                <label for="text"> jabatan</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>

</html>
