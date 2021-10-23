<?php
    require_once('../config/koneksi.php');

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $telp = $_POST['telp'];
    $hasil = "Gagal memasukan data";
    if($nama and $alamat and $nim and $jurusan and $telp){
        $sql1 = "INSERT INTO biodata(nama,alamat,nim,jurusan,telp) 
        values ('$nama','$alamat','$nim','$jurusan','$telp')";
        $q1 = mysqli_query($koneksi,$sql1);
        if($q1){
            $hasil = "Berhasil menambahkan data";
        }
    }
    $data['data']['result'] = $hasil;
    echo json_encode($data);
?>