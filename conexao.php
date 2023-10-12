<?php

$hostname = "localhost";
$bancodedados = "dbconselho";
$usuario = "root";
$senha = "@D2vveaax";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
} else {
    //echo "Conexão bem sucedida";
}
