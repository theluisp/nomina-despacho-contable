<?php
//update clientes SET pago='NO' where fecha_pago='1ERO DEL MES'"

include('conexion.php');

$sql="update clientes SET pago='NO', pago_parcial= honorarios  where fecha_pago='15 DE MES' ";



if ($conn->query($sql) === TRUE) {
 $var="La nómina ha sido vaciada exitosamente";
echo "<script>alert('$var');window.history.back();
setTimeout('Redirect()', 4000);</script>";

} else {
    echo " Error al actualizar nómina, porfavor intente de nuevo: " . $conn->error;
}

$conn->close();






?>