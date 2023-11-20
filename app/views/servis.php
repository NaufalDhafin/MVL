<div class="servis">

    <p class="page">Servis</p>

    <div class="input">

        <p>Buat Servis</p>

        <form method="post">

            <input type="text" name="hubungi" placeholder="Yang bisa kami hubungi! email/wa/sosmed" class="text">

            <select name="servis">

                <option value="saran">Saran</option>

                <option value="masalah">Website Bermasalah</option>

                <option value="lainnya">Lainnya</option>

            </select>

            <textarea name="isi" cols="30" rows="10" placeholder="Apa yang kamu alami?"></textarea>

            <input type="submit" name="kirim" value="Kirim" class="kirim">

        </form>

    </div>

</div>
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

            echo '<meta http-equiv="refresh" content="0";index.php>';

        }

        else{

            echo "<script>window.alert('Servis tidak terkirim!, Silahkan mencobanya dilain waktu')</script>";

            echo '<meta http-equiv="refresh" content="0;index.php">';

        }

    }

?>