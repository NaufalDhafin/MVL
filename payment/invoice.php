<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran Berhasil</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.6.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>
    <?php 
        if(isset($_GET['invoice'])){
            $a = $_GET['invoice'];
            if($a >= 1){
                echo '<div class="card" id="done">
                <div class="header">
                    <div class="image">
                        <i class="ri-check-double-line"></i>
                    </div>
                    <div class="content">
                        <span class="title">Traktir Terkirim</span>
                        <p class="message">Terimakasih banyak udah nge-traktir aku, lancar selalu segala keinginan kamu yaa, tapi untuk keinginan bersama masalalu kayanya susah deh. haha...</p>
                    </div>
                    <div class="actions">
                        <button type="button" class="history">Kembali</button>
                    </div>
                </div>
            </div>';
            }
            else{
                echo '<div class="card" id="done">
                <div class="header">
                    <div class="image" id="faileddd">
                        <i class="ri-close-line"></i>
                    </div>
                    <div class="content">
                        <span class="title" id="failed">Traktir Terkirim</span>
                        <p class="message">Terimakasih udah mau ngetraktir aku yaa, tapi kayanya engga bisa karna sistem kami error.</p>
                    </div>
                    <div class="actions">
                        <button type="button" class="history" id="failedd">Kembali</button>
                    </div>
                </div>
            </div>';
            }
        }
    ?>
</body>
</html>