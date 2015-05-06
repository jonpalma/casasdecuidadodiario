<?php include('modules/header.php'); ?>
<!-- BEGIN HEADING -->
<div class="container-fluid parallax-container heading bg-contacto">
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
                    Trasviña y Retes 2102, Col. San Felipe, C.P. 31240<br />
                    Chihuahua, Chih.<br /><br />
                    Email: comunicacion@casasdecuidadodiario.org<br />
                    Tel: 614 413 0319<br />
                    Tel: 614 413 4300<br /><br />
                    Cuauhtémoc, Chih.<br />
                    Ana Aide Beltran Montes<br />
                    Tel: 625 128 0223<br />
                    Cel: 625 115 41 35<br />
                    Email: Aidebel70@hotmail.com<br /><br/>
                    Ignacio Zaragoza, Chih.<br />
                    jorge Ivan Muñoz<br />
                    Tel: 636 116 9446<br />
                    Cel: 636 121 2139<br />
                    Email: ing.jorgemunoz@hotmail.com<br /><br/>
                    León, Gto.<br />
                    oliveria Aguirre Gordillo<br />
                    Cel: 472 728 84 23<br />
                    Email: oli_73@hotmail.com<br /><br/>
                </p>
            </div>
            <div class="col-sm-8">
                <form action="mailer.php" id="ajax-contact" class="form-horizontal">
                           <div class="form-group">
                               <div class="col-sm-6">
                                   <label for="contacto_nombre" class="control-label">Nombre:</label>
                                   <input type="text" class="form-control form-textfield" id="contacto_nombre" name="nombreContacto">
                               </div>
                               <div class="col-sm-6">
                                   <label for="contacto_empresa" class="control-label">Empresa:</label>
                                   <input type="text" class="form-control form-textfield" id="contacto_empresa" name="nombreEmpresa">
                               </div>  
                           </div>
                           <div class="form-group">
                               <div class="col-sm-6">
                                   <label for="contacto_email" class="control-label">Email:</label>
                                   <input type="email" class="form-control form-textfield" id="contacto_email" name="emailContacto">
                               </div>
                               <div class="col-sm-6">
                                   <label for="contacto_telefono" class="control-label">Teléfono:</label>
                                   <input type="text" class="form-control form-textfield" id="contacto_telefono" name="telContacto">
                               </div>
                           </div>
                           <div class="form-group">
                               <div class="col-sm-12">
                                       <label for="contacto_mensaje" class="control-label">Mensaje:</label>
                                   <textarea class="form-textarea" name="mensajeContacto" id="contacto_mensaje" cols="30" rows="10"></textarea>
                               </div>
                           </div>
                           <div class="form-group">
                              <div class="col-sm-12">
                                  <button type="submit" id="sendBttn" class="btn btn-yellow">Enviar</button>
                              </div>
                        </div>
                    </form>
                    <div class="col-sm-12">
                        <div id="form-messages" role="alert"></div>
                    </div>
            </div>
        </div>
    </div>
</div>
<!-- END CONTACTO -->
<!-- BEGIN MAP -->
<div class="container-fluid" id="googleMap"></div>  
<!-- END MAP -->

<?php include('modules/footer.php'); ?>