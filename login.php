<?php
    session_start();
$conn  = mysqli_connect("162.241.60.249","servi344_root","mysql123","servi344_enriquezyasocs");
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
     header('Location: select.php');
    }
    else{
         header('Location: Select.php');
        
    }
}

elseif($nr==0){
    header('Location: index.php?var=Usuario o contraseña incorrectos <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>  '); 
}




?>
