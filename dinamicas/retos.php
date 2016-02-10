<script>
            $(function(){
                $("#btn-enviar").click(function(){
                    var url="dinamicas/evaluarreto.php";
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
<?php include('dinamicas/traer_reto.php'); ?>
<p></p>
<br>
<div class='row'>
  <div class="col-md-5 col-md-offset-1">
    <img class="img-thumbnail img-responsive" <?php echo $image ?> alt="Ecuacion exponencial">
  </div>
  <div class='col-md-4'>
    <form id="form_seccion" method='POST'>
      <legend>Reto del dia</legend>
      <div class="form-group">
        <label for="exampleInputEmail1"><?php echo $pregunta ?></label>
        <input type="text" name='rt' class="form-control" <?php echo $place; ?>>
      </div>
      <!--<div class="radio">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
          No se puede
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
          El resultado es una constante
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
          El resultado es una variable
        </label>
      </div>-->
      <button type="button" value="enviar" id="btn-enviar" class="btn btn-success btn-sm">Evaluar</button>
      <small id="m_s"></small>

    </form>
  </div>
</div>
<div class="row">
  <center>
  <div style="border-bottom:solid #f2f2f2 2px;margin-left:-50px;margin-bottom:60px;"><p></p><br></div>
  </center>