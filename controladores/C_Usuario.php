<?php
require_once("../modelos/M_Usuario.php");
 ////////////////////////////
$cedula=$_POST["cedula"];
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$correo=$_POST["correo"];
$email = filter_var($correo,FILTER_VALIDATE_EMAIL);
$login=$_POST["login"];
$login = md5($login);
$permiso=$_POST["permiso"];
$operacion=$_POST["txtoperacion"];
/////////////////////////////
$objUsuario = new usuario($cedula,$nombre,$apellido,$email,$login,$permiso);
/////////////////////////////
if($operacion=="verificar")
{
	$objUsuario->verificar();
}
?>