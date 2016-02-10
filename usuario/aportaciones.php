<div class="col-md-9 boruser">
    <div class="row">
        <div class="col-md-4">
            <h3><span class="glyphicon glyphicon-upload"></span> Mis aportaciones</h3>    
        </div>
    </div>
    <hr>
    <?php 
    if ($camb=='') {
    	include("aport/aport_cont.php");
    }
    if ($camb!='') {
    	include("aport/cambv.php");
    }
 
    ?>
</div>