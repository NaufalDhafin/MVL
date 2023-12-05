<?php
include 'app/config/database.php';
$query = $conn->query("SELECT * FROM tugas");
$num = 1;
while ($row = mysqli_fetch_array($query)) {
?>
    <tr>
        <td data-label="no"><?= $num++?></td>
        <td data-label="nama tugas"><?= $row['nama']?></td>
        <td data-label="maktul"><?= $row['maktul']?></td>
        <td data-label="tanggal"><?= $row['tanggal']?></td>
        <td data-label="status"><?= $row['status']?></td>
        <td data-label="unduh">
            <a href="app/models/edit.php?edit=<?= $row['link']?>">edit</a> |
            <a href="app/models/edit.php?hapus=<?= $row['link']?>">hapus</a>
        </td>
    </tr>
<?php } ?>