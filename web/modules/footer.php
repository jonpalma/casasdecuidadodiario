<footer class="bg-lime-green">
  <div class="container-fluid bg-white padding-top">
      <div class="row"><img src="img/footer.png" alt="" class="img-responsive"></div>
  </div>
   <div class="container">
       <div class="row margin-top margin-bottom">
           <div class="col-sm-3">
              <h3 class="text-uppercase">Casas de cuidado diario</h3>
              <p>
                  Casas de Cuidado Diario es un modelo alternativo para el cuidado, atención y protección de los niños pequeños hijos de madres trabajadoras que no cuentan con un servicio adecuado para dejar a sus hijos durante su jornada laboral.
              </p>
          </div>
          <div class="col-sm-3">
              <h3>Servicios</h3>
              <ul>
                  <li><a href="">Nosotros</a></li>
                  <li><a href="">Servicios</a></li>
                  <li><a href="">Vinculación</a></li>
                  <li><a href="">Mapa</a></li>
                  <li><a href="">Sorteo</a></li>
                  <li><a href="">Donaciones</a></li>
              </ul>
          </div>
          <div class="col-sm-3">
              <h3>Servicios destacados</h3>
              <ul>
                  <li><a href="">Alimentación</a></li>
                  <li><a href="">Inglés</a></li>
                  <li><a href="">Música</a></li>
                  <li><a href="">Computación</a></li>
                  <li><a href="">Transporte</a></li>
              </ul>
          </div>
          <div class="col-sm-3 contacto">
              <h3>Contacto</h3>
               <address>
                  <h4>Casas de cuidado diario</h4>
                   Calle 22 #181 <br>
                   Col. San Felipe, C.P.31020<br />
                   Chihuahua, Chih.<br />
                   Tel. 614 4100000<br /><br />
                   <p>Chihuahua, Chihuahua, México</p>
               </address>
          </div>
       </div>
   </div>
   <div class=" container-fluid bg-green footer-rights">
      <div class="row">
          <h4>Todos los derechos reservados <span>Casas de cuidado diario</span> 2015 | Design by: <a href="http://mixen.mx"><img src="http://mixen.mx/firma/logo-mixen.png" alt="Agencia Mixen"> mixen.mx</a></h4>
      </div>
   </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/googleMapInit.js"></script>
    <script src="js/app.js"></script>
    <script src="js/imageloaded.pkgd.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script type="text/javascript">
            $(document).ready(function(){
                $("#myCarousel2").carousel();
                $('.parallax').parallax();
                var $container = $('.masonry');

                $container.imagesLoaded(function () {
                    $container.masonry({
                        itemSelector: '.item',
                        columnWidth: '.item'
                    });
    });

            });
    </script>
</footer>
</body>
</html>