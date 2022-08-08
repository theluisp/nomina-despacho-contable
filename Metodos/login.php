<?php
    session_start();
$conn=
mysqli_connect("162.241.60.125","sigmatie_enriquez","22225166120Abc$$$$$$$$$$","sigmatie_enriquezyasocs");
    if (!$conn){
        die("Conexión fallida : " . mysqli_connect_errno());
    }

$usuario = $_POST["usuario"];
$contrasenia= $_POST["contrasenia"];

$query =mysqli_query($conn, "SELECT * FROM usuario WHERE usuario='".$usuario."' AND contrasenia ='".$contrasenia."' ");
        
$nr = mysqli_num_rows($query);      
if($nr==1){
    $_SESSION['user']=$usuario;
    if($usuario=='yola'){
     header('Location: ../select.php');
    }
    else{
         header('Location: ../Selectpersonal.php');
        
    }
}

elseif($nr==0){
    header('Location: ../index.php?var=<i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Usuario o contraseña incorrectos   '); 
}




?>
