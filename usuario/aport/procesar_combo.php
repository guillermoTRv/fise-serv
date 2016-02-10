<?php
include("../../config.php");
$eleg=addslashes(htmlspecialchars(strip_tags(trim($_POST["elegido"]))));
$consulta_tema="SELECT * FROM tema_unidad_materias where id_unidades='$eleg'";
$e_tema=$conexion->query($consulta_tema);
while ($array=mysqli_fetch_array($e_tema)) {
    $id_tema=$array['id_tematrig'];
    $n_tema=$array['tema'];
    echo "<option value='$n_tema'>$n_tema</option>";
    echo "hola";
}
   
?>