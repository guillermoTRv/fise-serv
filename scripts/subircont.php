    <div class="panel-body fk">
        <?php 
        function fun(){
            error_reporting(E_ALL ^ E_NOTICE);
            session_start();
            return isset($_SESSION['usuario']);
                }
            if (!fun()) {
              echo "<a href='#ventana2' class='etiqa' data-toggle='modal'>Debes de registrarte para poder compartir un contenido</a>";
              echo "<br>o<br>";
              echo "<a href='#ventana1' class='etiqa' data-toggle='modal'>Inicia sesión</a>";
            }
            else{
              include("../scripts/form_subirmat.php");
              include("../modalcond.php");
            }
        ?>
       
    </div>