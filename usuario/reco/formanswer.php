		<script>
            $(function(){
                $("#btn-enviarc").click(function(){
                    var url="reco/ghajm.php";
                    $.ajax({
                        type:"POST",
                        url:url,
                        data:$("#formulario").serialize(),

                        success:function(data){
                            $("#resultado").html(data);
                            $('#formulario')[0].reset();

                        }

                    });

                    return false;
                });
            });
        </script>
<form class="form-group" id="formulario" method="POST">
		<div class="form-group">
			<label for="answer" style="margin-bottom:5px;">Escribe aquÃ­ sobre que tema te gustarÃ­a que te recomendaran un contenido, puedes iniciar con un saludo </label>
			<input type="input" class="form-control inreco" name="answ" required>
		</div>
		<div class="form-group">
			<label for="answer">Materia</label>
			<select class="form-control input-sm optionreco" id="tipo" name="matter_slc" required>
                <option value=''></option>
                <option class="optionreco" value="Algebra basica">Algebra básica</option>
                <option class="optionreco" value="Algebra intermedia">Algebra intermedia</option>
                <option class="optionreco" value="Trigonometria">Trigonometría</option>
                <option class="optionreco" value="Geometria analitica">Geometría analítica</option>
                <option class="optionreco" value="Estadistica">Estadística</option>
                <option class="optionreco" value="Calculo diferencial">Calculo diferencial</option>
                <option class="optionreco" value="Calculo integral">Calculo integral</option>
                <option class="optionreco" value="Calculo avanzado">Calculo avanzado</option>
                <option class="optionreco" value="Algebra lineal">Algebra lineal</option>
                <option class="optionreco" value="Ecuaciones diferenciales">Ecuaciones diferenciales</option>

            </select>
		</div>	
		<button type="button" value="enviar" id="btn-enviarc" class="btn btn-primary btn-sm">Enviar</button>
</form>
<div id="resultado"></div>
<hr>
	<div class="row">
		<div class="col-md-12">
			<h4>Ejemplos de uso</h4>
			<small><em>-Saludos comunidad, me podrÃ­an recomendar un pdf de integrales impropias que este bueno</em></small>
                             <br>
                        <small><em>-Hola estoy estudiando para un examen, Â¿que vÃ­deo me recomiendan para estudiar la hipÃ©rbola?</em></small>
		</div>
	</div>
    <br>
    <?php $s="Trata de detallar el tipo contenido que quieres; vídeo, pdf, presentación, sitio web etc. 
"; echo utf8_encode($s); ?>
