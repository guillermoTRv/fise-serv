<?php 
    $myid=$_SESSION['id_usuario'];
	$bas="SELECT * FROM ficha_contenido_materia WHERE id_user='$myid' order by id_fichamat desc";
	$e_bas=$conexion->query($bas);
	while ($array_bas=mysqli_fetch_array($e_bas)) {
        $materia=$array_bas['materia'];
        $id_fichabas=$array_bas['id_fichamat'];
        $titulo=$array_bas['titulo'];
        $texto=$array_bas['descripcion_texto'];
        $unidad=$array_bas['unidad'];
        $tema=$array_bas['tema'];
        $link=$array_bas['link'];
        $fecha=$array_bas['fecha_registro_fichamat'];
        $conca="a".$id_fichabas;
		echo "
            <div class='panel panel-default pan'>
                <div class='panel-body'>
                    <h4>$titulo</h4>
                    <p>Materia:$materia</p>
                    <p>Unidad:$unidad</p>
                    <p>Tema:$tema</p>
                    <p>Agregado el $fecha</p>
                    <p>";
            include("aport/redaport.php");
        echo"            <span class='glyphicon glyphicon-triangle-right'></span> Ver contenido
                        </a>&nbsp;&nbsp;
                        <a class='fik' href='?aport=aport&camb=$id_fichabas' data-toggle='modal'><span class='glyphicon glyphicon-cog'></span> Modificar</a>
                            &nbsp;&nbsp;
                        <a class='fik' href='#$conca' data-toggle='modal'>Eliminar</a>
                    </p>
                </div>
            </div>
        ";
         include("aport/modal_elim.php");
	}
 ?>
