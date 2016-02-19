<?php include('modules/header.php'); ?>
<!-- BEGIN PARALLAX 1 -->
<div class="container-fluid parallax-container bg-donaciones heading">
   <div class="parallax"><img src="img/parallax/donaciones.jpg" alt="" class="img-responsive"></div>
   <div class="container">
       <div class="row">
           <h2>Donaciones</h2>
       </div>
   </div>
</div>
<!-- END PARALLAX 1 -->
<!-- BEGIN VOLUNTARIADO 2 -->
<div class="jumbotron bg-white">
    <div class="container content-voluntariado">
        <div class="row margin-top margin-bottom">
            <div class="col-sm-12">
                <h3>¿Por qué solicitamos donativos?</h3>
                <div class="bottom-blue center-block"></div>
            </div>
            <div class="col-sm-4 margin-bottom">
                <img src="img/donaciones.jpg" alt="" class="img-responsive">
            </div>
            <div class="col-sm-8">
                <p>
                    Con tu donativo nos apoyas para que un niño chihuahuense tenga la oportunidad de ser cuidado, atendido y alimentado mientras su mamá trabaja.
                </p>
                <p>
                    Si deseas ser parte de este gran proyecto puedes colaborar con nosotros a través de un cargo a tu tarjeta de crédito o depositando directamente en nuestra cuenta:
                </p>
                <p>Casas de Cuidado Diario Infantiles AC</p>
                <p>
                    BBVA Bancomer<br />
                    Cuenta: 0148991154<br/>
                    Clabe interbancaria: 012150001489911547
                </p>
                <p>
                    Si deseas que hagamos un cargo a tu tarjeta, comunícate con nosotros al:
                </p>
                <p>
                    Tel: (614) 413.0319<br />
                    Tel: (614) 413.4300
                </p>
            </div>
        </div>
        <div class="row margin-top">
            <div class="col-sm-12">
                <h3>¿De dónde viene y a dónde va<br />el dinero que recaudamos?</h3>
                <div class="bottom-blue center-block"></div>
                <a href="pdf/donaciones/donaciones.pdf" target="_blank" class="btn btn-blue margin-top">Descargar Documento</a>
            </div>
        </div>
        <div class="row donativo-paypal">
        	<h3 class="">Donativos</h3>
        	<div class="bottom-blue center-block"></div>
        	<div class="container paypal">
        		<div class="col-sm-6">
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_xclick">
					<input type="hidden" name="business" value="XXFCXMT7DRTVS">
					<input type="hidden" name="cancel_return" value="http://casasdecuidadodiario.org  ">
					<input type="hidden" name="return" value="http://casasdecuidadodiario.org  ">
					<input type="hidden" name="lc" value="MXN">
					<input type="hidden" name="item_name" value="Donativo Unico">
					<input type="hidden" name="currency_code" value="MXN">
					<input type="hidden" name="bn" value="PP-BuyNowBF:resize_1339629948.png:NonHostedGuest">
					<table>
						<tr>
							<td>
								<input type="hidden" name="on0" >
								<label>Elije el monto de tu donacion :</label>
							</td>
						</tr>
						<tr>
							<td>
								<select name="os0">
								<option value="Opción 1"> $50.00 MXN</option>
								<option value="Opción 2"> $100.00 MXN</option>
								<option value="Opción 3"> $200.00 MXN</option>
								<option value="Opción 4"> $400.00 MXN</option>
								<option value="Opción 5">Ingrese otro monto</option>
								</select> 
							</td>
						</tr>
					</table>
					<input type="hidden" name="currency_code" value="MXN">
					<input type="hidden" name="option_select1" value="Opción 1">
					<input type="hidden" name="option_amount1" value="50.00">
					<input type="hidden" name="option_select2" value="Opción 2">
					<input type="hidden" name="option_amount2" value="100.00">
					<input type="hidden" name="option_select3" value="Opción 3"> 
					<input type="hidden" name="option_amount3" value="200.00">
					<input type="hidden" name="option_select4" value="Opción 4">
					<input type="hidden" name="option_amount4" value="400.00 ">
					<input type="hidden" name="option_select5" value="Opción 5">
					<input type="hidden" name="option_amount5" value="00.00 ">
					<input type="hidden" name="option_index" value="0">
					<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
					<img alt="" border="0" src=https://www.paypalobjects.com/es_XC/i/scr/pixel.gif width="1" height="1">
					</form>
            	</div>
				<div class="col-sm-6">
					<form id="form_paypal_rec" action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input name="cmd" value="_xclick-subscriptions" type="hidden">
						<input type="hidden" name="business" value="XXFCXMT7DRTVS">
						<input type="hidden" name="cancel_return" value="http://casasd ecuidadodiario.org  ">
						<input type="hidden" name="return" value="http://casasdecuidadodiario.org  ">
						<input name="item_name" value="Donacion Recurrente" type="hidden">
						<input name="no_shipping" value="1" type="hidden">
						<input name="no_no te" value="1" type="hidden">
						<input name="currency_code" value="MXN" type="hidden">
						<input name="p3" value="1" type="hidden">
						<input name="src" value="1" type="hidden">
						<input name="sra" value="1" type="hidden">
						<input name="t3" value="M" type="hidden"> 
						<table>
							<tr>
								<td>
									<label>Donativo Recurrente - Cantidad a Donar :</label>
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" name="a3"> 
								</td>
							</tr>
						</table>	
						<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
						<img alt="" border="0" src=https://www.paypalobjects.com/es_XC/i/scr/pixel.gif width="1" height="1"> 
					</form>
				</div>
        	</div>
        </div>
    </div>
</div>
<!-- END VOLUNTARIADO 2 -->
<?php include('modules/footer.php'); ?>