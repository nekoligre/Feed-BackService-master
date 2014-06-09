<script type="text/javascript" src="js/notify.js"></script>
<script type="text/javascript" src="js/notify.min.js"></script>

<script type="text/javascript">
    $(function() {
<?php

if (isset($_GET['error'])) {
    if ($_GET['error'] == 1) {
        echo "$.notify('Ha introducido un alias o contraseña incorrecto, por favor, vuelva a intentarlo.',{ position:'top center' });";
    }
    if ($_GET['error'] == 2) {
        echo "$.notify('Ha habido un error, por favor, contacte con el administrador.','error',{ position:'top center' });";
    }
    if ($_GET['error'] == 3) {
        echo "$.notify('Sus datos se han actualizado con exito.','success',{ position:'top center' });";
    }
    if ($_GET['error'] == 4) {
        echo "$.notify('Ha habido un error al guardar sus datos, inténtelo más tarde.','error',{ position:'top center' });";
    }
    if ($_GET['error'] == 5) {
        echo "$.notify('No llegan los datos al servidor.','error',{ position:'top center' });";
    }
    if ($_GET['error'] == 6) {
        echo "$.notify('Ha habido un problema en el registo, pongase en contacto con el administrador.','error',{ position:'top center' });";
    }
    if ($_GET['error'] == 7) {
        echo "$.notify('Se ha registrado con éxito. Se le ha enviado un email con sus datos de acceso.','success',{ position:'top center' });";
    }
    if ($_GET['error'] == 8) {
        echo "$.notify('No borra.','error',{ position:'top center' });";
    }
    if ($_GET['error'] == 9) {
        echo "$.notify('No llegan variables.','error',{ position:'top center' });";
    }
    if ($_GET['error'] == 10) {
        echo "$.notify('El servicio se ha introducido correctamente.','success',{ position:'top center' });";
    }
    if ($_GET['error'] == 11) {
        echo "$.notify('Ha habido un error al introducir el servicio.','error',{ position:'top center' });";
    }
    if ($_GET['error'] == 12) {
        echo "$.notify('Se ha actualizado el servicio con éxito.','success',{ position:'top center' });";
    }
    if ($_GET['error'] == 11) {
        echo "$.notify('Ha habido un error al actualizar el servicio.','error',{ position:'top center' });";
    }
    if ($_GET['error'] == 12) {
        echo "$.notify('Se ha eliminado el servicio.','success',{ position:'top center' });";
    }
}
?>
    });
</script>