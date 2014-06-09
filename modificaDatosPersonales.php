<?php
require_once(dirname(__FILE__) . "/connections/conexion.php");


if(isset($_REQUEST['nombre']) && isset($_REQUEST['apellidos']) && isset($_REQUEST['provincia']) && isset($_REQUEST['email']) && isset($_REQUEST['sexo']) && isset($_REQUEST['profesion'])){
    
    
    $query = $db->prepare("UPDATE usuarios SET nombre=?,apellidos=?,provincia=?,email=?,sexo=?,profesion=? WHERE id_usuario=?");
    
    $filasAfectadas=$query->execute(array($_REQUEST['nombre'],$_REQUEST['apellidos'],$_REQUEST['provincia'],$_REQUEST['email'],$_REQUEST['sexo'],$_REQUEST['profesion'],$_REQUEST['id']));
   
    if($filasAfectadas==1){
        echo 1;
    }
    else{
        echo 0;
    }
    
    
    
}else{
    echo "error";
}



?>
