<?php 
    require_once('../config/koneksi.php');

    $sql1 = "select * from biodata";
    $q1 = mysqli_query($koneksi, $sql1);
    while($r1 = mysqli_fetch_array($q1)){
        $hasil[] = array(
            'id' => $r1['id'],
            'nama' => $r1['nama'],
            'alamat' => $r1['alamat'],
            'jurusan' => $r1['jurusan'],
            'nim' => $r1['nim'],
            'telp' => $r1['telp']
        );
    }
    $data['data']['result'] = $hasil;
    echo json_encode($data);

    /*$myArray = array();
    if ($result = mysqli_query($koneksi, "SELECT * FROM biodata"))
    {
        while ($row = $result->fetch_array(MYSQLI_ASSOC))
        {
            $myArray[] = $row;
        }
        //mysqli_close($koneksi);
        //    echo json_encode($myArray);
        $data['data']['result'] = $myArray;
        echo json_encode($result);
    }*/
?>