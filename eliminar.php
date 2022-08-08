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
