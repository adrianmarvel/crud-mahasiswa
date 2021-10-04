<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Data</title>
    </head>
    <body>
        <a href="tambahdata.php"><button>Tambah Data</button></a>
        <table>
            <tr>
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
    </body>
</html>