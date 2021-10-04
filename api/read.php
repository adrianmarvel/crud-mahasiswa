<?php 
    require_once('../config/koneksi.php');

    $myArray = array();
    if ($result = mysqli_query($koneksi, "SELECT * FROM biodata"))
    {
        while ($row = $result->fetch_array(MYSQLI_ASSOC))
        {
            $myArray[] = $row;
        }
        mysqli_close($koneksi);
            echo json_encode($myArray);
    }
?>