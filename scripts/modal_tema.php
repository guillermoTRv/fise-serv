<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <center><h4 class="modal-title" id="myModalLabel">Temas <?php echo "$unidad"; ?> </h4></center>
      </div>
      <div class="modal-body">

                  <?php 

                      $temas="SELECT * FROM tema_unidad_materias WHERE id_unidades='$id_unidad' order by id_temalg asc";
                      $e_temas=$conexion->query($temas);
                      while ($a_temas=mysqli_fetch_array($e_temas)) {
                        $tema=$a_temas['tema'];
                        $tema_d=utf8_decode($a_temas['tema']);
                        $tema_l=urls_amigables($tema_d);
                        
                        if ($materia=="Algebra intermedia") {
                            echo "<center><a href='http://fiseaprende.com/algintermedia/panelalg?un=$unidad_l&tm=$tema_l' class='list-group-item fenalg'>$tema</a></center>";
                          }
                        if ($materia=="Trigonometria") {
                            echo "<center><a href='http://fiseaprende.com/trigonometria/paneltrig?un=$unidad_l&tm=$tema_l' class='list-group-item fen'>$tema</a></center>";

                          }
                        if ($materia=="Geometria analitica") {
                            echo "<center><a href='http://fiseaprende.com/geometrianalitica/panelgeo?un=$unidad_l&tm=$tema_l' class='list-group-item fengeo'>$tema</a></center>";

                          }
                        if ($materia=="Estadistica") {
                            echo "<center><a href='http://fiseaprende.com/estadistica/panelest?un=$unidad_l&tm=$tema_l' class='list-group-item fenest'>$tema</a></center>";

                          }
                        if ($materia=="Calculo diferencial") {
                            echo "<center><a href='http://fiseaprende.com/calculodif/paneldif?un=$unidad_l&tm=$tema_l' class='list-group-item fendif'>$tema</a></center>";

                          }
                        if ($materia=="Calculo integral") {
                            echo "<center><a href='http://fiseaprende.com/calculointegral/panelint?un=$unidad_l&tm=$tema_l' class='list-group-item fenint'>$tema</a></center>";

                          }
                        if ($materia=="Calculo avanzado") {
                            echo "<center><a href='http://fiseaprende.com/c-avanzado/panelcalculo?un=$unidad_l&tm=$tema_l' class='list-group-item fencalc'>$tema</a></center>";

                          }
                        if ($materia=="Algebra lineal") {
                            echo "<center><a href='http://fiseaprende.com/lineal/panel-lineal?un=$unidad_l&tm=$tema_l' class='list-group-item fenlineal'>$tema</a></center>";

                          }
                        if ($materia=="Ecuaciones diferenciales") {
                            echo "<center><a href='http://fiseaprende.com/diferenciales/ecuaciones-diferenciales?un=$unidad_l&tm=$tema_l' class='list-group-item fened'>$tema</a></center>";

                          }
                            
                        }
                   ?>                    
      </div>
      <div class="modal-footer">
                <?php
                    if ($materia=="Algebra intermedia") {
                      echo "<center><span class='glyphicon glyphicon-search'></span><a class='todalg' href='http://fiseaprende.com/algintermedia/panelalg?un=$unidad_l'> Ver todos los contenidos de la unidad </a></center>";
                    }
                    if ($materia=="Trigonometria") {
                      echo "<center><span class='glyphicon glyphicon-search'></span><a class='todtrig' href='http://fiseaprende.com/trigonometria/paneltrig?un=$unidad_l'> Ver todos los contenidos de la unidad </a></center>";
                    }
                    if ($materia=="Geometria analitica") {
                      echo "<center><span class='glyphicon glyphicon-search'></span><a class='todgeo' href='http://fiseaprende.com/geometrianalitica/panelgeo?un=$unidad_l'> Ver todos los contenidos de la unidad </a></center>";
                    }
                    if ($materia=="Estadistica") {
                      echo "<center><span class='glyphicon glyphicon-search'></span><a class='todest' href='http://fiseaprende.com/estadistica/panelest?un=$unidad_l'> Ver todos los contenidos de la unidad </a></center>";
                    }
                    if ($materia=="Calculo diferencial") {
                      echo "<center><span class='glyphicon glyphicon-search'></span><a class='toddif' href='http://fiseaprende.com/calculodif/paneldif?un=$unidad_l'> Ver todos los contenidos de la unidad </a></center>";
                    }
                    if ($materia=="Calculo integral") {
                      echo "<center><span class='glyphicon glyphicon-search'></span><a class='todint' href='http://fiseaprende.com/calculointegral/panelint?un=$unidad_l'> Ver todos los contenidos de la unidad </a></center>";
                    }
                    if ($materia=="Calculo avanzado") {
                      echo "<center><span class='glyphicon glyphicon-search'></span><a class='todcalc' href='http://fiseaprende.com/c-avanzado/panelcalculo?un=$unidad_l'> Ver todos los contenidos de la unidad </a></center>";
                    }
                    if ($materia=="Algebra lineal") {
                      echo "<center><span class='glyphicon glyphicon-search'></span><a class='todlin' href='http://fiseaprende.com/lineal/panel-lineal?un=$unidad_l'> Ver todos los contenidos de la unidad </a></center>";
                    }
                    if ($materia=="Ecuaciones diferenciales") {
                      echo "<center><span class='glyphicon glyphicon-search'></span><a class='toded' href='http://fiseaprende.com/diferenciales/ecuaciones-diferenciales?un=$unidad_l'> Ver todos los contenidos de la unidad </a></center>";
                    }
                ?>
      </div>
    </div>
  </div>
</div>