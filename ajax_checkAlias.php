<?php

require_once(dirname(__FILE__) . "/connections/conexion.php");
$alias = $_POST['alias'];

if (isset($alias)) {

    $query = $db->prepare("SELECT alias FROM usuarios WHERE alias=?");
    
    $query->execute(array($alias));
  $aliasRepe = $query->fetch(PDO::FETCH_OBJ);
   
   
    if ($query->rowCount()>0) {
     echo 1;
    } else {
        echo 0;
    }
} else{
    echo 0;
}
?>

