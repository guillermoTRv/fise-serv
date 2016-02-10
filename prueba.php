<style type="text/css">
        .optionreco{
          font-size:1.01em;
          font-family:cursive;
          font-weight: bolder;
      }
        
</style>
<script>
            $(function(){
                $("#btn-enviarc").click(function(){
                    var url="http://www.fiseaprende.com/usuario/reco/ghajm.php";
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
                <label for="answer" style="margin-bottom:5px;">Escribe aquí sobre que tema te gustaría que te recomendaran un contenido, puedes iniciar con un saludo </label>
                <input type="input" class="form-control inreco" name="answ" required>
              </div>
              <div class="form-group">
                <label for="answer">Selecciona una materia</label>
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
              <?php 
              function seccion(){
              error_reporting(E_ALL ^ E_NOTICE);
                  session_start();
                  return isset($_SESSION['usuario']);
              }
              if (!seccion()) {
                  echo "
                    <a style='margin-top:25px;' href='#nofo' data-toggle='modal' class='btn btn-success btn-block'>Enviar</a>
                  ";
                  include("scripts/nofo.php");
              }
              else{
                  echo "
                    <button style='margin-top:25px;' type='button' value='enviar' id='btn-enviarc' class='btn btn-success btn-block'>Enviar</button>
                  ";  
              }
               ?> 
              
</form>
<div id="resultado"></div>
<h4>Ejemplos de uso</h4>
      <small><em>-Saludos comunidad, me podrían recomendar un pdf de integrales impropias que este bueno</em></small>
      <br>
      <small><em>-Hola estoy estudiando para un examen, ¿que vídeo me recomiendan para estudiar la hipérbola?</em></small>