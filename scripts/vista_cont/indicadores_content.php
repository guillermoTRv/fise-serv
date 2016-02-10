    <div class="row" style="margin-top:21px;">
        <div class="col-md-2" style="margin-top:-10px;">
            <h4>Comentar</h4>
        </div>
        
        <div class="col-md-2">
            <?php include("megusta.php"); ?>
        </div>

        <div class="col-md-2">
        <span class="glyphicon glyphicon-plus"></span>
            <a href="#guardar" data-toggle="modal" class="amounbas">Guardar</a>
        </div>
        <div class="col-md-2 compfin">
            <?php include("redv.php"); ?>
        </div>
    </div>
        <?php 
            function content(){
            error_reporting(E_ALL ^ E_NOTICE);
            session_start();
            return isset($_SESSION['usuario']);
                }
            if (!content()) {
                include("form_agregarcontenidosin.php");
                }
            else{
                include("form_agregarcontenido.php");
                }
        ?>