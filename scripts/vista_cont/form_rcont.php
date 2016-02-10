        <script>
            $(function(){
                $("#btn-rc").click(function(){
                    var url="../scripts/vista_cont/reportar_contenido.php";
                    $.ajax({
                        type:"POST",
                        url:url,
                        data:$("#form_rc").serialize(),

                        success:function(data){
                            $("#m_rc").html(data);
                
                        }

                    });

                    return false;
                });
            });
        </script>
            <div style="margin-right:-17px;" class="modal fade" id="opciones" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-body">
                    <form id="form_rc" method="post" enctype="multipart/form-data">
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="lenguaje" checked>
                                Lenguaje que fomenta la violencia
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="spam" checked>
                                Spam
                            </label>
                        </div>
                    
                    <?php echo "<input type='hidden' name='contenido_txt' value='$cont'>"; ?>
                    <?php echo "<input type='hidden' name='py' value='$materia'>"; ?>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" value="enviar" id="btn-rc">Reportar contenido</button>
                    </form>
                    <div id="m_rc"></div>
                  </div>
                </div>
              </div>
            </div>