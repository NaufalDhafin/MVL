<?php 
    include "../app/database/hosted.php";
    $users1 = $_GET['u'];
    $select1 = $conn->query("SELECT * FROM users where id_sam = '$users1'");
    $row1 = mysqli_fetch_array($select1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAM Kamu</title>
    <link rel="stylesheet" href="app/styles/sam.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>

    <div class="header">
        <div class="kiri">
            <p id="nama"><?= $row['nama']?></p>
            <p id="id"><strong>ID : </strong><?= $row['id_sam']?></p>
        </div>
    </div>

    <div class="link">
        <p>Salin dan bagikan ke sosmed kamu</p>
        <div class="salin">
            <input value="dapine.my.id/sam/all.php?u=<?= $row['id_sam']?>" id="copy" readonly>
            <button onclick="copyLink()"><i class="ri-clipboard-line"></i></button>
        </div>
    </div>

    <p class="sinbox">SAM BOX</p>

    <div class="inbox">
        <p id="tentang">tentang</p>
<?php 
    include "../app/database/hosted.php";
    $users = $_GET['u'];
    $select = $conn->query("SELECT * FROM users AS u INNER JOIN msg AS m ON u.id_sam = m.id_sam WHERE u.id_sam = '$users'");
    $no = 1;
    while($row2 = mysqli_fetch_array($select)){?>

        <p id="pesan"><strong><?= $no++?>. </strong><?= $row2['pesan']?></p>

<?php }?>
    </div>
    <script>
        function copyLink() {  
            var copyLink = document.getElementById("copy");  
            copyLink.select();  
            document.execCommand("copy");
        }
    </script>
</body>
</html>