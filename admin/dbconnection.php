<?php
$mysqli_hostname = "localhost";
$mysqli_user ="mixcol34_Mycon";
$mysqli_password ="mycon123";
$mysqli_database ="mixcol34_takinamao";

$bd = mysqli_connect($mysqli_hostname, $mysqli_user, $mysqli_password) or die("opa! Não foi possível conectar o banco de dados");
mysqli_select_db($mysqli_database, $bd) or die("opps! banco de dados não conectado");

?>
