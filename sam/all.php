<?php 
        include "../app/database/hosted.php";
        $users = $_GET['u'];
        $select = $conn->query("SELECT * FROM users where id_sam = '$users'");
        $row = mysqli_fetch_array($select);
        if(isset($_POST['kirim'])){

            $insert = $conn->query("INSERT INTO msg SET id_sam = '$row[id_sam]', pesan = '$_POST[pesan]'");
            if($insert){
                echo '<script>window.alert("Mengirim pesan berhasil!")</script>';
            }
            else{
                echo '<script>window.alert("GAGAL MEMBUAT SAM! Silahkan hubungi mimim.")</script>';
            }
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kirim SAM ke <?= $row['nama']?></title>
    <link rel="stylesheet" href="app/styles/c-sam.css">
</head>
<body>
    <div class="page">
        <p>Kirim pesan untuk <?= $row['nama']?>!</p>
    </div>
    <form method="post" class="form">
        <div class="form-control">
            <input type="text" name="pesan" required>
            <label>
                <span style="transition-delay:0ms">K</span>
                <span style="transition-delay:50ms">i</span>
                <span style="transition-delay:100ms">r</span>
                <span style="transition-delay:150ms">i</span>
                <span style="transition-delay:200ms">m</span>
                <span style="transition-delay:250ms"></span>
                <span style="transition-delay:300ms">P</span>
                <span style="transition-delay:350ms">e</span>
                <span style="transition-delay:400ms">s</span>
                <span style="transition-delay:550ms">a</span>
                <span style="transition-delay:500ms">n</span>
            </label>
        </div>
        <button class="button2" type="submit" name="kirim">
            Kirim Sekarang
        </button>
        <button class="button2" type="submit" name="buat" style="font-size: 15px;margin-top: 10px;">
            Buat juga yu...
        </button>
        <?php 
            if(isset($_POST['buat'])){
                header("location:c-sam.php");
            }
        ?>
    </form>
    
</body>
</html>