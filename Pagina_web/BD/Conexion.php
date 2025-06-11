<?php
$host="localhost";
$user="root";
$clave="";
$db="usuarios";
$puerto="3306";

$conexion= new mysqli($host,$user,$clave,$db,$puerto);
$conexion->set_charset("utf8");


?>