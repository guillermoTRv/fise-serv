<div class="col-md-9 boruser">
    <div class="row">
        <div class="col-md-4">
            <h3><span class="glyphicon glyphicon-saved"></span> Contenidos preferentes</h3>    
        </div>
        <div class="col-md-2">
            <div class="dropdown" style="margin-top:20px;">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="background-color:#ddd;">
                    Por materias
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu hoverhead" aria-labelledby="dropdownMenu1">
                    <?php include("muchos/btn_mat.php") ?>
                </ul>
            </div>
        </div>
    </div>
    <br>
        <?php 
            if ($tb!='' && $fichas=='' && $mat=='') {
                echo "<a class='fik' href='?pref=pref&fichas=fichas'>Por fichas</a>";
            }
            if ($tb!='' && $fichas=='' && $mat!='') {
                echo "<a class='fik' href='?pref=pref&fichas=fichas&mat=$mat'>Por fichas</a>";
            }
            if ($tb=='' && $fichas!='' && $mat=='') {
                echo "<a class='fik' href='?pref=pref&tb=tb'>Por tabla</a>";
            }
            if ($tb=='' && $fichas!='' && $mat!='') {
                echo "<a class='fik' href='?pref=pref&tb=tb&mat=$mat'>Por tabla</a>";
            }
        ?>
        <hr>
        <?php 
        if ($tb!='' && $fichas=='') {
            include("muchos/prf_table.php");         
        }
        if ($tb=='' && $fichas!='') {
            include("muchos/prf_fichas.php");
        }
        ?>
</div>