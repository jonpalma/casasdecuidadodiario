<?php include('modules/header.php'); ?>
<!-- BEGIN HEADING -->
<div class="container-fluid parallax-container heading">
   <div class="parallax"><img src="img/parallax/contacto1.jpg" alt="" class="img-responsive"></div>
    <div class="row">
        <h2>Contacto</h2>
    </div>
</div>
<!-- END HEADING -->
<!-- BEGIN CONTACTO -->
<div class="jumbotron bg-white">
    <div class="container content-contacto">
        <div class="row">
            <div class="col-sm-4">
                <p>
                    Información:<br /><br />
                    Casas de Cuidado Diario<br /><br />
                    Calle 22 #181, Col. San Felipe, C.P. 31020<br />
                    Chihuahua, Chih.<br /><br />
                    Email: contacto@casasdecuidado.com.mx<br />
                    Tel: 614 413 0319
                </p>
            </div>
            <div class="col-sm-8">
                <form action="" class="form-horizontal">
                           <div class="form-group">
                               <div class="col-sm-6">
                                   <label for="contacto_nombre" class="control-label">Nombre:</label>
                                   <input type="text" class="form-control form-textfield" id="contacto_nombre">
                               </div>
                               <div class="col-sm-6">
                                   <label for="contacto_empresa" class="control-label">Empresa:</label>
                                   <input type="text" class="form-control form-textfield" id="contacto_empresa">
                               </div>  
                           </div>
                           <div class="form-group">
                               <div class="col-sm-6">
                                   <label for="contacto_email" class="control-label">Email:</label>
                                   <input type="email" class="form-control form-textfield" id="contacto_email">
                               </div>
                               <div class="col-sm-6">
                                   <label for="contacto_telefono" class="control-label">Teléfono:</label>
                                   <input type="text" class="form-control form-textfield" id="contacto_telefono">
                               </div>
                           </div>
                           <div class="form-group">
                               <div class="col-sm-12">
                                       <label for="contacto_mensaje" class="control-label">Mensaje:</label>
                                   <textarea class="form-textarea" name="" id="contacto_mensaje" cols="30" rows="10"></textarea>
                               </div>
                           </div>
                           <div class="form-group">
                              <div class="col-sm-12">
                                  <button type="submit" id="sendBttn" class="btn btn-yellow">Enviar</button>
                              </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
<!-- END CONTACTO -->
<!-- BEGIN MAP -->
<div class="container-fluid" id="googleMap"></div>  
<!-- END MAP -->

<?php include('modules/footer.php'); ?>