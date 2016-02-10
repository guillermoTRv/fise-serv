<div class="media-body">

    <h3 style="margin-top:10px;"><?php echo $_SESSION['name_user']; ?></h3>
    
    <?php 
    	$b_type="SELECT correo_user,type_user,pais FROM usuariosfise WHERE correo_user='".$_SESSION['usuario']."'";
    	$e_type=$conexion->query($b_type);
    	$array=$e_type->fetch_array();
    	$type_user=$array[1];
    	$pais=$array[2];

    	echo "<p class='puser'>Tipo de usuario:$type_user - Region: $pais</p>";
     ?>
    
    <p class="puser"><?php echo $_SESSION['usuario']; ?></p>
</div>