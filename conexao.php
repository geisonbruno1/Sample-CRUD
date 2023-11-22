<?php

$server = "localhost";
$user = "root";
$pass = "gbruno11";
$bd = "company";

if( $conn = mysqli_connect($server, $user, $pass, $bd)) {
    echo "";
} else {
    echo "Erro!";
}

    function mensagem($texto, $tipo){
        echo "<div class='alert alert-primary' role='alert'>
                 $texto
             </div>";
    }

?>