<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="style/tambahdata.css">
    <title>Tambah Data</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
            </div>
            <div class="col-12">
                <h1>Tambah Data Mahasiswa</h1>
                <form class="formtambahdata" action="config/input.php" method="post">
                    <div class="mb-3">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="mb-3">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat">
                    </div>
                    <div class="mb-3">
                        <label>NIM</label>
                        <input type="number" class="form-control" name="nim">
                    </div>
                    <div class="mb-3">
                        <label>Jurusan</label>
                        <input type="text" class="form-control" name="jurusan">
                    </div>
                    <div class="mb-3">
                        <label>No. HP</label>
                        <input type="number" class="form-control" name="telp">
                    </div>
                    <div class="tombol1">
                        <div class="tombol2">
                            <button type="submit" class="btn btn-primary" name="submit" value="simpan">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col">
            </div>
        </div>
    </div>
    
</body>
</html>