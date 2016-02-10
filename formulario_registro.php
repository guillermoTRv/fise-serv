<div class="modal fade" id="ventana2">
		<div class="modal-dialog" style="max-width:960px;">
			<div class="modal-content">
				<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<strong><p class="" style="font-size:1.3em;"><span class="glyphicon glyphicon-log-in"></span> Registro - Rapido y sencillo</p>
						</strong>						
				</div>

				<div class="modal-body">
				<?php 
					$url=$_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
					if ($url=="http://fiseaprende.com/") {
					echo "
					<form class='form-horizontal' action='registrar_usuario.php' method='post' enctype='multipart/form-data'>
					";	
					}
					if($url!="http://fiseaprende.com/"){
					echo "
					<form class='form-horizontal' action='../registrar_usuario.php' method='post' enctype='multipart/form-data'>
					";
					}
				?>
							
						<div class="form-group">
							<label for="inputEmai" class="col-sm-2 control-label">Email</label>
    						<div class="col-sm-10">
      							<input type="email" class="form-control" id="inputEmai" name="email_form" required>
    						</div>
						</div>

						<div class="form-group">
							<label for="inputuser" class="col-sm-2 control-label">Usuario</label>
    						<div class="col-sm-10">
      							<input type="text" pattern="[a-zA-Z0-9ñ]{3,16}" class="form-control" id="inputuser" placeholder="Crea un nombre de usuario" title='Crea un nombre de usuario, solo letras y números sin espacios, de 3 a 16 caracteres' name="user_form" required>
    						</div>
						</div>
						
						<div class="form-group">
						<label for="inputpass" class="col-sm-2 control-label">Password</label>
   							<div class="col-sm-10">
      							<input type="password" pattern="[a-zA-Z0-9ñ]{6,20}" class="form-control" id="inputpass" name="pass_form" placeholder="Crea contraseña, minimo 6 caracteres" title="minimo 6 caracteres, solo letras y números" required>
    						</div>
						</div>

 						<div class="form-group">
    						<div class="col-sm-offset-2 col-sm-10">
      						    <div class="checkbox">
        						    <label>
          						    <input type="checkbox" required>Acepto los terminos y condiciones de uso <span><a target='_blank' href="http://fiseaprende.com/terminosusuario" class='etiqa'>Ver</a></span>
       							 	    </label>
     							    </div>
   								</div>
  						</div>
  							   
								<?php  error_reporting(E_ALL ^ E_NOTICE); ?>
    							<?php $url=$_SERVER["PHP_SELF"];
    								  echo "<input type='hidden' id='uno' name='url_txt' value='$url'>";
    							 ?>
    							<?php echo "<input type='hidden' id='dos' name='un_txt' value='$un'>";?>
							    <?php echo "<input type='hidden' id='tres' name='tm_txt' value='$tm'>";?>
							    <?php echo "<input type='hidden' id='cuatro' name='by_txt' value='$by'>";?>
							    <?php echo "<input type='hidden' id='cinco' name='cons_txt' value='$cons'>";?>
							    <?php echo "<input type='hidden' id='seis' name='pref_txt' value='$prf'>";?>
							    <?php echo "<input type='hidden' id='siete' name='cont_txt' value='$cont'>";?>
							    <?php echo "<input type='hidden' id='ocho' name='sub_txt' value='$sub'>";?>  							
  						

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Unete :) </button>
						</div>
					
					</form>
						
					</div>
		     	</div>
		    </div>