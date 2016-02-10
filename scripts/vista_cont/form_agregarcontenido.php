        <script>
            $(function(){
                $("#btn-cont").click(function(){
                    var url="../scripts/vista_cont/agregarcontenido.php";
                    $.ajax({
                        type:"POST",
                        url:url,
                        data:$("#form_contenido").serialize(),

                        success:function(data){
                            $("#m_c").html(data);
                
                        }

                    });

                    return false;
                });
            });
        </script>
<div style="margin-top:50px;margin-right:-17px;" class="modal fade" id="guardar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <form id="form_contenido" method="post" enctype="multipart/form-data">
                                <legend>Agregar a contenidos</legend>
                                    <label>Selecciona la lista en donde quieres guardar el contenido</label>
                                    <select class="form-control" name="select_txt">
                                        <?php 
                                            include("../select_lista.php");
                                        ?>
                                    </select>
                                    <br>
                                <?php 
                                    $bfichas="SELECT id_fichamat,titulo FROM ficha_contenido_materia WHERE id_fichamat='$cont'";
                                    $efichas=$conexion->query($bfichas);
                                    $afichas=$efichas->fetch_array();
                                    $name=$afichas[1];

                                    $url="http://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
                                echo"
                                <div class='form-group'>
                                    <label>Nombre del contenido</label>
                                    <input class='form-control' id='disabledInput' type='text' placeholder='$vista_titulo' disabled >
                                    <input type='hidden' id='uno' name='contenido_txt' value='$cont'>
                                    <input type='hidden' id='uno' name='ttl' value='$vista_titulo'>
                                    <input type='hidden' id='dos' name='url_txt' value='$url'>
                                    <input type='hidden' id='tres' name='un_txt' value='$un'>
                                    <input type='hidden' id='tres' name='kp' value='$materia'>

                                </div>
                                ";?>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" value="enviar" id="btn-cont" class="btn btn-primary">Guardar</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            </form>
                            <div id="m_c"></div>
                        </div>
                    </div>
                </div>
            </div>