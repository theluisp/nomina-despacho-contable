<?php
include ( 'conexion.php' );
$id = $_POST['id'];
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
$correo = $_POST['correo'];
$responsable = $_POST['responsable'];

$sql2 = "INSERT INTO clientes (id,Nombre,zona,telefono,curp,rfc,clave_registro,nombre_establecimiento,fecha_pago,honorarios,responsable,direccion,correo,pago
) VALUES ('$id', '$nombre','$zona',$telefono,'$curp','$rfc',$clave_registro,'$nombre_establecimiento','$fecha',$honorarios,'$responsable','$direccion',
'$correo','NO')";

if ( $conn->query( $sql2 ) === TRUE ) {
    $var = 'El cliente ha sido registrado exitosamente';
    echo "<script>alert('$var');window.history.back();
setTimeout('Redirect()', 4000);</script>";

} else {
        echo '<script language="javascript">alert("Error al registrar cliente en server, ya hay un cliente registrado con esos datos ");window.history.back();</script>';

}

$conn->close();

?>

<?php
$servername= 'localhost';
$usuario= 'root';
$password = 'mysql';
$database = 'enriquezyasocs';
$conn2 = new mysqli($servername,$usuario,$password,$database);


$sql3 = "INSERT INTO clientes (id,Nombre,zona,telefono,curp,rfc,contrasenia,clave_registro,nombre_establecimiento,fecha_pago,honorarios,responsable,direccion,correo,pago
) VALUES ('$id', '$nombre','$zona',$telefono,'$curp','$rfc','$clave',$clave_registro,'$nombre_establecimiento','$fecha',$honorarios,'$responsable','$direccion',
'$correo','NO')";

if ( $conn2->query( $sql3 ) === TRUE ) {
    $var4 = 'El cliente ha sido registrado exitosamente';
    echo "<script>alert('$var');window.history.back();
setTimeout('Redirect()', 4000);</script>";

} else {
    $var4 = ' Error al registrar cliente, este ya ha sido registrado anteriormente ' . $conn2->error;

    echo '<script language="javascript">alert("Error al registrar cliente, ya hay un cliente registrado con esos datos ");window.history.back();</script>';

}

$conn2->close();


?>
