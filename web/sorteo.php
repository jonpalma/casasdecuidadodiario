<?php include('modules/header.php'); ?>
<!-- BEGIN HEADING -->
<div class="container-fluid parallax-container heading bg-sorteo">
   <div class="parallax"><img src="img/parallax/sorteo1.jpg" alt="" class="img-responsive"></div>
    <div class="row">
        <h2>Sorteo</h2>
    </div>
</div>
<!-- END HEADING -->
<!-- BEGIN MODAL -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Casas de Cuidado Diario</h4>
      </div>
      <div class="modal-body">
           <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/H_LaTMOOkhc"></iframe>
           </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Regresar</button>
      </div>
    </div>
  </div>
</div>
<!-- END MODAL -->
<!-- BEGIN CONTENT -->
<div class="jumbotron bg-white">
    <div class="container content-sorteo">
        <div class="row">
            <div class="col-sm-4">
                <img src="img/sorteo.jpg" alt="" class="img-responsive center-block">
            </div>
            <div class="col-sm-8">
                <p>El 25vo. Sorteo Chihuahua por sus niños se realizó el 26 de Junio a las 13:00 horas en Plaza Galerías.</p>
                <p>Premios:</p>
                <p>1er. Premio es una residencia totalmente amueblada y equipada con un automóvil Spark 2015.</p>
                <p>2do. Premio es un automóvil Sentra 2015.</p>
                <p>3er. Premio es un automóvil Aveo 2015.</p>
				<p>El valor del boleto es de $350. La ganadora fue Lizeth Carolina y/o Edna Georgina.</p>
				<p>Conoce a los ganadores:</p>
				
				<a class="btn btn-orange" style="float:left" href="ganadores.pdf" target="_blank">Descarga la información</a>


            </div>
        </div>
    </div>
</div>
<!-- END CONTENT -->
<!-- BEGIN PARALLAX -->
<div class="jumbotron parallax-container bg-parallax bg-sorteo box-content">
   <div class="parallax"><img src="img/parallax/sorteo2.jpg" alt="" class="img-responsive"></div>
   <div class="container">
       <div class="row">
           <h2>Ver Recorrido Virtual<br />de la Casa</h2>
           <a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-orange">Tomar Recorrido</a>
       </div>
   </div>
</div>
<!-- END PARALLAX -->
<!-- BEGIN GALLERY -->
<div class="jumbotron bg-white">
    <div class="container servicios">
        <div class="row">
            <div class="col-sm-12">
                <h2>Galería de la casa a sortear</h2>
                <div class="bottom-orange center-block"></div>
            </div>
            <div class="col-sm-12">
               <div class="row masonry">
                   <div class="col-sm-3 item lg">
                       <a href="#" data-toggle="modal" data-target="#1">
                           <img src="img/galeria-sorteo/1.jpg" alt="" class="img-responsive center-block">
                       </a>
                   </div>
                   <div class="col-sm-9">
                       <div class="row margin-bottom">
                           <div class="col-sm-12 item w2">
                                <div class="col-sm-3 item sm">
                                   <a href="#" data-toggle="modal" data-target="#2">
                                       <img src="img/galeria-sorteo/2.jpg" alt="" class="img-responsive center-block">
                                   </a>
                                </div>
                                <div class="col-sm-6 item sm">
                                   <a href="#" data-toggle="modal" data-target="#3">
                                       <img src="img/galeria-sorteo/3.jpg" alt="" class="img-responsive center-block">
                                   </a>
                                </div>
                                <div class="col-sm-3 item sm">
                                   <a href="#" data-toggle="modal" data-target="#4">
                                       <img src="img/galeria-sorteo/4.jpg" alt="" class="img-responsive center-block">
                                   </a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                       </div>
                       <div class="row margin-bottom">
                           <div class="col-sm-12 item w2">
                                <div class="col-sm-3 item sm">
                                   <a href="#" data-toggle="modal" data-target="#5">
                                       <img src="img/galeria-sorteo/5.jpg" alt="" class="img-responsive center-block">
                                   </a>
                                </div>
                                <div class="col-sm-3 item sm">
                                   <a href="#" data-toggle="modal" data-target="#6">
                                       <img src="img/galeria-sorteo/6.jpg" alt="" class="img-responsive center-block">
                                    </a>
                                </div>
                                <div class="col-sm-6 item sm">
                                   <a href="#" data-toggle="modal" data-target="#7">
                                       <img src="img/galeria-sorteo/7.jpg" alt="" class="img-responsive center-block">
                                   </a>
                                </div>
                           </div>
                       </div>
                    </div>
                    <div class="clearfix"></div>
               </div>
            </div>
        </div>
    </div>
</div>
<!-- END GALLERY -->
<!-- BEGIN MAP -->
<div class="container-fluid" id="googleMap_house"></div>  
<!-- END MAP -->
<!-- BEGIN MODAL -->
<div class="modal fade" id="1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-close">
              <img src="img/galeria-sorteo/close.png" data-dismiss="modal" alt="">
           </div>
            <div class="modal-content">
              <img src="img/galeria-sorteo/grandes/1.jpg" class="img-responsive center-block" alt="">
            </div>
          </div>
        </div>
        <div class="modal fade" id="2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-close">
              <img src="img/galeria-sorteo/close.png" data-dismiss="modal" alt="">
           </div>
            <div class="modal-content">
              <img src="img/galeria-sorteo/grandes/2.jpg" class="img-responsive center-block" alt="">
            </div>
          </div>
        </div>
        <div class="modal fade" id="3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-close">
              <img src="img/galeria-sorteo/close.png" data-dismiss="modal" alt="">
           </div>
            <div class="modal-content">
              <img src="img/galeria-sorteo/grandes/3.jpg" class="img-responsive center-block" alt="">
            </div>
          </div>
        </div>
        <div class="modal fade" id="4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-close">
              <img src="img/galeria-sorteo/close.png" data-dismiss="modal" alt="">
           </div>
            <div class="modal-content">
              <img src="img/galeria-sorteo/grandes/4.jpg" class="img-responsive center-block" alt="">
            </div>
          </div>
        </div>
        <div class="modal fade" id="5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-close">
              <img src="img/galeria-sorteo/close.png" data-dismiss="modal" alt="">
           </div>
            <div class="modal-content">
              <img src="img/galeria-sorteo/grandes/5.jpg" class="img-responsive center-block" alt="">
            </div>
          </div>
        </div>
        <div class="modal fade" id="6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-close">
              <img src="img/galeria-sorteo/close.png" data-dismiss="modal" alt="">
           </div>
            <div class="modal-content">
              <img src="img/galeria-sorteo/grandes/6.jpg" class="img-responsive center-block" alt="">
            </div>
          </div>
        </div>
        <div class="modal fade" id="7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-close">
              <img src="img/galeria-sorteo/close.png" data-dismiss="modal" alt="">
           </div>
            <div class="modal-content">
              <img src="img/galeria-sorteo/grandes/7.jpg" class="img-responsive center-block" alt="">
            </div>
          </div>
        </div>
<!-- END MODAL -->
<?php include('modules/footer.php'); ?>