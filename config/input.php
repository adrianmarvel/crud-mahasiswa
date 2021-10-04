<?php 
    require_once 'koneksi.php';

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $telp = $_POST['telp'];

    if ($nama == null || $alamat == null || $nim == null || $jurusan == null || $telp == null)
    {
        echo "<script>alert('Silahkan lengkapi data');window.location='../tambahdata.php'</script>";
    } 
    else
    {
        $con = mysqli_query($koneksi, "INSERT INTO biodata (nama, alamat, nim, jurusan, telp)
        values ('$nama', '$alamat', '$nim', '$jurusan', '$telp')");
        echo "<script>alert('Data berhasil dimasukan');window.location='../index.php'</script>";
    }
?>