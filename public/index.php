<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVL - Mini Virtual Library</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>
    <div class="header">
        <div class="logo">
            <p id="desktop">Mini Virtual Library</p>
            <p id="mobile">MVL</p>
        </div>
        <form method="post" class="link">
            <button type="submit" name="beranda">
                <a class="menu">
                    <i class="ri-home-3-line"></i>
                    <p id="desktop">Beranda</p>
                </a>
            </button>
            <button type="submit" name="website">
                <a class="menu">
                    <i class="ri-earth-line"></i>
                    <p id="desktop">Website</p>
                </a>
            </button>
            <button type="submit" name="informasi">
                <a class="menu">
                    <i class="ri-notification-3-line"></i>
                    <p id="desktop">Informasi</p>
                </a>
            </button>
            <button type="submit" name="servis">
                <a class="menu">
                    <i class="ri-customer-service-2-line"></i>
                    <p id="desktop">Servis</p>
                </a>
            </button>
        </form>
    </div>

    <?php 
        if(isset($_POST['website'])){
            include "../app/views/website.php";
        }
        elseif(isset($_POST['informasi'])){
            include "../app/views/informasi.php";
        }
        elseif(isset($_POST['servis'])){
            include "../app/views/servis.php";
        }
        else{
            include "../app/views/beranda.php";
        }
    ?>
    <br>
    <br>
</body>
</html>