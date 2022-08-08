<?php
    session_start();
    include('conexion.php');


$comentario= $_POST["comentario"];
$curdate= $_POST['curdate'];

if (empty($comentario)) {
 $comentario2= " ";
}
else{

    $comentario2= "$comentario"."$curdate";
}

$id= $_POST['id'];

$id2 = trim($id);

$var1= $_POST['nomina'];
$var2= $_POST['nombre'];
$varfecha= $_POST['fecha'];

$sql= "update clientes set comentario='$comentario2' where id='$id2' ";
  

if ($conn->query($sql) === TRUE) {

    header ("Location: nomina.php?var1=$var1&var2=$var2&varfecha=$varfecha" );
} else {
    echo "Error al ingresar comentario: " . $conn->error;
}

$conn->close();


?>
