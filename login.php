<?php
require_once(dirname(__FILE__) . "/connections/conexion.php");
$pass = md5($_POST['pass']);

if (isset($_POST['alias']) && isset($pass)) {
    $alias = $_POST['alias'];
    $query = $db->prepare("SELECT * FROM usuarios WHERE alias=? AND pass=?");
    $query->execute(array($alias,$pass));
    $usuario = $query->fetch(PDO::FETCH_OBJ);

    if ($query->rowCount()== 1) {
        
        session_start();
        $_SESSION['id']=$usuario->id_usuario;
        header("Location:home");
    } else {
        header("Location: index.php?p=principal&error=1");
    }
} else {
    header("Location: index.php?p=principal&error=2");
}
?>
