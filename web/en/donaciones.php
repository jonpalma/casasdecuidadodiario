<?php include('modules/header.php'); ?>
<!-- BEGIN PARALLAX 1 -->
<div class="container-fluid parallax-container bg-donaciones heading">
   <div class="parallax"><img src="img/parallax/donaciones.jpg" alt="" class="img-responsive"></div>
   <div class="container">
       <div class="row">
           <h2>Donations</h2>
       </div>
   </div>
</div>
<!-- END PARALLAX 1 -->
<!-- BEGIN VOLUNTARIADO 2 -->
<div class="jumbotron bg-white">
    <div class="container content-voluntariado">
        <div class="row margin-top margin-bottom">
            <div class="col-sm-12">
                <h3>Why do we solicit donations?</h3>
                <div class="bottom-blue center-block"></div>
            </div>
            <div class="col-sm-4 margin-bottom">
                <img src="img/donaciones.jpg" alt="" class="img-responsive">
            </div>
            <div class="col-sm-8">
                <p>With your donation you help a child from Chihuahua to have a better opportunity to be cared for, attended and well fed while his/her mother works.</p>
                <p>If you wish to be a part of this great project you may collaborate by making a donation through your credit card or by directly depositing to our account:</p>
                <p>Casas de Cuidado Diario Infantiles AC</p>
                <p>
                    BBVA Bancomer<br />
                    Account: 0148991154<br/>
                    Clabe interbancaria: 012150001489911547
                </p>
                <p>If you wish to make a contribution through your credit card please contact us at:</p>
                <p>
                    Tel: (614) 413.0319<br />
                    Tel: (614) 413.4300
                </p>
            </div>
        </div>
        <div class="row margin-top">
            <div class="col-sm-12">
                <h3>Where does the money come from <br />and where does it go?</h3>
                <div class="bottom-blue center-block"></div>
                <a href="pdf/donations.pdf" target="_blank" class="btn btn-blue margin-top">Download Document</a>
            </div>
        </div>
        <div class="row donativo-paypal">
        	<h3 class="">Donations</h3>
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
								<label>Choose the amount of your donation :</label>
							</td>
						</tr>
						<tr>
							<td>
								<select name="os0">
								<option value="Opción 1"> $50.00 MXN</option>
								<option value="Opción 2"> $100.00 MXN</option>
								<option value="Opción 3"> $200.00 MXN</option>
								<option value="Opción 4"> $400.00 MXN</option>
								<option value="Opción 5">Enter another amount</option>
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
									<label>Recurring donations - Donation amount :</label>
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