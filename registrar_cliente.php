<?php
include ('conexion.php');
$id= $_POST['id'];
$nombre = $_POST['nombre'];
$zona = $_POST['zona'];
$telefono = $_POST['telefono'];
$curp = $_POST['curp'];
$rfc = $_POST['rfc'];
$clave = $_POST['usuario'];
$clave_registro = $_POST['clave_registro'];
$nombre_establecimiento = $_POST['nombre_establecimiento'];
$fecha = $_POST['fecha'];
$honorarios = $_POST['honorarios'];
$direccion = $_POST['direccion'];
$correo=$_POST['correo'];
$responsable = $_POST['responsable'];


$sql2="
INSERT INTO clientes (id,Nombre,zona,telefono,curp,rfc,contrasenia,clave_registro,nombre_establecimiento,fecha_pago,honorarios,responsable,direccion,correo
) VALUES ('$id', '$nombre','$zona',$telefono,'$curp','$rfc','$clave',$clave_registro,'$nombre_establecimiento','$fecha',$honorarios,'$responsable','$direccion',
'$correo')";

if ($conn->query($sql2) === TRUE) {
 $var="El cliente ha sido registrado exitosamente";
echo "<script>alert('$var');window.history.back();
setTimeout('Redirect()', 4000);</script>";

} else {
     $var=" Error al registrar cliente, este ya ha sido registrado anteriormente " . $conn->error;
   
  echo '<script language="javascript">alert("Error al registrar cliente, porfavor verifique los campos nuevamente: ");window.history.back();</script>';
    
}


$conn->close();



?>
