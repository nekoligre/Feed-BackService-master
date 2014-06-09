<?php
session_start();
require_once(dirname(__FILE__) . "/connections/conexion.php");
$inc = (!isset($_GET['p'])) ? "principal" : $_GET['p'];
if (!file_exists($inc . ".php")) {
    header("Location: .");
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>FeedBack Service</title>
        <base href="http://localhost/Feed-BackService/">
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <script type="text/javascript" src="js/buscador.js"></script>

        <!--Hojas de Estilo-->

        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/cover.css" rel="stylesheet">
        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css">
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <link href="css/estilo.css" rel="stylesheet" />

        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

        <!--scripts-->
        <script type='text/javascript' src='js/funciones.js'></script>
        <script type="text/javascript" src="js/registro.js"></script>
        <script type="text/javascript" src="js/login.js"></script>
        <script type="text/javascript" src="js/perfil.js"></script>
        
        

    </head>

    <body>
        <?php require_once(dirname(__FILE__) . "/erroresyexitos.php"); ?>

        <!-- Menú Cabecera -->
        <header class="row"> 
            <div class=" col-md-12 col-xs-12 col-lg-12">
                <div claas="row">
                    <div class="col-md-4 col-xs-12  col-lg-4">
                        <img class="img-responsive " src="img/logoBuenoOtro.png">
                    </div>
                    <div class="col-md-3 col-xs-12  col-lg-4">
                        <div class="row">
                        <?php
                        if (isset($_SESSION['id'])) {
                            $queryUsuario = $db->prepare("SELECT * FROM usuarios WHERE id_usuario=?");
                            $queryUsuario->execute(array($_SESSION['id']));
                            $usuario = $queryUsuario->fetch(PDO::FETCH_OBJ);
                        ?>
                            <div class="col-lg-12 col-md-12 col-xs-12 text-right">
                        <span class="usu" style="text-align: right;">Hola, <span><?php echo $usuario->nombre; ?></span> ! <img src="img/caritaFeliz.png" class="carita"></span></div>
                            <div class="col-lg-12 col-md-12 col-xs-12 text-right">
                                <span class="desconectar"><img src="img/disconnect.png" class="">  <a href="desconectar.php">Desconectar.</a></span>
                        </div>
                        <?php }?>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12  col-lg-4">
                        <ul class="nav masthead-nav menu ">


<?php if ($inc == "principal" || $inc == "home") { ?>
                                <li class="active liMenu"><a href="#">Home</a></li>
                                <li class="liMenu"><a href="sobre_nosotros">About Us</a></li>
                                <li class="liMenu"><a href="#">Contact</a></li>
<?php } else { ?>
                                <li class=" liMenu"><a href="">Home</a></li>
                                <li class="active liMenu" style="width: 130px;"><a href="index.php?p=sobre_nosotros">About Us</a></li>
                                <li class="liMenu"><a href="#">Contact</a></li>
<?php } ?>

                        </ul>
                    </div>
                </div>
            </div>

            <div style="clear:both;"></div>
        </header>
        <div class="fondo">





