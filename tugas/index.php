<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tugas</title>
    <link rel="stylesheet" href="app/styles/style.css">
</head>
<body>
    <?php 
      if(isset($_GET['failed'])){
        echo '<script>window.alert("Gagal Menambahkan Tugas")</script>';
      }
    ?>
    <div class="header">
        <p>Kumpulan Tugas</p>
        <!-- <a href=""><button>Cari Tugas</button></a> -->
    </div>
    
    <table>
        <thead>
          <tr>
            <th scope="col">no</th>
            <th scope="col">nama tugas</th>
            <th scope="col">maktul</th>
            <th scope="col">tanggal</th>
            <th scope="col">status</th>
            <th scope="col">unduh</th>
          </tr>
        </thead>
        <tbody>
          <?php include 'app/models/rowsAll.php';?>
        </tbody>
    </table>
</body>
</html>