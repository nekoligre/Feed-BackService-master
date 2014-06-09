<?php
require_once(dirname(__FILE__) . "/connections/conexion.php");

//echo ($_REQUEST['desc'].$_REQUEST['usu'].$_REQUEST['serv']);
if(isset($_REQUEST['desc']) && isset($_REQUEST['usu']) && isset($_REQUEST['serv'])){
    
    
    $query = $db->prepare("UPDATE ofrece SET descripcionLarga=? WHERE id_usuario=? and id_servicio=?");
    
    $filasAfectadas=$query->execute(array(nl2br($_REQUEST['desc']),$_REQUEST['usu'],$_REQUEST['serv']));
   
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
