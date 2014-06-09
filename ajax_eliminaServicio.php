<?php
require_once(dirname(__FILE__) . "/connections/conexion.php");

if(isset($_REQUEST['idServicio']) && isset($_REQUEST['idUsuario'])){
    
    
    $query = $db->prepare("DELETE FROM ofrece WHERE id_usuario=? and id_servicio=?");
    
    $filasAfectadas=$query->execute(array($_REQUEST['idUsuario'],$_REQUEST['idServicio']));
   
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
