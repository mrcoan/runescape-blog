<?php
include_once('includes/config.php');
include_once('includes/functions.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RuneScape Blog</title>

    <!-- CSS -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/style.css">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>

<body>

    <header>
        <div>
            <a href="<?= $BASE_URL ?>/index.php"><img src="<?= $BASE_URL ?>/assets/images/logo.png" alt="Logo" class="header-img"></a>
            <h1 class="header-title">RS Blog</h1>
        </div>

        <nav id="navbar">
            <a href="<?= $BASE_URL ?>/index.php" class="nav-link">Início</a>
            <a href="<?= $BASE_URL ?>/categoria.php?cat=rs" class="nav-link">RuneScape</a>
            <a href="<?= $BASE_URL ?>/categoria.php?cat=dw" class="nav-link">DragonWilds</a>
            <a href="<?= $BASE_URL ?>/sobre.php" class="nav-link">Sobre</a>
            <a href="<?= $BASE_URL ?>/contato.php" class="nav-link">Contato</a>
        </nav>

    </header>