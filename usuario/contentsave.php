<div class="col-md-9 col-xs-12 boruser">
  <div class="row">
      <div class="col-md-4">
          <h3><span class="glyphicon glyphicon-folder-close"></span> Contenidos guardados</h3>
      </div>
        <div class="col-md-2 col-sm-3 bred">
            <div class="dropdown" style="margin-top:20px;">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="background-color:#ddd;">
                    Por materias
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu hoverhead" aria-labelledby="dropdownMenu1">
                  <?php include("content/btn_mat.php"); ?>
                </ul>
            </div>
        </div>
      
      <div class="col-md-2 col-sm-5 bblue">
            <div class="dropdown" style="margin-top:20px;">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="background-color:#ddd;">
                    Mis listas
                <span class="caret"></span>
                </button>
                <ul class="dropdown-menu hoverhead" aria-labelledby="dropdownMenu1">
                  <?php include("content/btn_list.php") ?>
                </ul>
            </div>
      </div>
  </div>
  
  <p style="margin-top:15px;">
        
      <a class='fik' style='text-decoration:none;' href='#crearlist' data-toggle='modal'><span class='glyphicon glyphicon-plus'></span> Crear nueva lista</a>
            &nbsp;&nbsp;          
  
        <?php 
          if ($tb!='' && $fichas=='' && $mat=='' && $list=='') {
            echo "<a class='fik' href='?cs=cs&fichas=fichas'>Por fichas</a>";
            }
          if ($tb!='' && $fichas=='' && $mat!='' && $list=='') {
            echo "<a class='fik' href='?cs=cs&fichas=fichas&mat=$mat'>Por fichas</a>";
          }
          if ($tb!='' && $fichas=='' && $mat=='' && $list!='') {
            echo "<a class='fik' href='?cs=cs&fichas=fichas&list=$list'>Por fichas</a>";
          }
          if ($tb=='' && $fichas!='' && $mat=='' && $list=='') {
            echo "<a class='fik' href='?cs=cs&tb=tb'>Por tabla</a>";
          }
          if ($tb=='' && $fichas!='' && $mat!='' && $list=='') {
            echo "<a class='fik' href='?cs=cs&tb=tb&mat=$mat'>Por tabla</a>";
          }
          if ($tb=='' && $fichas!='' && $mat=='' && $list!='') {
            echo "<a class='fik' href='?cs=cs&tb=tb&list=$list'>Por tabla</a>";
          }
          ?>
  </p>
  <hr>
      <p style="font-family:cursive;"><?php include("content/name_list.php"); ?></p>
          <?php 
            if ($tb!='' && $fichas=='') {
                include("content/tabla_c.php");
              }
            if ($tb=='' && $fichas!='') {
                include("content/fichas_c.php");
              }
            ?>
          <?php 
            if ($list!='') {
                echo "
                  <p><a href='#modlist' data-toggle='modal' style='text-decoration:none;'><span class='glyphicon glyphicon-cog'></span> Modificar lista</a></p>
                ";
            }
           ?>
  
</div>
    
    <?php include("content/agregarlist.php") ?>
    <?php include("content/modallist.php") ?>