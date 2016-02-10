<form action="reco/modificar_reco.php" method="POST" enctype="multipart/form-data">
            
            <label>Puedes modificar el texto que habias colocado antes</label>
            <input type="text" class="form-control" name='q' value="<?php echo "$texto"; ?>" required>
            <br>
            <label>Selecciona una materia</label>
                <select class="form-control input-sm optionreco" id="tipo" name="w" required>
                    <option value=''></option>
                    <option class="optionreco" value="Algebra basica">Algebra básica</option>
                    <option class="optionreco" value="Algebra intermedia">Algebra intermedia</option>
                    <option class="optionreco" value="Trigonometria">Trigonometría</option>
                    <option class="optionreco" value="Geometria analitica">Geometría analítica</option>
                    <option class="optionreco" value="Estadistica">Estadística</option>
                    <option class="optionreco" value="Calculo diferencial">Calculo diferencial</option>
                    <option class="optionreco" value="Calculo integral">Calculo integral</option>
                    <option class="optionreco" value="Calculo avanzado">Calculo avanzado</option>
                    <option class="optionreco" value="Algebra lineal">Algebra lineal</option>
                    <option class="optionreco" value="Ecuaciones diferenciales">Ecuaciones diferenciales</option>
            </select>
            <br>
            
            <?php echo "<input type='hidden' name='e' value='$id_reco'>"; ?>
            
            <button type="submit" class="btn btn-primary">Aceptar</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
    </form>