<?php
include_once 'Conexion.php';
$conectar = new ConexionPDO($host, $db, $user, $password);
$conectar->conectar();
echo "<br>";
$conectar->desconectar();
?>