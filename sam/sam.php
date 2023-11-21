<?php 
    include "../app/database/hosted.php";
    $users1 = $_GET['sam'];
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
</head>
<body>
    <div class="nama">
        <p><?= $row1['nama']?></p>
        <p style="font-size: 15px;color:grey;">salin id ->( <?= $row1['id_sam']?> ) untuk login</p>
    </div>
    <div class="msg">
        <div class="main">
            <div class="tentang">
                <p><?= $row1['tentang']?></p>
            </div>
            <div class="pesan">
<?php 
    include "../app/database/hosted.php";
    $users = $_GET['sam'];
    $select = $conn->query("SELECT * FROM users AS u INNER JOIN msg AS m ON u.id_sam = m.id_sam WHERE u.id_sam = '$users'");
    $no = 1;
    while($row2 = mysqli_fetch_array($select)){?>
        <p><strong><?= $no++?>.</strong> <?= $row2['pesan']?></p>
<?php }?>
                
            </div>
        </div>
    </div>
</body>
</html>