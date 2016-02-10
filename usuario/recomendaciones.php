<?php 
	global $pet;       $pet     =addslashes(htmlspecialchars(strip_tags(trim($_GET['pet']))));
	global $lpet;      $lpet     =addslashes(htmlspecialchars(strip_tags(trim($_GET['lpet']))));
	global $rpet;      $rpet     =addslashes(htmlspecialchars(strip_tags(trim($_GET['rpet']))));
 ?>
<style type="text/css">
	input.inreco{
            font-family:cursive;
            font-weight: bolder;

        }
    .optionreco{
    		font-size:1.01em;
    		font-family:cursive;
            font-weight: bolder;
    	}
    .lreco{
    		font-size:1.1em;
    		font-family:cursive;
            font-weight: bolder;
    	}
    .lresp{
    		font-size:1.1em;
    		font-family:cursive;
    		margin-bottom:-3px;
    }
    a.lkn{
    		text-decoration:none;
    }
    a.lkn:hover{
    		text-decoration:none;
    }
    a.jun{
            word-wrap: break-word;
            text-decoration:none;
        }
    a.jun:hover{
            text-decoration:none;
        }
</style>
<div class="col-md-9 boruser">
	<div class="row">
		<div class="col-md-6">
            <h3><span class="glyphicon glyphicon-star"></span> Panel de recomendaciones</h3>    
        </div>
	</div>
	<p style="margin-top:15px;">
		<a class='fik' href='?rco=rco&pet=pet'>Pedir una recomendacion</a>&nbsp;&nbsp;&nbsp;

		<a class='fik' href='?rco=rco&lpet=lpet'>Lista de recomendaciones</a>&nbsp;&nbsp;&nbsp;

		<a class='fik' href='?rco=rco&rpet=rpet'>Mis respuestas</a>
	</p>
	<hr>

	<?php 
		if ($pet!='') {
			include("reco/formanswer.php");
		}
		if ($lpet!='') {
			include("reco/listareco.php");
		}
		if ($rpet!='') {
			include("reco/resreco.php");
		}
	 ?>
	<br>
<br>
<br>
<br>
</div>