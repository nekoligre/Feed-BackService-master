
<form method="POST" action="buscar.php" name="formularioBusca" id="formularioBusca">
    <select id="provincia" name="provincia">
        <option disabled selected>Seleccione una provincia</option>
        <option value="A Coruña">A Coruña</option>
        <option value="Álava">Álava</option>
        <option value="Albacete">Albacete</option>
        <option value="Alicante">Alicante</option>
        <option value="Almería">Almería</option>
        <option value="Asturias">Asturias</option>
        <option value="Ávila">Ávila</option>
        <option value="Badajoz">Badajoz</option>
        <option value="Baleares">Baleares (Illes)</option>
        <option value="Barcelona">Barcelona</option>
        <option value="Burgos">Burgos</option>
        <option value="Cáceres">Cáceres</option>
        <option value="Cádiz">Cádiz</option>
        <option value="Cantabria">Cantabria</option>
        <option value="Castellón">Castellón</option>
        <option value="Ceuta">Ceuta</option>
        <option value="Ciudad Real">Ciudad Real</option>
        <option value="Córdoba">Córdoba</option>
        <option value="Cuenca">Cuenca</option>
        <option value="Girona">Girona</option>
        <option value="Granada">Granada</option>
        <option value="Guadalajara">Guadalajara</option>
        <option value="Guipúzcoa">Guipúzcoa</option>
        <option value="Huelva">Huelva</option>
        <option value="Huesca">Huesca</option>
        <option value="Jaén">Jaén</option>
        <option value="La Rioja">La Rioja</option>
        <option value="Las Palmas">Las Palmas</option>
        <option value="León">León</option>
        <option value="Lleida">Lleida</option>
        <option value="Lugo">Lugo</option>
        <option value="Madrid">Madrid</option>
        <option value="Málaga">Málaga</option>
        <option value="Melilla">Melilla</option>
        <option value="Murcia">Murcia</option>
        <option value="Navarra">Navarra</option>
        <option value="Ourense">Ourense</option>
        <option value="Palencia">Palencia</option>
        <option value="Pontevedra">Pontevedra</option>
        <option value="Salamanca">Salamanca</option>
        <option value="Santa Cruz de Tenerife">Santa Cruz de Tenerife</option>
        <option value="Segovia">Segovia</option>
        <option value="Sevilla">Sevilla</option>
        <option value="Soria">Soria</option>
        <option value="Tarragona">Tarragona</option>
        <option value="Teruel">Teruel</option>
        <option value="Toledo">Toledo</option>
        <option value="Valencia">Valencia</option>
        <option value="Valladolid">Valladolid</option>
        <option value="Vizcaya">Vizcaya</option>
        <option value="Zamora">Zamora</option>
        <option value="Zaragoza">Zaragoza</option>
    </select>

    <?php
                    require_once(dirname(__FILE__) . "/connections/conexion.php");

                    $querySectores = $db->prepare("select nomsector from sector");
                    $querySectores->execute();
                    $listaSector = $querySectores->fetchAll(PDO::FETCH_OBJ);
                    ?>


                        <select class="form-control" id="sectorb" name="sectorb">
                            <option value="" disabled selected>Seleccione un Sector</option>
                            <?php
                            foreach ($listaSector as $sector) {
                                ?>
                                <option value='<?php echo $sector->nomsector; ?>'><?php echo $sector->nomsector; ?></option>

                            <?php } ?>
                        </select>
                        <select class="form-control" name='servicio' id='servicio' >
                            <option value="" disabled selected>Seleccione un Servicio</option>
                        </select>

    <a type="button"  value="mostrar" id="mostrar" class="btn btn-lg" > Mostrar</a> 

</form>
<div>
    <ul id="resultado"></ul>
</div>
