<?php include './src/dispositivo.php' ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Pousada Silvestre</title>
        <meta name="description" content="Tranquilidade e comodidade venha já fazer sua reserva!">
        <link href="./img/logo32.png" rel="shortcut icon" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./style/style.css">
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
        />
        <script src="./script.js" async defer></script>
    </head>
    <body>
        <header>
            <div class="headerContainer">
                <a href="index.php">
                    <div class="logoI">
                        <img class="logo" src="./img/logo.svg" alt="">
                        <h2 class="tittle">Pousada Silvestre</h2>
                    </div>
                </a> 
                <button onclick="Bar()">
                    <div class="navIcon">
                        <img id="navIcon" src="./img/NavBar.svg" alt="">
                    </div> 
                </button>
                <nav class="nav">
                    <div>
                        <a href="https://api.whatsapp.com/send?phone=5551996546118">
                            <h5>Central de Reservas:</h5> 
                            <p>(51) 996546118</p>
                            <img src="./img/wpp_logo.svg" alt="">
                        </a>
                    </div>
                    <div>
                        <a href="index.php">Home</a> 
                        <a href="sobre.php">Sobre a Pousada</a> 
                        <a href="https://www.google.com/maps/dir//Pousada+Silvestre/@-29.9965923,-50.217198,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x951873e04794c071:0xc458dc5f1a192f8f!2m2!1d-50.1471578!2d-29.9966108">Rotas</a> 
                    </div>   
                </nav>
            </div>
            <div id="bar" class="navBar" style="visibility: hidden;">
                <a class="nav_icon" href="index.php"><img src="./img/home.svg" alt=""> Home</a> 
                <a class="nav_icon" href="sobre.php"><img src="./img/sobre.svg" alt=""> Sobre a Pousada</a> 
                <a class="nav_icon" href="https://www.google.com/maps/dir//Pousada+Silvestre/@-29.9965923,-50.217198,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x951873e04794c071:0xc458dc5f1a192f8f!2m2!1d-50.1471578!2d-29.9966108"><img src="./img/geo.svg" alt=""> Rotas</a> 
            </div>
        </header>
        