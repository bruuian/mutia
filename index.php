<?php $pTitle = "Home"; ?>

<!DOCTYPE html>
<html style="scroll-behavior: smooth;">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Mutia: The Green Jewel of Zamboanga del Norte">
    <meta name="keywords" content="Mutia, Zamboanga del Norte, Green Jewel Mutia">
    <meta name="author" content="Ian Gabriel Libetario">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pTitle ?></title>
    <!-- CSS/stylesheets -->
    <link rel="stylesheet" href="./assets/css/bulma.css">
    <link rel="stylesheet" href="./assets/css/mutia.css">
    <link rel="stylesheet" href="https://atugatran.github.io/FontAwesome6Pro/css/all.min.css">
</head>

<body>
    <div class="<?= $pTitle == 'Home' ? 'video-background' : '' ?>">
        <video autoplay loop muted playsinline style="filter: brightness(30%);">
            <source src="./assets/video/mutia.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="main-content" id="section1">
        <a href="#section2"><i class="fa-regular fa-up-to-line"></i></a>
            <?php include "components/navbar.php"; ?>
            <div class="welcome-text">
                <h1 class="welcome-title">WELCOME TO THE</h1>
                <h2 class="welcome-subtitle">Green Jewel of Zamboanga</h2>
            </div>
        </div> <!-- End of .main-content -->
    </div> <!-- End of .video-background -->

    <!-- Add Hero Section Below the Existing Design -->
    <section class="hero is-info is-fullheight" style="border-top-left-radius: 5vh; border-top-right-radius: 5vh;" id="section2">
        <div class="hero-body bg">
            <div class="welcome-text">
                <div class="columns">
                    <div class="column">
                        <img src="http://localhost/mutia/assets/img/discover2.png"
                            alt="Discover Mutia">
                    </div>
                    <div class="column has-text-left">
                        <h1 class="discover-title">Discover Mutia's wonder</h1>
                        <p class="discover-subtitle">Immerse yourself in a unique blend of agriculture, tourism, and heritage that defines this beautiful municipality.</p>
                        <a class="discover-more">>>> Click here for more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- JAVASCRIPT/scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="http://localhost/mutia/assets/js/smoothscroll.js"></script>
    <script src="https://raw.githubusercontent.com/Atugatran/FontAwesome6Pro/refs/heads/main/js/pro.min.js"></script>
</body>

</html>