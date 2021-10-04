<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <form action="config/input.php" method="post">
        <label>Nama</label>
        <input type="text" name="nama"><br>
        <label>Alamat</label>
        <input type="text" name="alamat"><br>
        <label>NIM</label>
        <input type="number" name="nim"><br>
        <label>Jurusan</label>
        <input type="text" name="jurusan"><br>
        <label>No. Hp</label>
        <input type="number" name="telp"><br>
        <input type="submit" name="submit" value="simpan">
    </form>
</body>
</html>