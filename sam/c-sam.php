<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat SAM</title>
    <link rel="stylesheet" href="app/styles/c-sam.css">
</head>
<body>
    <div class="page">
        <p>Buat SAM Sekarang!</p>
    </div>
    <form method="post" class="form">
        <div class="form-control">
            <input type="text" name="nama" required>
            <label>
                <span style="transition-delay:0ms">N</span><span style="transition-delay:50ms">a</span><span style="transition-delay:100ms">m</span><span style="transition-delay:150ms">a</span><span style="transition-delay:200ms"></span><span style="transition-delay:250ms">k</span><span style="transition-delay:300ms">a</span><span style="transition-delay:350ms">m</span><span style="transition-delay:400ms">u</span>
            </label>
        </div>
        <div class="form-control" style="margin-top: 15px;">
            <input type="text" name="tentang" required>
            <label>
                <span style="transition-delay:0ms">T</span><span style="transition-delay:50ms">e</span><span style="transition-delay:100ms">n</span><span style="transition-delay:150ms">t</span><span style="transition-delay:200ms">a</span><span style="transition-delay:250ms">n</span><span style="transition-delay:300ms">g</span><span style="transition-delay:350ms"></span><span style="transition-delay:400ms">A</span><span style="transition-delay:450ms">p</span><span style="transition-delay:500ms">a</span><span style="transition-delay:550ms">?</span>
            </label>
        </div>
        <button class="button2" type="submit" name="create">
            Buat Sekarang
        </button>
    </form>
    <?php 
        include "../app/database/hosted.php";
        if(isset($_POST['create'])){
            $nomor = '123456789';
            $acak  = substr(str_shuffle($nomor), 0, 3);
            $insert = $conn->query("INSERT INTO users SET id_sam = '$acak', nama = '$_POST[nama]', tentang = '$_POST[tentang]'");
            $select = $conn->query("SELECT * FROM users where id_sam = '$acak'");
            $row = mysqli_fetch_array($select);
            if($insert){
                header("location:sam.php?u=$row[id_sam]");
            }
            else{
                echo '<script>window.alert("GAGAL MEMBUAT SAM! Silahkan hubungi mimim.")</script>';
            }
        }
    ?>
</body>
</html>