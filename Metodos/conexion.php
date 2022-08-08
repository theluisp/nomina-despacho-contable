<?php
/*
$servername= 'localhost';
$usuario= 'root';
$password = 'mysql';
$database = 'enriquezyasocs';
$conn = new mysqli($servername,$usuario,$password,$database);

if($conn->connect_error){
    die("conexion erronea".$conn->connect_error);
}
//echo"conexion exitosa"

*/


$conn  = mysqli_connect("162.241.60.249","servi344_root","22251662","servi344_enriquezyasocs");


if($conn->connect_error){
    die("conexion erronea".$conn->connect_error);
}
//echo"conexion exitosa"

?>
