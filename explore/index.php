<?php $pTitle = "Explore & Experience Mutia";
require_once $_SERVER['DOCUMENT_ROOT'] . '/mutia/core/global_variables.php'; ?>

<!DOCTYPE html>
<html style="scroll-behavior: smooth;" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Mutia: The Green Jewel of Zamboanga del Norte">
    <meta name="keywords" content="Mutia, Zamboanga del Norte, Green Jewel Mutia">
    <meta name="author" content="Ian Gabriel Libetario">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pTitle ?></title>
    <!-- CSS/stylesheets -->
    <link rel="stylesheet" href="https://bruuian.me/mutia/assets/css/bulma.css">
    <link rel="stylesheet" href="https://bruuian.me/mutia/assets/css/mutia.css">
    <link rel="stylesheet" href="https://atugatran.github.io/FontAwesome6Pro/css/all.min.css">
</head>

<body>

    <div class="main-content" id="section1">
        <?php require_once $dir . '/components/navbar.php'; ?>
        <section class="hero is-medium is-link" style="margin-top: 3vh;
            background: url('https://bruuian.me/mutia/assets/img/hero2.png');
            background-size: cover;
            background-position: center;">
            <div class="hero-body">
            </div>
        </section>

        <div class="container">
            <p class="discover-paragraph-end">Mutia, a picturesque municipality in Zamboanga del Norte, offers several attractions for visitors seeking natural beauty and cultural experiences.

                Here are some notable places to explore:</p>

            <div class="fixed-grid" style="padding-top:30px;">
                <div class="grid">
                    <div class="cell">
                        <h3 class="explore-title">Canon Falls</h3>
                        <p class="explore-paragraph">A serene waterfall located in Barangay Buena Suerte, Canon Falls is a perfect spot for nature lovers and those seeking a tranquil retreat.</p>
                    </div>
                    <div class="cell"><img src="https://bruuian.me/mutia/assets/img/canon.png"
                            alt="Discover Mutia">
                    </div>

                    <div class="cell">
                        <h3 class="explore-title">Nelsa's Agri-Tourism Park</h3>
                        <p class="explore-paragraph">This park offers activities like guyabano tree planting, fruit picking, and swimming. Visitors can also enjoy farm-to-table dining and explore lush gardens.</p>
                    </div>
                    <div class="cell"><img src="https://bruuian.me/mutia/assets/img/nelsa.png"
                            alt="Discover Mutia">
                    </div>

                    <div class="cell">
                        <h3 class="explore-title">Cecilia's Plate</h3>
                        <p class="explore-paragraph">A dining destination known for its great ambiance and cool climate, offering a variety of dishes amidst a scenic setting.</p>
                    </div>
                    <div class="cell"><img src="https://bruuian.me/mutia/assets/img/cecilia.png"
                            alt="Discover Mutia">
                    </div>

                    <div class="cell">
                        <h3 class="explore-title">Alvenda Peak</h3>
                        <p class="explore-paragraph">Located in Barangay Alvenda, this peak provides panoramic views of the surrounding landscapes, making it ideal for hikers and nature enthusiasts.</p>
                    </div>
                    <div class="cell"><img src="https://bruuian.me/mutia/assets/img/alvenda.png"
                            alt="Discover Mutia">
                    </div>

                    <div class="cell">
                        <h3 class="explore-title">Baga Falls</h3>
                        <p class="explore-paragraph">Another waterfall in Mutia, offering a refreshing experience for visitors looking to explore the natural beauty of the area.</p>
                    </div>
                    <div class="cell"><img src="https://bruuian.me/mutia/assets/img/baga.png"
                            alt="Discover Mutia">
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT/scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://bruuian.me/mutia/assets/js/smoothscroll.js"></script>
    <script src="https://raw.githubusercontent.com/Atugatran/FontAwesome6Pro/refs/heads/main/js/pro.min.js"></script>
</body>

</html>