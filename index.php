<?php $pTitle = "Home"; ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Mutia: The Green Jewel of Zamboanga del Norte">
        <meta name="keywords" content="Mutia, Zamboanga del Norte, Green Jewel Mutia">
        <meta name="author" content="Ian Gabriel Libetario">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?=$pTitle?></title>
        <!-- CSS/stylesheets -->
        <link rel="stylesheet" href="./assets/css/bulma.css">
        <link rel="stylesheet" href="./assets/css/mutia.css">
    </head>
    <body class="<?= $pTitle == 'Home' ? 'home-background' : '' ?>">
        <?php include "components/navbar.php"; ?>