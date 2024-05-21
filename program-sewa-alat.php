<?php
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
        header("Location: index.php");
       }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petani Pintar - Sewa Alat</title>
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>

<body class="body-fixed">
    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header-logo">
                        <a href="menu.php">
                            <img src="image/logo_petanipintar.png" width="40" height="40" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="main-navigation">
                        <button class="menu-toggle"><span></span><span></span></button>
                        <nav class="header-menu">
                            <ul class="menu">
                                <li><a href="menu.php">PetaniPintar</a></li>
                                <li><a href="program-tanam.php">Program Tanam</a></li>
                                <li><a href="program-pupuk-subsidi.php">Pupuk Subsidi</a></li>
                                <li><a href="program-sewa-alat.php">Sewa Alat</a></li>
                                <li><a href="#">Forum</a></li>
                                <li>
                                    <button onclick="window.location.href='profile.php'" class="signin">Profil Akun</button>
                                    <button onclick="window.location.href='login.php'" class="signup">Sign Out</button>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="viewport">
        <div id="js-scroll-content">
            <section class="main-banner" id="home">
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="banner-text">
                                    <h2 class="h2-title">Sewa Alat Pertanian dengan <span>PetaniPintar</span></h2>
                                    <p>
                                        Mempermudah petani untuk berkomunikasi dengan pihak terkait dalam sektor pertanian untuk dapat menyewa alat pertanian yang dibutuhkan.
                                    </p>
                                    <div class="banner-btn mt-4">
                                        <a href="#katalog" class="sec-btn">Cari Alat Pertanian</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="banner-img-wp">
                                    <img class="img-rounded" src="image/illustration/program3.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <div class="repeat-img" style="background-image: url(image/pattern1_background.png);">
                <!--static katalog 
                <section class="default-banner" id="katalog">
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">Katalog Peralatan</p>
                                    <h2 class="h2-title">Pertanian Modern</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row katalog-slider">
                            <div class="swiper-wrapper">
                                <div class="col-lg-4 swiper-slide">
                                    <div class="katalog-box text-center">
                                        <div style="background-image: url(image/alat/1.jpg);"
                                            class="katalog-img back-img">

                                        </div>
                                        <h3 class="h3-title">Kultivator</h3>
                                        <div>
                                            <ul>
                                                <li>
                                                    <p>Deskripsi dan harga.</p>
                                                </li>
                                                <li>
                                                <button onclick="window.location.href=''" class="signin">Lihat Alat</button>
                                                <button onclick="window.location.href=''" class="signup">Sewa</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 swiper-slide">
                                    <div class="katalog-box text-center">
                                    <div style="background-image: url(image/alat/2.jpg);"
                                            class="katalog-img back-img">

                                        </div>
                                        <h3 class="h3-title">Mesin Tanam Padi</h3>
                                        <div>
                                            <ul>
                                                <li>
                                                    <p>Deskripsi dan harga.</p>
                                                </li>
                                                <li>
                                                <button onclick="window.location.href=''" class="signin">Lihat Alat</button>
                                                <button onclick="window.location.href=''" class="signup">Sewa</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-wp">
                                <div class="swiper-button-prev swiper-button">
                                    <i class="uil uil-angle-left"></i>
                                </div>
                                <div class="swiper-button-next swiper-button">
                                    <i class="uil uil-angle-right"></i>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </section> -->

            <section class="default-banner" id="katalog">
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">PetaniPintar</p>
                                    <h2 class="h2-title">Peralatan Pertanian</h2>
                                </div>
                                <?php 
                                if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
                                    echo '<div class="text-center mb-5">
                                            <a href="edit-katalog.php" class="add">
                                                Edit Alat
                                            </a>
                                            <a href="add-katalog.php" class="add">
                                                + Tambah Alat
                                            </a>
                                        </div>';
                                }
                                ?>
                            </div>
                        </div>
                        <div class="row katalog-slider">
                            <div class="swiper-wrapper">

                            <?php
                            include("php/config.php");
                            $sql = "SELECT * FROM alat";
                            $result = $con->query($sql);

                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo '<div class="col-lg-4 swiper-slide">
                                            <div class="katalog-box text-center">
                                                <div style="background-image: url(image/alat/'.$row["gambar"].');" class="katalog-img back-img"></div>
                                                <h3 class="h3-title">'.$row["nama"].'</h3>
                                                <div>
                                                    <ul>
                                                        <li>
                                                            <p class="p-katalog">'.$row["deskripsi"].'</p> 
                                                        </li>
                                                        <li>
                                                            <p class="p-katalog">Rp. ' . number_format($row["harga"], 0, ',', '.') . ' / Musim</p>
                                                        </li>
                                                        <li>
                                                            <button onclick="window.location.href=\'detail.php?id='.$row["id"].'\'" class="signin">Lihat Alat</button>
                                                            <button onclick="window.location.href=\'sewa.php?id='.$row["id"].'\'" class="signup">Sewa</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>';
                                }
                            } else {
                                echo "Tidak ada data alat.";
                            }
                            ?>
                            </div>
                            <div class="swiper-button-wp">
                                <div class="swiper-button-prev swiper-button">
                                    <i class="uil uil-angle-left"></i>
                                </div>
                                <div class="swiper-button-next swiper-button">
                                    <i class="uil uil-angle-right"></i>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>


                    </div>
                </div>
            </section>


        </div>
        <footer class="site-footer" id="help">
                <div class="top-footer section">
                    <div class="sec-wp">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="footer-info">
                                        <div class="footer-logo">
                                            <a href="index.php">
                                                <img src="image/petanipintar_logo80.png" alt="Logo">
                                            </a>
                                        </div>
                                        <h4 class="h4-title">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h4>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="footer-flex-box">
                                        <div class="footer-menu">
                                            <h3 class="h3-title">Kontak</h3>
                                            <ul>
                                                <li><a href="#">petanipintar@gmail.com</a></li>
                                                <li><a href="#">+62 1234567890</a></li>
                                            </ul>
                                        </div>
                                        <div class="footer-menu food-nav-menu">
                                            <h3 class="h3-title">Menu</h3>
                                            <ul class="column-2">
                                                <li><a href="#about">Tentang Program</a></li>
                                                <li><a href="#sdk">Syarat dan Ketentuan</a></li>
                                                <li><a href="#form">Formulir</a></li>
                                                <li><a href="#help" class="footer-active-menu">Pusat Bantuan</a></li>
                                            </ul>
                                        </div>
                                        <div class="footer-menu">
                                            <h3 class="h3-title">Informasi Lain</h3>
                                            <ul>
                                                <li><a href="#">FAQ</a></li>
                                                <li><a href="#">Kebijakan Privasi</a></li>
                                                <li><a href="#">Syarat dan Ketentuan</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="end-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center mb-3">
                                <a>kamipetanipintar.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                </footer>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/ScrollTrigger.min.js"></script>
    <script src="js/gsap.min.js"></script>
    <script src="main.js"></script>
</body>

</html>
