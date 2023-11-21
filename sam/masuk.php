<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk</title>
    <link rel="stylesheet" href="app/styles/c-sam.css">
</head>
<body>
    <div class="page">
        <p>Masuk ke SAM kamu</p>
    </div>
    <form method="post" class="form">
        <div class="form-control">
            <input type="text" name="id_sam" required>
            <label>
                <span style="transition-delay:100ms">ID Kamu</span>
            </label>
        </div>
        <button class="button2" type="submit" name="masuk">
            Masuk
        </button>
    </form>

    <?php 
        error_reporting(0);
        include "../app/database/hosted.php";

        if(isset($_POST['masuk'])){
            $select = $conn->query("SELECT * FROM users where id_sam = '$_POST[id_sam]'");
            $row = mysqli_fetch_array($select);
            if($_POST['id_sam'] == $row['id_sam']){
                header("location:sam.php?sam=$row[id_sam]");
            }
            else{
                echo '<script>window.alert("GAGAL MEMBUAT SAM! Silahkan hubungi mimim.")</script>';
            }
        }
    ?>
</body>
</html>