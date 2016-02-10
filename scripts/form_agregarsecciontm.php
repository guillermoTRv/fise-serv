        <script>
            $(function(){
                $("#btn-enviart").click(function(){
                    var url="../scripts/agregarseccion.php";
                    $.ajax({
                        type:"POST",
                        url:url,
                        data:$("#form_secciont").serialize(),
                        success:function(data){
                            $("#m_st").html(data);
                        }
                    });
                    return false;
                });
            });
        </script>
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
			    <form id="form_secciont" method="post">
			    	<legend>Agregar a interes</legend>
			    	<?php 
			    	$url=$_SERVER["PHP_SELF"];
			    	echo"
			    	<div class='form-group'>
					    <label>Por tema</label>
					    <input class='form-control' id='disabledInput' type='text' placeholder='$tm' disabled >
					    
					    <input type='hidden'  name='seccion_txt' value='$t'>
					    <input type='hidden'  name='seccion_val' value='$tm'>
					    <input type='hidden'  name='tema_txt' value='$t'>
					    <input type='hidden'  name='unidad_txt' value='$u'>
					    <input type='hidden'  name='url_txt' value='$url'>

					    <input type='hidden' id='tres' name='mt' value='$materia'>
					</div>
					
			    	";?>
			    	<button type="button" value="enviar" id="btn-enviart" class="btn btn-primary">Guardar</button>
			    </form>
			    <div id="m_st"></div>

			    <hr>

			    <form id="form_seccion" method="post">
			    	<?php 
			    	$url=$_SERVER["PHP_SELF"];
			    	echo"
			    	<div class='form-group'>
					    <label>Por unidad</label>
					    <input class='form-control' id='disabledInput' type='text' placeholder='$un' disabled >
					    
					    <input type='hidden' id='uno' name='seccion_txt' value='$u'>

					    <input type='hidden' id='uno' name='seccion_val' value='$un'>

					    <input type='hidden' id='dos' name='url_txt' value='$url'>

					    <input type='hidden' id='tres' name='mt' value='$materia'>
					</div>
			    	";?>
			    	<button type="button" value="enviar" id="btn-enviar" class="btn btn-primary">Guardar</button>
			    </form>
			    <div id="m_s"></div>
			</div>
			<div class="modal-footer">
			    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			</div>
		</div>
	</div>
</div>