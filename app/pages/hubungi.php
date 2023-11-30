<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MVL | Mini Virtual Library</title>
    <link rel="stylesheet" href="../../public/styles/index.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.6.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>
    <header class="header">
        <nav class="navbar">
            <h2 class="logo"><a href="index.html">Mini Virtual Library</a></h2>
            <input type="checkbox" id="menu-toggle" />
            <label for="menu-toggle" id="hamburger-btn">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                    <path d="M3 12h18M3 6h18M3 18h18" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                </svg>
            </label>
            <ul class="links">
                <li><a href="views.php">Beranda</a></li>
                <li><a href="?pages=fitur">Fitur</a></li>
                <li><a href="?pages=hubungi">Hubungi</a></li>
            </ul>
            <div class="buttons">
                <a href="?page=4" class="signin">Sign In</a>
                <a href="?page=5" class="signup">Sign Up</a>
            </div>
        </nav>
    </header>
    <section class="hero-section">
        <form method="post">
            <p id="hub">Hubungi</p>
            <div class="input">
                <div class="in">
                    <p>Nama</p>
                    <input type="text" name="">
                </div>
                <div class="in">
                    <p>Tipe</p>
                    <select name="" required>
                        <option>Pilih Tipe</option>
                        <option value="">Website Bermasalah</option>
                        <option value="">Saran/Pertanyaan</option>
                        <option value="">Hubungi Saja</option>
                        <option value="">Lainnya</option>
                    </select>
                </div>
                <div class="in">
                    <p>Pesan</p>
                    <textarea name="" cols="25" rows="5"></textarea>
                </div>
                <div class="btn">
                    <button type="submit" name="send">Kirim</button>
                </div>
            </div>
        </form>
    </section>
    <div class="footer">
        <!-- <div class="alert">
      <?php 
        if(isset($_GET['page'])){
          if($_GET['page'] == 1){
            header("location:index.php");
          }
          elseif($_GET['page'] == 2){
            header("location:fitur.php");
          }
          elseif($_GET['page'] == 3){
            header("location:contact.php");
          }
        }
      ?>
      <p><i class="ri-check-double-line" id="done"></i><i>Dalam Pengembangan...</i></p>
      <p><i class="ri-error-warning-line" id="none"></i><i>Website Bermasalah...</i></p>
    </div> -->
    </div>
</body>

</html>