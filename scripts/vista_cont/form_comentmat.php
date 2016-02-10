<script>
            $(function(){
                $("#btn-enviarc").click(function(){
                    var url="../scripts/vista_cont/registra_comentarioajax.php";
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
        <div class="row coment">
            <div class="media">
                <div class="media-left">
                    <img class="imgcoment" src="http://mertasan.com/upload/resimler/020ce1ab3b.jpg" alt="Generic placeholder image" width="70px" height="70px" >
                </div>
                <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
                    

                <div class="media-body">
                    <form class="form-group" id="formulario" method="POST">
                        
                        <textarea class="textcoment" maxlength="300" id="comentario_txt" rows="3" name="comentario_txt" title="Solo puedes agregar 300 caracteres en tu comentario"></textarea>
                            
                        <input style="margin-bottom:6px;" id="target" type="url" class="form-control inputlink" name="link_txt" placeholder="Link o fuente(opcional)">
                            
                            <?php echo"<input type='hidden' name='lkj' value='$cont'>"?>
                            <?php echo"<input type='hidden' name='lkji' value='$u'>"?>
                            <?php echo"<input type='hidden' name='uscont' value='$id_usuario'>" ?>
                            <?php echo"<input type='hidden' name='mat' value='$materia'>" ?>
                            
                            <button type="button" value="enviar" id="btn-enviarc" class="btn btn-default">Enviar</button>

                    </form>
                </div>
            </div>
            <div id="resultado"></div> 
        </div>