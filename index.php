<?php 
    include 'header.php';
    if ($dispositivo == 'mobile' ){
        echo "
        <div class='phone'>
            <div class='containerIMGs'>
                <div class='swiper mySwiper space'>
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
                    <div class='swiper-pagination'></div>
                </div>
            </div>
            <div class='container_section'>
                <div class='containerIMGs2'>
                <div> 
                    <img class='wave1' src='./img/wave_reserva.svg' alt=''>  
                </div>
                    <div class='section_mob'>
                        <div>
                            <img src='./img/quarto1.png' alt=''>
                        </div>
                            <h2 class='titulos'>Acomodações</h2>
                            <p class='textos'>&nbsp &nbsp Os quartos oferecem cama de casal e solteiro do tipo box, mesa de cabeceira, armário aberto, 
                            internet wi-fi, frigobar e ar-condicionado. Nossas acomodações também contam com um banheiro completo e comodidades como: 
                            roupa de cama e banho, sabonete, secador e ferro de passar roupa. Os moveis são em madeira de demolição, ar-condicionado
                            e frigobar tipo “A” supereconômicos visando a preservação do meio ambiente. 
                            </p>
                    </div>
                    <div class='section_mob'>
                        <div>
                            <img src='./img/fachada2.png' alt=''>
                        </div>
                        <h2 class='titulos'>Área de convivência</h2>
                        <p class='textos'>&nbsp &nbsp A pousada silvestre acredita na integração das pessoas e por isso temos um deck ao ar livre coberto 
                        apenas pela Jurema nosso flamboyant, a cozinha compartilhada se abre para este espaço criando uma área comum onde se pode preparar 
                        refeições e interagir com os hospedes estando em contado com a natureza.  
                        Além disso como bons gaúchos em nossa área comum temos uma churrasqueira pronta para o uso dos hospedes.</p>
                    </div>
                    <div class='section_mob'>
                        <div>
                            <img src='./img/cozinha.png' alt=''>
                        </div>
                        <h2 class='titulos'>Cozinha</h2>
                        <p class='textos'>&nbsp &nbsp Muitas pessoas que se hospedam em pousadas com cozinha se sentem “em casa” e esta é a nossa intenção 
                        na Pousada Silvestre. Oferecemos uma cozinha equipada com fogão, forno elétrico, chaleira elétrica, micro-ondas, pratos, panelas, 
                        louçãs e talheres para uso na pousada. Um dos benefícios da cozinha compartilhada é a convivência na área comum e troca de experiencias. 
                        Outro ponto interessante sem dúvida, é a economia financeira.  
                        </p>
                    </div>
                </div>
            </div>
            <div class='border_pc'></div>
            <a href='https://api.whatsapp.com/send?phone=5551996546118' ><button class='button'> <h1>Consulte já disponibilidade:</h1></button></a>
        
        </div>
        ";
    }   elseif ($dispositivo == 'computador'){
        echo "
        <div class='container_home_pc'>
            <div class='swiper_pc'>
                <div class='swiper mySwiper reduce'>
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
            <div class='img_home_pc'>
                    <div class='section'>
                        <img class='box' src='./img/quarto1.png' alt=''>
                        <h2>Acomodações</h2>
                        <p>&nbsp &nbsp Os quartos oferecem cama de casal e solteiro do tipo box, mesa de cabeceira, armário aberto, 
                        internet wi-fi, frigobar e ar-condicionado. Nossas acomodações também contam com um banheiro completo e comodidades como: 
                        roupa de cama e banho, sabonete, secador e ferro de passar roupa. Os moveis são em madeira de demolição, ar-condicionado
                        e frigobar tipo “A” supereconômicos visando a preservação do meio ambiente. 
                        </p>
                    </div>
                    <div class='section'>
                        <img class='box' src='./img/fachada2.png' alt=''>
                        <h2>Área de convivência</h2>
                        <p>&nbsp &nbsp A pousada silvestre acredita na integração das pessoas e por isso temos um deck ao ar livre coberto 
                        apenas pela Jurema nosso flamboyant, a cozinha compartilhada se abre para este espaço criando uma área comum onde se pode preparar 
                        refeições e interagir com os hospedes estando em contado com a natureza.  
                        Além disso como bons gaúchos em nossa área comum temos uma churrasqueira pronta para o uso dos hospedes.</p>
                    </div>
                    <div class='section'>
                        <img class='box' src='./img/cozinha.png' alt=''>
                        <h2>Cozinha</h2>
                        <p>&nbsp &nbsp Muitas pessoas que se hospedam em pousadas com cozinha se sentem “em casa” e esta é a nossa intenção 
                        na Pousada Silvestre. Oferecemos uma cozinha equipada com fogão, forno elétrico, chaleira elétrica, micro-ondas, pratos, panelas, 
                        louçãs e talheres para uso na pousada. Um dos benefícios da cozinha compartilhada é a convivência na área comum e troca de experiencias. 
                        Outro ponto interessante sem dúvida, é a economia financeira.  
                        </p>
                    </div>
            </div>
            <div class='border_pc'></div>
            <a href='https://api.whatsapp.com/send?phone=5551996546118' ><button> <h1>Consulte já disponibilidade:</h1></button></a>
        </div>
        ";
    }
    
include 'footer.php';