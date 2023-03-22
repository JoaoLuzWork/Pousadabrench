<?php 
 if ($dispositivo == 'mobile')
 {
  echo"
    <footer class='phone'>
      <div class='footer'>
          <div class='footer_logo'>
                  <img class='Large_Logo' src='./img/LargeLogo.svg' alt=''>
              <div>
                  <h2 class='adress'>Endereço:</h2>
                  <p>Avenida Militão de Almeida, 835 - Tramandaí RS 95590-000 Brasil</p>
              </div>
          </div>
          <div class='redes'>
              <h2>Redes Sociais:</h2>
              <div class='redes_icon'>
                  <a href='https://www.instagram.com/pousada.silvestre/'><img class='redes_logo' src='./img/instagram_logo.svg' alt=''></a>
                  <a href='https://www.facebook.com/silvestrepousada'><img class='redes_logo' src='./img/fecebook_logo.svg' alt=''></a>
                  <a href='https://api.whatsapp.com/send?phone=5551996546118'><img class='redes_logo' src='./img/whatsapp_logo.svg' alt=''></a>
              </div>
          </div>
          <div class='datas'>
              <h2>Horário de Funcionamento:</h2>
              <dl class='horas'>
                  <dt>Seg: 08:00-22:00</dt>
                  <dt>Ter: 08:00-22:00</dt>
                  <dt>Qua: 08:00-22:00</dt>
                  <dt>Qui: 08:00-22:00</dt>
                  <dt>Sex: 08:00-22:00</dt>
                  <dt>Sab: 08:00-22:00</dt>
                  <dt>Dom: 08:00-22:00</dt>
              </dl>
          </div>
          <img  class='footer_img_P' src='./img/footer-img_P.svg' alt=''>
      </div>
    </footer>
  ";
  }  elseif ($dispositivo == 'computador'){
    echo"
      <footer lass='footer_Pc'>
        <div class='footer'>
            <div class='footer_logo_Pc'>
                    <img src='./img/LargeLogo.svg' alt=''>
                <div>
                  <a href=''>
                    <h2 class='adress'>Endereço:</h2>
                    <p>Avenida Militão de Almeida, 835 
                    <br>Tramandaí-RS 
                    <br>95590-000 
                    <br>Brasil</p>
                    </a>
                </div>
            </div>
            <div class='redes'>
                <h2>Redes Sociais:</h2>
                <div class='redes_icon'>
                    <a href='https://www.instagram.com/pousada.silvestre/'><img class='redes_logo' src='./img/instagram_logo.svg' alt=''></a>
                    <a href='https://www.facebook.com/silvestrepousada'><img class='redes_logo' src='./img/fecebook_logo.svg' alt=''></a>
                    <a href='https://api.whatsapp.com/send?phone=5551996546118'><img class='redes_logo' src='./img/whatsapp_logo.svg' alt=''></a>
                </div>
            </div>
            <div class='datas_Pc'>
                <h2>Horário de Funcionamento:</h2>
                <dl class='horas'>
                    <dt>Seg: 08:00-22:00</dt>
                    <dt>Ter: 08:00-22:00</dt>
                    <dt>Qua: 08:00-22:00</dt>
                    <dt>Qui: 08:00-22:00</dt>
                    <dt>Sex: 08:00-22:00</dt>
                    <dt>Sab: 08:00-22:00</dt>
                    <dt>Dom: 08:00-22:00</dt>
                </dl>
            </div>
            <img  class='footer_img' src='./img/footer-Img.svg' alt=''>
        </div>
      </footer>";
  }
  ?>
 
  <script src='https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js'></script>
  <script>
    var swiper = new Swiper('.mySwiper', {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>

</body>
</html>