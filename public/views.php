<?php
$header = include "../app/helpers/header.php";
$footer = include "../app/helpers/footer.php";


if(isset($_GET['pages'])){
    $pages = $_GET['pages'];
    if($pages == "fitur"){
        include "../app/pages/fitur.php";
    }
    elseif($pages == "hubungi"){
        include "../app/pages/hubungi.php";
    }
}
else{
    include "../app/pages/index.php";
}