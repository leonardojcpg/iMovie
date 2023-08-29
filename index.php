<?php

include_once("globals.php");
include_once("database/index.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iMovie</title>
    <link rel="short icon" href="<?= $BASE_URL ?>img/moviestar.ico">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.1/css/bootstrap.css"
        integrity="sha512-azoUtNAvw/SpLTPr7Z7M+5BPWGOxXOqn3/pMnCxyDqOiQd4wLVEp0+AqV8HcoUaH02Lt+9/vyDxwxHojJOsYNA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- JAVASCRIPT-BOOTSTRAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.1/js/bootstrap.js"
        integrity="sha512-hidrIwTPV6f4zhtlHGC2IelVMrCqiHkHC9AuFJk22S95fMp5qnbhz2uLw5WH+lVWEWKg5nbRPkBsa4nNPGubsw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">
</head>

<body>
    <header>
        <nav id="main-navbar" class="navbar navbar-expand-lg">
            <a href="<?= $BASE_URL ?>" class="navbar-brand">
                <img src="<?= $BASE_URL ?>img/logo.svg" alt="logo" id="logo">
                <span id="imovie-title">iMovie</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <form action="" id="search-form" class="form-inline my-2 my-lg-0" method="GET">
                <div class="input-group">
                    <input type="text" name="query" id="search" class="form-control mr-sm-2" type="search"
                        placeholder="Search films" aria-label="Search">
                    <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>

            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="<?= $BASE_URL ?>auth.php" class="nav-link">Sign In / Sign Up</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container-fluid" id="main-container">
        <h1>web site body</h1>
    </div>
    <footer id="footer">
        <div id="social-container">
            <ul>
                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>
        <div id="footer-links-container">
            <ul>
                <li><a href="#">Add Movie</a></li>
                <li><a href="#">Add Review</a></li>
                <li><a href="#">Sign In / Sign Up</a></li>
            </ul>
        </div>
        <p>&copy; 2023 Leonardo Gomes</p>
    </footer>
</body>

</html>