<?php error_reporting(E_ALL ^ E_NOTICE); $mensaje=addslashes(htmlspecialchars(strip_tags(trim($_GET['mens']))));;

            if ($mensaje=="Ese correro ya esta registrado" || $mensaje=="El nombre de usario ya existe") {
                echo "
                    <div class='row'>
                        <div class='col-md-8 col-md-offset-2'>
                            <div class='alert alert-warning'>
                                <button class='close' data-dismiss='alert'><span>&times;</span></button>
                                <strong>$mensaje - <a class='etiqa' href='#ventana2' data-toggle='modal'>Intentar de nuevo</a></strong>
                            </div>
                        </div>
                    </div>
                ";
            }
            if ($mensaje=="Error, usuario o contraseña incorrecto") {
                echo "
                    <div class='row'>
                        <div class='col-md-8 col-md-offset-2'>
                            <div class='alert alert-warning'>
                                <button class='close' data-dismiss='alert'><span>&times;</span></button>
                                <strong>$mensaje - <a class='etiqa' href='#ventana1' data-toggle='modal'>Intentar de nuevo</a></strong>
                            </div>
                        </div>
                    </div>
                ";
            }

	   if ($mensaje==1) {
                echo "
                    <div class='row'>
                        <div class='col-md-8 col-md-offset-2'>
                            <div class='alert alert-warning'>
                                <button class='close' data-dismiss='alert'><span>&times;</span></button>
                                <strong>Intenta subir archivos solo con extención jpg, png y gif menores a 7 mb</a></strong>
                            </div>
                        </div>
                    </div>
                ";
            }
	   
	if ($mensaje==2 ) {
                echo "
                    <div class='row'>
                        <div class='col-md-8 col-md-offset-2'>
                            <div class='alert alert-warning'>
                                <button class='close' data-dismiss='alert'><span>&times;</span></button>
                                <strong>Te ofrecemos una disculpa, por el momento no es posible subir el contenido</a></strong>
                            </div>
                        </div>
                    </div>
                ";
            }
	if ($mensaje==4) {
                echo "
                    <div class='row'>
                        <div class='col-md-8 col-md-offset-2'>
                            <div class='alert alert-warning'>
                                <button class='close' data-dismiss='alert'><span>&times;</span></button>
                                <strong>Intenta con un nuevo titulo para poder registrar el contenido</a></strong>
                            </div>
                        </div>
                    </div>
                ";
            }
	

	if ($mensaje==3) {
                echo "
                    <div class='row'>
                        <div class='col-md-8 col-md-offset-2'>
                            <div class='alert alert-success'>
                                <button class='close' data-dismiss='alert'><span>&times;</span></button>
                                <strong>El contenido fue agregado exitosamente</strong>
                            </div>
                        </div>
                    </div>
                ";
            }
            
    ?>