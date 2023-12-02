<?php 
include "db.php";

if(isset($_GET['payment'])){
    $query = $conn->query("select * from payment where id = '$_GET[payment]'");
    $data = mysqli_fetch_assoc($query);
}

?>