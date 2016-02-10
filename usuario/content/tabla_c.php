<table class="table ">
  <thead>
      <tr>   
        <th>Materia</th>
        <th>Titulo</th>
        <th>Guardado</th>
      </tr>
  </thead>
<tbody>
<?php 
  //controlador de lista
  $n_user=$_SESSION['id_usuario'];
  //traer todos los registros
  if ($mat=='' && $list=='') {
    global $b_fichas;
    $b_fichas="SELECT id_rel,id_listcontent,id_user,matter,title,un_cont,url_content,fecha_registro_relacion FROM list_content_rel where id_user='$n_user' order by id_rel desc";
    }

  if ($mat!='' && $list=='') {
    global $b_fichas;
    $b_fichas="SELECT id_rel,id_listcontent,id_user,matter,title,un_cont,url_content,fecha_registro_relacion FROM list_content_rel where id_user='$n_user' and matter='$mat' order by id_rel desc";
    }

  if ($mat=='' && $list!='') {
    global $b_fichas;
    $lista_list="SELECT id_listcontent,id_user,name_listcontent FROM list_contentarch WHERE id_user='$n_user'  and name_listcontent='$list'";
    $e_lista_list=$conexion->query($lista_list);
    $a_lista_list=$e_lista_list->fetch_array();
    $id_x=$a_lista_list[0];

    $b_fichas="SELECT id_rel,id_listcontent,id_user,matter,title,un_cont,url_content,fecha_registro_relacion FROM list_content_rel where id_user='$n_user' and id_listcontent='$id_x' order by id_rel desc";

    }
  
  $e_fichas=$conexion->query($b_fichas) or die("x.x");
    while ($a_fichas=mysqli_fetch_array($e_fichas)) {
      $title_cficha=$a_fichas['title'];
      $fecha_c=$a_fichas['fecha_registro_relacion'];
      $materia_c=$a_fichas['matter'];
      $url_c=$a_fichas['url_content'];
      
      echo "
        <tr>
          <td>$materia_c</td>
          <td><a href='$url_c' style='text-decoration:none;'>$title_cficha</a></td>
          <td>$fecha_c</td>
        </tr>
      ";
    }
 ?>
      </tbody>
</table>