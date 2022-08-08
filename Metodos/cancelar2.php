<?php
include('conexion.php');
date_default_timezone_set('UTC');
$bd= $_GET['var1'];
$id= $_GET['var'];
$x=$_GET['varx'];
$nombre=$_GET['nombre'];
$zona=$_GET['zona'];
$honorarios=$_GET['hono'];
$responsable=$_GET['responsable'];
$comentario=$_GET['comentario'];
$nombre_establecimiento=$_GET['nombre_estable'];
$curdate= date("Y")."-".date("m")."-".date("j");

$sql="UPDATE clientes SET pago = 'NO' ,fecha_pagoactual='1999-01-01' WHERE id='$id' ";

$sql2="DELETE FROM registros WHERE id='$id' AND fecha_pago='$curdate' ";


if ($conn->query($sql) === TRUE && $conn->query($sql2)==TRUE ) {
 $var="El pago ha sido eliminado exitosamente";
echo "<script>alert('$var');window.history.back();
setTimeout('Redirect()', 4000);</script>";

} else {
    echo " Error al actualizar pago: " . $conn->error;
}

$conn->close();




?>
