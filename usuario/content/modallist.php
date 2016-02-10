<div style="margin-top:50px;margin-right:-14px;" class="modal fade" id="modlist" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <ul class="nav nav-tabs">
                                <li><a href="#modificar" data-toggle='tab'>Modificar</a></li>
                                <li><a href="#eliminar" data-toggle='tab'>Eliminar</a></li>
                                <li><a href="#ent" data-toggle='tab'></a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade"id="modificar">
                                    <br>
                                    <form action="content/modificarlista.php" method="POST" enctype="multipart/form-data">
                                        <label>Cambiar nombre de la lista</label>
                                        <input type="text" class="form-control" name='clist_txt' required>
                                        <br>
                                        <?php echo "<input type='hidden' name='nlist_txt' value='$list'>"; ?>
                                        <button type="submit" class="btn btn-primary">Cambiar</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                    </form>   
                                </div>

                                <div class="tab-pane fade"id="eliminar">
                                    <br>
                                    <form action="content/modificarlista.php" method="POST" enctype="multipart/form-data">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="eliminar_rdo" title="eliminar" value="eliminar" required> Eliminar lista (tambien se eliminaran todos los contenidos guardados en ella)
                                            </label>
                                        </div>
                                        <?php echo "<input type='hidden' name='nlist_txt' value='$list'>"; ?>
                                        <br>
                                        <button type="submit" class="btn btn-primary">Aceptar</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                    </form>  
                                </div>
                                <div class="tab-pane fade in active" id="ent">
                                    <br>
                                      <p style="font-family:cursive;">Elige una opcion de arriba</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            
                            
                            <div id="m_clmod"></div>
                        </div>
                    </div>
                </div>
            </div>