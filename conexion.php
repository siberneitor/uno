<?php
$objetoMysqli = new mysqli(ipServidor, nomUsuario, contraseña, nombreBd);

define("DB_HOST","bkjqya0pu8yo586xvsnj-mysql.services.clever-cloud.com" ); 
define("DB_USER", "ud91kir94surbvdx"); 
define("DB_PASS", "6c1GWzWXQEGYIBoeTEB3"); 
define("DB_DATABASE", "bkjqya0pu8yo586xvsnj" ); 
$objetoMysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);

if ($objetoMysqli -> connect_errno){
    die("Error de conexión: " . $objetoMysqli->mysqli_connect_errno() . ", " . $objetoMysqli->mysqli_connect_error()); 
}
else{
    echo "La conexión tuvo éxito";
}

$objetoMysqli->mysqli_close();


?>
