<?php

$servername= 'localhost';
$usuario= 'root';
$password = 'mysql';
$database = 'enriquezyasocs';
$conn = new mysqli($servername,$usuario,$password,$database);

if($conn->connect_error){
    die("conexion erronea".$conn->connect_error);
}
//echo"conexion exitosa"
?>
