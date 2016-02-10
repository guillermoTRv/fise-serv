<?php echo "
        <div style='margin-top:50px;margin-right:-17px;' class='modal fade' id='$id_rel' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>
"; ?>          <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <ul class="nav nav-tabs">
                                <?php echo "<li><a href='#mover".$id_rel."' data-toggle='tab'>Mover</a></li>"; ?>
                                <?php echo "<li><a href='#eliminarc".$id_rel."' data-toggle='tab'>Eliminar</a></li>"; ?>
                                <?php echo "<li><a href='#ent".$id_rel."' data-toggle='tab'></a></li>"; ?>
                                
                            </ul>
                            <div class="tab-content">
                                <?php echo "<div class='tab-pane fade' id='mover".$id_rel."'>"; ?>
                                    <br>
                                    <form action="content/md_content.php" method="POST" enctype="multipart/form-data">
                                        <label>Selecciona la lista a la cual quieres mover el contenido</label>
                                        <select class="form-control input-sm" name="list_slc" required>
                                            <?php error_reporting(E_ALL ^ E_NOTICE); include("../select_lista.php"); ?>
                                        </select>
                                        <br>
                                        <?php echo "<input type='hidden' name='nf' value='$id_rel'>"; ?>
                                        <?php echo "<input type='hidden' name='fifa' value='$id_fichac'>"; ?>
                                        <button type="submit" class="btn btn-primary">Aceptar</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                    </form>   
                                </div>

                                <?php echo "<div class='tab-pane fade' id='eliminarc".$id_rel."'>"; ?>
                                    <br>
                                    <form action="content/md_content.php" method="POST" enctype="multipart/form-data">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="eliminar_rdo" title="eliminar" value="eliminar" required> Quitar contenido
                                            </label>
                                        </div>
                                        <?php echo "<input type='hidden' name='nf' value='$id_rel'>"; ?>
                                        <br>
                                        <button type="submit" class="btn btn-primary">Aceptar</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                    </form>  
                                </div>

                                <?php echo "<div class='tab-pane fade in active' id='ent".$id_rel."'>"; ?>
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