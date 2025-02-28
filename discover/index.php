<?php $pTitle = "Discover Mutia";
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
            background: url('https://bruuian.me/mutia/assets/img/hero1.png');
            background-size: cover;
            background-position: center;">
            <div class="hero-body">
            </div>
        </section>

        <div class="container">
            <p class="main-paragraph"><b>Welcome to Mutia</b>, a hidden gem nestled in the captivating region of Zamboanga Peninsula in the Philippines. Mutia, located in the province of Zamboanga del Norte, offers a tranquil retreat amidst breathtaking landscapes and a warm community. Join us as we embark on a virtual journey to discover the enchanting beauty of Mutia.</p>

            <h3 class="discover-title-text">A Tranquil Haven</h3>
            <p class="discover-paragraph">Mutia is a haven for those seeking serenity and natural beauty.
                The municipality boasts a peaceful ambiance, allowing visitors to unwind and connect with nature.
                Immerse yourself in the lush surroundings as you explore the verdant hills, rolling fields, and pristine forests.
                The picturesque landscapes provide the perfect backdrop for relaxation and rejuvenation.</p>

            <h3 class="discover-title-text">Rich Cultural Heritage</h3>
            <p class="discover-paragraph">Mutia is home to a vibrant community with a rich cultural heritage.
                The locals take pride in their traditions and customs, which are showcased through colorful festivals and cultural events.
                Witness traditional dances, music performances, and artistic displays that reflect the unique identity of Mutia.
                Engage with the friendly residents, learn about their customs, and experience their warm hospitality.</p>

            <h3 class="discover-title-text">Natural Wonders</h3>
            <p class="discover-paragraph">Nature lovers will be delighted by the natural wonders that Mutia has to offer.
                Explore the municipality's diverse ecosystem, which includes lush forests, sparkling rivers, and captivating waterfalls.
                One must-visit destination is the breathtaking Ditay Falls, where you can marvel at the cascading waters amidst a picturesque setting.
                Feel the cool mist on your skin as you appreciate the raw beauty of this natural wonder.</p>

            <h3 class="discover-title-text">Community and Cuisine</h3>
            <p class="discover-paragraph">The warmth of the Mutia community extends to its culinary offerings.
                Indulge in the local cuisine, which features a fusion of flavors influenced by the region's cultural diversity.
                Taste the freshness of seafood dishes, savor hearty stews, and treat your taste buds to unique delicacies.
                Engage in conversations with locals and hear stories about the traditional recipes passed down through generations.</p>

            <h3 class="discover-title-text" style="text-align: left;">Getting to Mutia</h3>
            <p class="discover-paragraph-end">The warmth of the Mutia community extends to its culinary offerings. Indulge in the local cuisine, which features a fusion of flavors influenced by the region's cultural diversity. Taste the freshness of seafood dishes, savor hearty stews, and treat your taste buds to unique delicacies. Engage in conversations with locals and hear stories about the traditional recipes passed down through generations.</p>

            <h3 class="discover-title-text" style="font-size: 34px;">Immerse Yourself in Mutia's Charm</h3>
            <p class="discover-paragraph-end">Mutia invites you to immerse yourself in its charm and experience a tranquil escape like no other. Whether you seek solace in nature, yearn for cultural immersion, or desire to savor local flavors, Mutia offers a delightful experience for every traveler. Discover hidden treasures, forge connections with the locals, and create lasting memories in this enchanting municipality.
                <br>
                Plan your visit to Mutia and embark on a remarkable journey through the natural wonders and cultural richness of Zamboanga del Norte. Let the serene landscapes, warm community, and captivating heritage of Mutia captivate your heart and leave you with cherished memories. Mutia awaits, ready to share its beauty and hospitality with you.
            </p>
        </div>
    </div>

    <!-- JAVASCRIPT/scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://bruuian.me/mutia/assets/js/smoothscroll.js"></script>
    <script src="https://raw.githubusercontent.com/Atugatran/FontAwesome6Pro/refs/heads/main/js/pro.min.js"></script>
</body>

</html>