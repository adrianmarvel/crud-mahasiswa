<?php 
    require_once "koneksi.php";

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $telp = $_POST['telp'];

    $u = mysqli_query($koneksi, "UPDATE biodata SET id='$id',  nama='$nama', alamat='$alamat', nim='$nim', jurusan='$jurusan', telp='$telp' where id='$id'");
    if ($u)
    {
        echo "<script>alert('Data berhasil di edit');window.location='../index.php'</script>";
    }
    else
    {
        echo "<script>alert('Data gagal di edit');window.location='../index.php'</script>";
    }
?>