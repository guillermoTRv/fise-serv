<script src="http://code.jquery.com/jquery.js"></script>

        <script>
            $(function(){
                $("#btn-clista").click(function(){
                    var url="content/crearlista.php";
                    $.ajax({
                        type:"POST",
                        url:url,
                        data:$("#form_clista").serialize(),

                        success:function(data){
                            $("#m_climens").html(data);
                
                        }

                    });

                    return false;
                });
            });
        </script>
    <div style="margin-top:50px;margin-right:-10px;" class="modal fade" id="crearlist" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form id="form_clista" method="post" enctype="multipart/form-data">
                        <legend>Crear una nueva lista</legend>
                            <label>Nombre de la lista</label>
                            <input type="text" class="form-control" name='n_list_txt' required>
                            <br>
                    </div>
                    <div class="modal-footer">
                            <button type="button" value="enviar" id="btn-clista" class="btn btn-primary">Guardar</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    </form>
                    <div id="m_climens"></div>
                </div>
            </div>
        </div>
    </div>