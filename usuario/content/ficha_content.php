<?php 
	echo "
	<div class='panel panel-default pan'>
                    <div class='panel-body'>
                        <h4><a href='http://localhost/$url_c' style='color:black;'>$title_cficha</a></h4>
                        <p class='pdesc'>Agregado el $fecha_c $materia_c</p>
                        <p><span class='glyphicon glyphicon-list-alt'></span> Unidad-$un_cont</p>

                        <p><a class='fik' href='$url_c'>Ver</a>&nbsp;-&nbsp;<a class='fik' href='#$id_rel' data-toggle='modal'>Opciones</a></p>
                    </div>
                </div>
	";
    include("modal_cont.php");
 ?>