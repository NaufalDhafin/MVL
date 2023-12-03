<?php 
    include '../config/database.php';

    date_default_timezone_set("Asia/Jakarta");
    $tanggal = date("d-m-Y | H.i.s");

    $uploaddir = '../src/';
    $uploadfile = $uploaddir . basename($_FILES['file']['name']);
    $a = $_POST['nama'];
    $b = $_POST['matkul']; 

echo '<pre>';
if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
    $query = $conn->query("INSERT INTO tugas SET nama = '$a', maktul = '$b', tanggal = '$tanggal', link = '$uploadfile'");
    if($query){
        echo '<meta http-equiv="refresh" content="0;../../">';
    }
    else{
        echo '<meta http-equiv="refresh" content="0;../../index.php?failed">';
    }
} else {
    echo "Possible file upload attack!\n";
}

?>