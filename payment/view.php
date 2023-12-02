<?php 
    include "db.php";
    $query = $conn->query("select * from payment");
    $no = 1;
    while($row = mysqli_fetch_array($query)){
?>
<p>No: <span><?= $no++?></span> <span><?= $row['nama']?></span> <span><?= $row['harga']?></span> <span><?= $row['status']?></span></p>
<a href="https://invoice-staging.xendit.co/donation/minivirtuallibrary">BAYAR</a>
<?php }?>

<form method="post">
    <input type="number" name="id" placeholder="id">
    <input type="number" name="time" placeholder="time">
    <input type="submit" name="done">
</form>

<?php 
date_default_timezone_set("Asia/Jakarta");
$time = date("s");
echo $time;
    if(isset($_POST['done'])){
        
        $sec = $_POST['time'];

        if($sec == $time){
            $id = $_POST['id'];
            $cond = $conn->query("delete from payment where id = '$id'");
            if($cond){
                echo "terhapus";
            }
            else{
                echo "gagal";
            }
        }
    }
?>