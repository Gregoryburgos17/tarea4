<?php
include("utils.php");
 
$sql= "select * from registro";
$datos=conexion::consulta_array($sql);

var_dump($datos);

?>