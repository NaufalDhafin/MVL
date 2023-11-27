<?php 

#CONFIG DATABASE
//LOCALHOST
const hostname = 'localhost';
const username = 'root';
const password = '';
const database = 'mvl';

//HOSTING
// const hostname = '';
// const username = '';
// const password = '';
// const database = '';

const conn = mysqli_connect(hostname,username,password,database);
if(!conn){
    echo "(<span id='a'>BAHAYA</span>) <p id='b'>= 'KONEKSI DATABASE BERMASALAH!'</p>";
}
?>