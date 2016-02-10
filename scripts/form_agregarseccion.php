<script>
            $(function(){
                $("#btn-enviar").click(function(){
                    var url="../scripts/agregarseccion.php";
                    $.ajax({
                        type:"POST",
                        url:url,
                        data:$("#form_seccion").serialize(),

                        success:function(data){
                            $("#m_s").html(data);
                
                        }

                    });

                    return false;
                });
            });
        </script>
<div style="margin-top:50px;margin-right:-17px;" class="modal fade" id="ventsec" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
			    <form id="form_seccion" method="post">
			    	<legend>Agregar a interes</legend>
			    	<?php 
			    	$url=$_SERVER["PHP_SELF"];
			    	echo"
			    	<div class='form-group'>
					    <label>Seccion - Unidad</label>
					    <input class='form-control' id='disabledInput' type='text' placeholder='$un' disabled >
					    
					    <input type='hidden' id='uno' name='seccion_txt' value='$u'>

                                            <input type='hidden' name='seccion_val' value='$un'>

					    <input type='hidden' id='dos' name='url_txt' value='$url'>

						<input type='hidden' id='tres' name='mt' value='$materia'>					    
					</div>
			    	";?>
			    
			</div>
			<div class="modal-footer">
				<button type="button" value="enviar" id="btn-enviar" class="btn btn-primary">Guardar</button>
			    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			    </form>
			    <div id="m_s"></div>
			</div>
		</div>
	</div>
</div>