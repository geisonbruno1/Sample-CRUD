<?php

$server = "localhost";
$user = "root";
$pass = "gbruno11";
$bd = "company";

if( $conn = mysqli_connect($server, $user, $pass, $bd)) {
    echo "Conectado";
} else {
    echo "Erro!";
}
?>