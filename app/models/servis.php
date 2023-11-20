<?php 

    error_reporting(0);

    //include "../database/local.php";

    include "../app/database/hosted.php";

    $nama = $_POST['hubungi'];

    $servis = $_POST['servis'];

    $isi = $_POST['isi'];

    if(isset($_POST['kirim'])){

        $query = $conn->query("INSERT INTO servis SET hubungi = '$nama', servis = '$servis', isi = '$isi'");

        if($query){

            echo "<script>window.alert('Servis telah terkirim!')</script>";

            echo '<meta http-equiv="refresh" content="0";../../public/>';

        }

        else{

            echo "<script>window.alert('Servis tidak terkirim!, Silahkan mencobanya dilain waktu')</script>";

            echo '<meta http-equiv="refresh" content="0;../../public/">';

        }

    }

?>