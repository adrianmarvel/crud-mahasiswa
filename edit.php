<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit data</title>
</head>
<body>
    <h1>Edit Data</h1>

    <?php 
        require_once 'config/koneksi.php';
        $d = $_GET['d'];
        $con =  mysqli_query($koneksi, "SELECT * FROM biodata WHERE id=$d");
        while ($data = mysqli_fetch_array($con))
        {
            ?>
            <form action="config/update.php" method="post">
                <label>Nama</label>
                <input type="text" name="nama" value="<?php echo $data['nama'] ?>"><br>
                <label>Alamat</label>
                <input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"><br>
                <label>NIM</label>
                <input type="number" name="nim" value="<?php echo $data['nim'] ?>"><br>
                <label>Jurusan</label>
                <input type="text" name="jurusan" value="<?php echo $data['jurusan'] ?>"><br>
                <label>No. Hp</label>
                <input type="number" name="telp" value="<?php echo $data['telp'] ?>"><br>
                <input type="submit" name="submit" value="simpan">
            </form>
        <?php    
        }
    ?>
</body>
</html>