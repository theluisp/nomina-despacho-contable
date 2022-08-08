<?php
include ('conexion.php');
$id= $_GET['var'];


$sql2="DELETE FROM clientes WHERE id='$id' ";

if ($conn->query($sql2) === TRUE) {
 $var="El registro ha sido eliminado correctamente";
echo "<script>alert('$var');window.history.back();
setTimeout('Redirect()', 4000);</script>";

} else {
     $var=" Error al eliminar cliente, contacte al administrador: " . $conn->error;
    echo "<script>alert('$var');window.history.back();
setTimeout('Redirect()', 4000);</script>";
    
    
}

$conn->close();



?>
<?php
$servername= 'localhost';
$usuario= 'root';
$password = 'mysql';
$database = 'enriquezyasocs';
$conn3 = new mysqli($servername,$usuario,$password,$database);

$id= $_GET['var'];


$sql3="DELETE FROM clientes WHERE id='$id' ";

if ($conn3->query($sql3) === TRUE) {
 $var2="El registro ha sido eliminado correctamente";
echo "<script>alert('$var2');window.history.back();
setTimeout('Redirect()', 4000);</script>";

} else {
     $var2=" Error al eliminar cliente, contacte al administrador: " . $conn3->error;
    echo "<script>alert('$var2');window.history.back();
setTimeout('Redirect()', 4000);</script>";
    
    
}

$conn3->close();


?>
