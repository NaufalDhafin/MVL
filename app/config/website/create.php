<?php 
    include '../db.php';
    if(isset($_POST['buat'])){
        $query = $conn->query("INSERT INTO website SET 
            judul = '$_POST[judul]', deskripsi = '$_POST[deskripsi]',
            link = '$_POST[link]', gmb = '$_POST[gmb]'");

        if($query){
            echo '<script>window.alert("Menambahkan Website Berhasil...")</script>';
        }
        else{
            echo '<script>window.alert("Menambahkan Website Gagal...")</script>';
        }
    }
?>