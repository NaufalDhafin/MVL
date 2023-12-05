<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirect</title>
    <link rel="stylesheet" href="public/dist/css/loading.css">
</head>
<?php 
    if(isset($_GET['next'])){
       $np = $_GET['next']; // NP = Next Page;

       if($np == '1'){
        echo '<meta http-equiv="refresh" content="2;public/">';
        include 'app/src/load.php';
       }

       elseif($np == '2'){
        echo '<meta http-equiv="refresh" content="2;public/gabung.php">';
        include 'app/src/load.php';
       }

       elseif($np == '3'){
        echo '<meta http-equiv="refresh" content="2;public/member.html">';
        include 'app/src/load.php';
       }
    }

    else{
        echo '<meta http-equiv="refresh" content="2;public/">';
        include 'app/src/load.php';
    }
?>