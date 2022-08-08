<?php
include('conexion.php');
$bd= $_GET['var1'];
date_default_timezone_set('UTC');
$id= $_GET['var'];
$x=$_GET['varx'];
$nombre=$_GET['nombre'];
$zona=$_GET['zona'];
$honorarios=$_GET['hono'];
$responsable=$_GET['responsable'];
$comentario=$_GET['comentario'];
$nombre_establecimiento=$_GET['nombre_estable'];
$pago_especial=$_GET['pago_especial'];
$curdate= date("Y")."-".date("m")."-".date("j");

$sql="UPDATE clientes SET pago = 'SI' ,fecha_pagoactual='$curdate',honorarios=$pago_especial WHERE id='$id' ";

$sql2="INSERT INTO registros(id_cliente, nombre, zona, nombre_establecimiento, fecha_pago, honorarios, pago, comentario, responsable) VALUES('$id','$nombre','$zona','$nombre_establecimiento','$curdate',$pago_especial,'SI', '$comentario','$responsable' )";


if ($conn->query($sql) === TRUE && $conn->query($sql2)==TRUE ) {
 $var="El pago ha sido registrado exitosamente";
echo "<script>alert('$var');window.history.back();
setTimeout('Redirect()', 4000);</script>";

} else {
    echo " Error al actualizar pago, por favor intente de nuevo: " . $conn->error;
}

$conn->close();




?>
