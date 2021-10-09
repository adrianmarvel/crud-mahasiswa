<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Data</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        <link rel="stylesheet" href="style/index.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col">
                </div>
                <div class="col-10">
                    <button type="button" class="btn btn-primary" onclick="window.location.href='tambahdata.php';">Tambah Data</button>
                    <table class="table table-striped table-hover">
                        <tr class="table-primary">
                            <td>Nama</td>
                            <td>Alamat</td>
                            <td>NIM</td>
                            <td>Jurusan</td>
                            <td>No. Hp</td>
                            <td>Aksi</td>
                        </tr>
                        <?php
                            require_once 'config/koneksi.php';
                            $con=mysqli_query($koneksi, "SELECT * FROM biodata");
                            while ($data = mysqli_fetch_array($con)){
                                ?>
                                <tr>
                                    <td><?php echo $data['nama']?></td>
                                    <td><?php echo $data['alamat']?></td>
                                    <td><?php echo $data['nim']?></td>
                                    <td><?php echo $data['jurusan']?></td>
                                    <td><?php echo $data['telp']?></td>
                                    <td> <a href="config/delete.php?d=<?= $data['id'] ?>">Hapus</a>
                                    || <a href="edit.php?d=<?= $data['id']?>">Edit</a></td>
                                </tr>
                            <?php } ?>
                    </table>
                </div>
                <div class="col">
                </div>
            </div>
        </div>
        
    </body>
</html>