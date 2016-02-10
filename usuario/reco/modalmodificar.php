<?php echo "
        <div style='margin-top:50px;' class='modal fade' id='$id_reco' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>
"; ?>          <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <ul class="nav nav-tabs">
                                <?php echo "<li><a href='#mover".$id_reco."' data-toggle='tab'>Modificar</a></li>"; ?>
                                <?php echo "<li><a href='#eliminarc".$id_reco."' data-toggle='tab'>Eliminar</a></li>"; ?>
                                <?php echo "<li><a href='#ent".$id_reco."' data-toggle='tab'></a></li>"; ?>
                                
                            </ul>
                            <div class="tab-content">
                                <?php echo "<div class='tab-pane fade' id='mover".$id_reco."'>"; ?>
                                    <br>
                                    <?php include("reco/cambiar_datosvista.php") ?>   
                                </div>

                                <?php echo "<div class='tab-pane fade' id='eliminarc".$id_reco."'>"; ?>
                                    <br>
                                    <?php include("reco/eliminar_vista.php") ?>
                                </div>

                                <?php echo "<div class='tab-pane fade in active' id='ent".$id_reco."'>"; ?>
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