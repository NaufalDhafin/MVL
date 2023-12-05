<?php
require 'config.php';

$uploaddir = '../imgs/';
$uploadfile = $uploaddir . basename($_FILES['gb']['name']);
if (move_uploaded_file($_FILES['gb']['tmp_name'], $uploadfile)) {
    $nd = $_POST['nd'];
    $nb = $_POST['nb'];
    $sm = $_POST['sm'];
    $lk = $_POST['lk'];
    $wa = $_POST['wa'];
    $dk = $_POST['dk'];

    $query = $conf->query("INSERT INTO member SET 
    nd = '$nd', nb = '$nb',
    sm = '$sm', lk = '$lk',
    wa = '$wa', dk = '$dk',
    gb = '$uploadfile'");

    if ($query) {
        echo '<script>window.alert("Data kamu terkirim. Selamat bergabung di KELOMPOK KELAS TERBANG")</script>';
        echo '<meta http-equiv="refresh" content="0;../../index.php?next=1">';
    } else {
        echo '<script>window.alert("Data kamu terkirim. Selamat bergabung di KELOMPOK KELAS TERBANG")</script>';
        echo '<meta http-equiv="refresh" content="0;../../index.php?next=1">';
    }
} else {
    echo '<script>window.alert("Data kamu tidak terkirim, Sepertinya ada kendala. lapor aja ke dafin yaaw.")</script>';
    echo '<meta http-equiv="refresh" content="0;../../index.php?next=1">';
}
