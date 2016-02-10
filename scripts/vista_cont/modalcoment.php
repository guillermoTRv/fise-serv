<?php  echo "<div style='margin-right:-17px;' class='modal fade' id='$fichacha' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>"?>	
			
			
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-body">
			        <form action="../scripts/vista_cont/reportar_comentario.php" name="alta_frm" method="post" enctype="multipart/form-data">
			        	<div class="radio">
  							<label>
    							<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
    							Lenguaje que fomenta la violencia
  							</label>
						</div>
						<div class="radio">
  							<label>
    							<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
    							Spam
  							</label>
						</div>
						<?php $url=$_SERVER["REQUEST_URI"];
							  echo "<input type='hidden' name='url_txt' value='$url'>";
						 ?>
				     	<?php echo "<input type='hidden' name='contenido_txt' value='$fichacha'>"; ?>

				     	<?php echo "<input type='hidden' name='rx' value='$materia'>"; ?>

			        
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			        <button type="submit" class="btn btn-primary">Reportar comentario</button>
					</form>			      
			      </div>
			    </div>
			  </div>
			</div>