<a style="margin-left:20px;" class='etiqa' href="#opciones" data-toggle="modal">+ Opciones</a>
        <br><br>
</div>
	<?php 
        function rcontent(){
            error_reporting(E_ALL ^ E_NOTICE);
            session_start();
            return isset($_SESSION['usuario']);
            }
            if (!rcontent()) {
                include("form_rcontsin.php");
            }
            else{ 
                include("form_rcont.php");
            }
	?>
            