<?php
    include 'header.php';
    if ($dispositivo == 'mobile') 
    {
        echo"
            <div class='phone'>
                <div class='container_big'>
                    <div class='container_big_div'>
                        <h1 class='sobre_font'>Sobre a Pousada</h1>
                        <div>
                            <p>&nbsp &nbsp A Pousada Silvestre é uma pousada urbana no coração de Tramandaí a poucos minutos do centro comercial
                            da cidade, a 50 metros de um dos maiores mercados da região o que possibilita um dia a dia mais simples e prático.  
                            <br>&nbsp &nbsp O acesso à praia é super tranquilo, em menos de 15 min você já esta na orla.  O centro e demais atrações da capital litorânea ficam ainda mais próximos.  
                            <br>&nbsp &nbsp Na Pousada Silvestre, você encontra conforto e praticidade para usufruir de uma hospedagem tranquila e prazerosa. 
                            Estamos em funcionamento desde de 2020 e temos mais de 30 anos de experiencia no ramo. 
                            Esperamos vocês em Tramandaí.</p>
                        </div>
                    </div>    
                    <div class='border'></div>
                </div>
                <div class='container_fotos'>
                    <h1>Galeria</h1>
                    <div>
                        <div class='swiper mySwiper'>
                            <div class='swiper-wrapper'>
                                <div class='swiper-slide'><img class='slide' src='./img/Slide_Home1.png' alt=''></div>
                                <div class='swiper-slide'><img class='slide' src='./img/Slide_Home2.png' alt=''></div>
                                <div class='swiper-slide'><img class='slide' src='./img/Slide_Home3.png' alt=''></div>
                                <div class='swiper-slide'><img class='slide' src='./img/Slide_Home4.png' alt=''></div>
                                <div class='swiper-slide'><img class='slide' src='./img/Slide_Home5.png' alt=''></div>
                                <div class='swiper-slide'><img class='slide' src='./img/Slide_Home6.png' alt=''></div>
                                <div class='swiper-slide'><img class='slide' src='./img/Slide_Home7.png' alt=''></div>
                                <div class='swiper-slide'><img class='slide' src='./img/Slide_Home8.png' alt=''></div>
                                <div class='swiper-slide'><img class='slide' src='./img/Slide_Home9.png' alt=''></div>
                            </div>
                            <div class='swiper-button-next'></div>
                            <div class='swiper-button-prev'></div>
                        </div>
                    </div>
                    <div class='border'></div>
                </div>
            </div>
        ";
    } elseif ($dispositivo == 'computador'){
        echo"
            <div class='container_sobre_Pc'>
                <div class='container_Pc'>
                    <h1>Sobre a pousada</h1>
                    <div>
                        <p>&nbsp &nbsp A Pousada Silvestre é uma pousada urbana no coração de Tramandaí a poucos minutos do centro comercial
                        da cidade, a 50 metros de um dos maiores mercados da região o que possibilita um dia a dia mais simples e prático.  
                        <br>&nbsp &nbsp O acesso à praia é super tranquilo, em menos de 15 min você já esta na orla.  O centro e demais atrações da capital litorânea ficam ainda mais próximos.  
                        <br>&nbsp &nbsp Na Pousada Silvestre, você encontra conforto e praticidade para usufruir de uma hospedagem tranquila e prazerosa. 
                        Estamos em funcionamento desde de 2020 e temos mais de 30 anos de experiencia no ramo. 
                        Esperamos vocês em Tramandaí.</p>
                        <img src='./img/blob1_sobre_Pc.svg'></img>
                    </div>
                </div>
                <div class='border_pc'></div>
                <div class='sobre_img_Pc'>
                    <h1>Galeria</h1>
                    <div class='container_img_Pc'>
                        <img src='./img/slide1.png' alt=''>
                        <img src='./img/slide2.png' alt=''>
                        <img src='./img/slide3.png' alt=''>
                        <img src='./img/slide4.png' alt=''>
                        <img src='./img/slide5.png' alt=''>
                        <img src='./img/slide6.png' alt=''>
                        <img src='./img/slide7.png' alt=''>
                        <img src='./img/slide8.png' alt=''>
                        <img src='./img/slide9.png' alt=''>
                        <img src='./img/slide10.png' alt=''>
                        <img src='./img/slide11.png' alt=''>
                        <img src='./img/slide12.png' alt=''>
                        <img src='./img/slide13.png' alt=''>
                        <img src='./img/slide14.png' alt=''>
                        <img src='./img/slide15.png' alt=''>
                    </div>
                </div>
                <div class='border_pc'></div>
            </div>
        ";
    }
include 'footer.php';