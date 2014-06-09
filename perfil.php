<?php
require_once(dirname(__FILE__) . "/connections/conexion.php");

$queryUsuario = $db->prepare("SELECT * FROM usuarios WHERE id_usuario=?");
$queryUsuario->execute(array($_SESSION['id']));
$usuario = $queryUsuario->fetch(PDO::FETCH_OBJ);

$queryOfrecePerfil = $db->prepare("SELECT * FROM ofrece WHERE id_usuario=?");
$queryOfrecePerfil->execute(array($_SESSION['id']));
$serviciosOfrecePerfil = $queryOfrecePerfil->fetchAll(PDO::FETCH_OBJ);
?>

<form method="POST" name="formularioDatos" id="formularioPerfil">
    <div class="row">
        <div class="col-md-12 col-xs-12 col-lg-12 Texto text-left">
            <p>Bienvenido! Esta es tu zona personal. En ella puedes editar tus datos personales. Recuerda que tu nombre y tu profesión son visibles cuando ofreces algun servicio, mientras que tu email, provincia y fecha de nacmiento son privados, y sólo los utilizaremos para mejorar la busqueda y poder avisarte cuando a alguien le interese algun servicio que ofreces. Más abajo encontrarás la zona de servicios, donde podrás añadir, editar o borrar aquellos servicios que ofreces. Los servicios que añadas en esta sección estarán disponibles para otros usuarios en la pestaña "buscador". </p><p>Gracias y buen Feed-Back!</p>

        </div>
        <h2 class="text-left" style="margin-bottom:30px;">Datos Personales</h2>
        <div class="col-md-2 col-xs-2 col-lg-2 cajaDatos" id="fotoPerfil">

            <img src="img_db/<?php
            if ($usuario->foto == "") {
                echo "default.jpg";
            } else {
                echo $usuario->foto;
            }
            ?>" class="img-responsive inputFoto" id="imagenVieja">
        </div>
        <div class="col-md-10 col-xs-10 col-lg-10 text-left cajaDatos"style="widht:100%;">
            <div class="row">
                <div class="col-md-12 col-xs-12 col-lg-12 perfilDatos">
                    Nombre:  <span id="nombre"><?php echo $usuario->nombre . " " . $usuario->apellidos; ?>
                        <input type="hidden" value="<?php echo $usuario->apellidos; ?>" name="apellidos">
                        <input type="hidden" value="<?php echo $usuario->nombre; ?>" name="nombre"></span>

                </div>
                <div class="col-md-12 col-xs-12 col-lg-12 perfilDatos">
                    Provincia:  <span id="provincia"><?php echo $usuario->provincia; ?></span>
                </div>
                <div class="col-md-7 col-xs-7 col-lg-7 perfilDatos">
                    Email:  <span id="email"><?php echo $usuario->email; ?></span>
                </div>
                <div class="EditaPerfil col-md-5 col-xs-5 col-lg-5 ">
                    <a class="btn btn-lg botonEditaDatos botonEdita botonesFeed" >Editar Datos Personales</a> 
                </div>
                <div class="col-md-12 col-xs-12 col-lg-12 perfilDatos">
                    Sexo: <span id="sexo"><?php echo $usuario->sexo; ?></span>
                </div>

                <div class="col-md-12 col-xs-12 col-lg-12 perfilDatos">
                    Fecha de Nacimiento: <span id="fecha"><?php echo date('d M Y ', strtotime($usuario->fecha_nacimiento)); ?></span>
                </div>
                <div class="col-md-12 col-xs-12 col-lg-12 perfilDatos">
                    Profesión: <span id="profesion"><?php echo $usuario->profesion; ?></span>
                </div>
                <input type="hidden" value="<?php echo $_SESSION['id']; ?>" name="id">
            </div>
        </div>

        <div class="col-md-12 col-xs-12 col-lg-12 cajaServicios text-left">
            <h2>Servicios</h2>
            <div class="row CajaTodosLosServicios">
                <?php
                if ($queryOfrecePerfil->rowCount() > 0) {
                    foreach ($serviciosOfrecePerfil as $servicioOfrece) {

                        $queryServiciosPerfil = $db->prepare("SELECT * FROM servicios WHERE id_servicio=?");
                        $queryServiciosPerfil->execute(array($servicioOfrece->id_servicio));
                        $serviciosPerfil = $queryServiciosPerfil->fetch(PDO::FETCH_OBJ);
                        ?>

                        <div class="col-md-12 col-xs-12 col-lg-12 cajaServicio">
                            <div class="row">
                                <div class="col-md-4 col-xs-4 col-lg-4 perfilServicios">
                                    <img src="img/<?php echo $serviciosPerfil->foto; ?>" class="img-responsive">
                                </div>
                                <div class="col-md-8 col-xs-8 col-lg-8 perfilServicios">
                                    <div class="row">
                                        <div class="col-md-6 col-xs-6 col-lg-6 perfilServicios">
                                            <i class="fa fa-bullseye lista"></i>Nombre del Servicio: <span><?php echo ucfirst($serviciosPerfil->nomservicio); ?>.</span>
                                        </div>
                                        <div class="col-md-3 col-xs-3 col-lg-3 perfilServicios">
                                            <i class="fa fa-bullseye lista"></i>Sector: <span><?php echo ucfirst($serviciosPerfil->sector); ?>.</span>
                                        </div>
                                        <div class="col-md-3 col-xs-3 col-lg-3 perfilServiciosBasura">
                                            <i class="fa fa-trash-o basura" id="<?php echo $servicioOfrece->id_usuario . "," . $servicioOfrece->id_servicio; ?>"></i>
                                        </div>
                                        <div class="col-md-12 col-xs-12 col-lg-12 perfilServicios">
                                            <i class="fa fa-bullseye lista"></i>Descripción Corta: <br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="cajaCorta"><?php echo ucfirst($servicioOfrece->descripcionCorta); ?>.</span><i class="fa fa-pencil-square-o editaServicios Corta" id="<?php echo $servicioOfrece->id_usuario . "," . $servicioOfrece->id_servicio; ?>" ></i>
                                        </div>
                                        <div class="col-md-12 col-xs-12 col-lg-12 perfilServicios">
                                            <i class="fa fa-bullseye lista"></i>Descripción Larga: <br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="cajaLarga"><?php echo ucfirst($servicioOfrece->descripcionLarga); ?>.</span><i class="fa fa-pencil-square-o editaServicios Larga" id="<?php echo $servicioOfrece->id_usuario . "," . $servicioOfrece->id_servicio; ?>"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>

        </div>
        <div class="col-md-12 col-xs-12 col-lg-12 text-left botonAñade" data-toggle="modal" data-target="#myModalAñadeServicios">
            Añade <?php
            if ($queryOfrecePerfil->rowCount() > 0) {
                echo "más ";
            }
            ?>Servicios! <i class="fa fa-plus-square"style="padding-left: 30px;"></i>
        </div>

    </div>
    <div class="modal fade" id="myModalAñadeServicios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Añade un servicio.</h4>
                </div>
                <div class="modal-body">
                    <?php
                    require_once(dirname(__FILE__) . "/connections/conexion.php");

                    $querySectores = $db->prepare("select nomsector from sector");
                    $querySectores->execute();
                    $listaSector = $querySectores->fetchAll(PDO::FETCH_OBJ);
                    ?>

                    <form  action="ajax_anadirServicio.php" method="POST" id="formServicios">

                        <select class="form-control" id="sectoresAñade" name="sectoresAñade">
                            <option value="" disabled selected>Seleccione un Sector</option>
                            <?php
                            foreach ($listaSector as $sector) {
                                ?>
                                <option value='<?php echo $sector->nomsector; ?>'><?php echo $sector->nomsector; ?></option>

                            <?php } ?>
                        </select>
                        <select class="form-control" name='serviciosAñade' id='serviciosAñade' >
                            <option value="" disabled selected>Seleccione un Servicio</option>
                        </select>


                        <input type="text" class="form-control" id="descripcionCortaAñade" placeholder="Introduzca una descripción corta (Máx. 255 caracteres)." name="descripcionCorta" size="255">
                        <textarea rows="4" cols="50" class="form-control" id="descripcionLargaAñade" name="descripcionLarga" placeholder="Introduzca una descripción larga del servicio."></textarea>
                        <input type="hidden" value="<?php echo $_SESSION['id']; ?>" name="idServicios">

                        <div id="ultimo"></div>
                        <input type="submit" class="btn btn-default" id="botonAñadeServicios" value="Añadir!">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
</form>