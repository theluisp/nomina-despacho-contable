<?php
include ('Metodos/conexion.php');
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
UPDATE clientes SET id='$id',Nombre='$nombre',zona='$zona',telefono=$telefono,curp='$curp',rfc='$rfc',clave_registro=$clave_registro,nombre_establecimiento='$nombre_establecimiento',fecha_pago='$fecha',honorarios=$honorarios,responsable='$responsable',direccion='$direccion',correo='$correo' WHERE id='$id' ";

if ($conn->query($sql2) === TRUE) {
 $var="El registro del cliente ha sido actualizado exitosamente";
echo "<script>alert('$var');window.history.back();
setTimeout('Redirect()', 4000);</script>";

} else {
     $var=" Error al actualizar cliente, porfavor verifique los campos nuevamente: " . $conn->error;
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


$sql3="
UPDATE clientes SET id='$id',Nombre='$nombre',zona='$zona',telefono=$telefono,curp='$curp',rfc='$rfc',contrasenia='$clave',clave_registro=$clave_registro,nombre_establecimiento='$nombre_establecimiento',fecha_pago='$fecha',honorarios=$honorarios,responsable='$responsable',direccion='$direccion',correo='$correo' WHERE id='$id' ";

if ( $conn3->query( $sql3 ) === TRUE ) {
    $var5 = 'El cliente ha sido registrado exitosamente';
    echo "<script>alert('$var5');window.history.back();
setTimeout('Redirect()', 4000);</script>";

} else {
    $var5 = ' Error al registrar cliente, este ya ha sido registrado anteriormente ' . $conn3->error;

    echo '<script language="javascript">alert("Error al registrar cliente, porfavor verifique los campos nuevamente: ");window.history.back();</script>';

}

$conn3->close();


?>
