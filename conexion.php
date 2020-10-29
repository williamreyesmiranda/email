<?php
$host= 'localhost';
$user= 'intranet_william';
$pwd= 'wrm1124023751';
$db= 'intranet_clientes';

$conexion= mysqli_connect($host,$user,$pwd,$db);
$conexion->set_charset('utf8');
return $conexion;
if($conexion){
    echo "conexion exitosa";
}else{
    echo "error al conectar";
}

?>