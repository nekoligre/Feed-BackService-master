<?php
require_once(dirname(__FILE__) . "/connections/conexion.php");
function  ingles ($hoy) {
	
	$hoy2 = substr($hoy, 0, 10);	
	$cad2 = $hoy2;	
	$uno=substr($cad2, 6, 4);
	$dos=substr($cad2, 3, 2);
	$tres=substr($cad2, 0, 2);
	$hoy = ($uno."-".$dos."-".$tres.substr($hoy, 11, 17));	
	
	return ($hoy);
	
}
if(isset($_POST['passRegistro']) &&
        isset($_POST['nombre']) &&
        isset($_POST['apellidos']) && 
        isset($_POST['profesion']) && 
        isset($_POST['sexo']) && 
        isset($_POST['email'])&& 
        isset($_POST['fechaNac']) &&
        isset($_POST['aliasRegistro']) && 
        isset($_POST['provincia'])
        ){
   
    $query = $db->prepare("INSERT INTO usuarios (alias,nombre,apellidos,provincia,email,sexo,pass,fecha_nacimiento,profesion) VALUES (?,?,?,?,?,?,?,?,?)");
    
    $resultado=$query->execute(array($_POST['aliasRegistro'],$_POST['nombre'],$_POST['apellidos'],$_POST['provincia'],$_POST['email'],$_POST['sexo'],md5($_POST['passRegistro']),ingles($_POST['fechaNac']),$_POST['profesion']));
    
   if($resultado==1){
       
       mail($_POST['email'], "Bienvenido a Feed-Back Service", "<img src='img/logoBuenoOtro.png'><br/>Bienvenido! Ya estás registrado en Feed-Back Service. Ahora sólo introduce tu alias y contraseña para empezar a intercambiar servicios!<br/>Estos son tus datos de acceso:</br><ul><li> Alias: ".$_POST['aliasRegistro'].".</li><li> Contraseña: ".$_POST['passRegistro'].".</li><ul><br/><br/><br/><p style='font-size:10px;'>Feed-Back Service.</p>");
       header("Location:index.php?p=principal&error=7");
       
   }
   else{
       header("Location:index.php?p=principal&error=6");
   }
    
}
else{
    echo "Error";
}
?>


        
         
        
        
        
        