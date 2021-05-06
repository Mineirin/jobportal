<?php
//Credenciais de acesso ao BD
define('HOST', 'localhost');
define('USER', 'mixcol34_Mycon');
define('PASS', 'M220440@n');
define('DBNAME', 'mixcol34_takinamao');

$conn = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME . ';', USER, PASS);

