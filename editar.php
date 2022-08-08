<?php
include('Metodos/conexion.php');
session_start();
$usuario = $_SESSION['user'];
if(!isset($usuario)){
    header('location:index.php');
}
$id=$_GET['var'];
  $sql="SELECT * FROM clientes where id='$id'";
 $result=mysqli_query($conn,$sql);
                    while($mostrar=mysqli_fetch_array($result)){
                   
?>

<head>
    <link rel="shortcut icon" href="img/icon3.jpg">
    <title>Nómina Enriquez y Asociados</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">

    <!-- Estilos para barra lateral  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--Estilos para nav bar superior-->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" href="css/zabctyle.css">
</head>
<style>
    .ima {
        position: absolute;
        top: -50px;
        left: 500px;

    }

</style>
<style>
    body {

        background-color: #EADFEA;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: 3900px 1900px;
    }
input, textarea, select{
  background: rgba(255, 255, 255, 0.4);
        border: none;
        position: relative;
        display: block;

        width: 300px;
        height: 50px;

        margin: 0 auto;
        padding: 10px;
        color: BLACK;
        -webkit-box-shadow: 0 2px 10px 1px rgba(0, 0, 0, 0.5);
        box-shadow: 0 2px 10px 1px rgba(0, 0, 0, 0.5);
            
        border-radius: 99px 102px 102px 102px;
-moz-border-radius: 99px 102px 102px 102px;
-webkit-border-radius: 99px 102px 102px 102px;
}
</style>

<body>
    <div class="wraper d-flex align-items-stretch" style="color:#0489B1;">
        <nav id="sidebar">
            <div class="p-4" pt5>
                <h1><a href="index.html" class="logo">Enriquez y asociados</a></h1>
                <ul class="list-unstyled components mb-5">
                    <li>
                        <a href="select.php"> <i class="fa fa-credit-card" aria-hidden="true"></i> Nómina</a>

                    </li>

                    <li class="active">
                        <a href="#"> <i class="fa fa-chevron-circle-right" aria-hidden="true"></i> <b>Editar cliente</b></a>
                    </li>
                    <li>
                        <a href="javascript:history.back(-1);"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</a>

                    </li>
                    <li>
                        <a href="Metodos/destruir.php"> <i class="fa fa-lock" aria-hidden="true"></i> Cerrar sesión</a>
                    </li>
                </ul><br><br><br><br><br><br><br><br><br><br><br>
                <div class="mb-5">
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                </div>
            </div>
        </nav>

        <div class="ima" id="ima">
            <form action="editar2.php" align="center" method="post">
                <div class="form-group form-control-xs">
                    <div id="content" style="width: 300px;">
                        <br><br><br>
                        <center>
                            <h1 ALIGN="center" class=" text-center my-4">Editar datos del cliente: <img src="img/profe.png" style="width: 100%;" />
                            </h1><?php echo '<h3>'. $mostrar['Nombre'].'</h3>'; ?>
                        </center>
                        <br>
                        <label>#</label>
                        <br><input type="text" style="text-transform:uppercase; WIDTH: 120px; margin: 0;"  id="id" placeholder="*ID " value="<?php echo $mostrar['id']; ?>" name="id" maxlength="6"  required /><br>
                        <label>Nombre</label>
                        <input type="text" style="text-transform:uppercase; WIDTH: 400px; margin: 0;"  id="nombre" placeholder="*Nombre completo" value="<?php echo $mostrar['Nombre']; ?>" name="nombre" maxlength="100" style="WIDTH: 400px; " required />
                        <br>
                        <label>Zona</label>
                        <input type="text" style="text-transform:uppercase; WIDTH: 400px; margin: 0;" id="id" placeholder="*Zona" name="zona" value="<?php echo $mostrar['zona']; ?>" maxlength="20" style="WIDTH: 400px; " />

                        <br> <label>Telefono</label><input type="number"style="text-transform:uppercase; WIDTH: 400px; margin: 0;"  id="telefono" placeholder="TELEFONO (10 digitos)" value="<?php echo $mostrar['telefono']; ?>" name="telefono" MIN="0" maxlength="10" style="WIDTH: 400px; " />
                        <br>
                        <label>CURP</label> <input type="text" style="text-transform:uppercase; WIDTH: 400px; margin: 0;" id="curp" placeholder="*Curp" name="curp" maxlength="18" style="WIDTH: 400px; " value="<?php echo $mostrar['curp']; ?>" />
                        <br>
                        <label>RFC</label> <input type="text" style="text-transform:uppercase; WIDTH: 400px; margin: 0;"id="rfc" placeholder="*Rfc" value="<?php echo $mostrar['rfc']; ?>" name="rfc" maxlength="13" style="WIDTH: 400px; " />
                        <br>
                        <label>Clave CIEC</label> <input type="text" style="text-transform:uppercase; WIDTH: 400px; margin: 0;" id="contrasenia" placeholder="*Clave ciec" value="<?php echo $mostrar['contrasenia']; ?>" name="usuario" maxlength="10" style="WIDTH: 400px; " />
                        <br>
                        <label>Clave</label><input type="number" style="text-transform:uppercase; WIDTH: 400px; margin: 0;" id="clave_registro" placeholder="Clave de registro (OPCIONAL)" value="<?php echo $mostrar['clave_registro']; ?>" name="clave_registro" maxlength="10" style="WIDTH: 400px; " />
                        <br>
                        <label>Nombre del establecimiento</label><input type="text" style="text-transform:uppercase; WIDTH: 400px; margin: 0;"id="nombre_establecimiento" placeholder="Nombre deL establecimiento" value="<?php echo $mostrar['nombre_establecimiento']; ?>" name="nombre_establecimiento" maxlength="50" style="WIDTH: 400px; " />
                        <br><br>
                        <select id="inputState" name="fecha" style="WIDTH: 400px; margin: 0;" >


                            <option value="<?php echo $mostrar['fecha_pago']; ?>"> <?php echo $mostrar['fecha_pago']; ?></option>
                            <option value="1ERO DEL MES">1ERO DEL MES</option>
                            <option value="15 DE MES">15 DE MES</option>
                            <option value="1RO. BIMESTRAL">BIMESTRAL</option>
                            <option value="IRREGULAR">IRREGULAR</option>

                        </select>
                        <br><label>Honorarios</label><input type="number" value="<?php echo $mostrar['honorarios']; ?>" style="text-transform:uppercase; WIDTH: 400px; margin: 0;" id="honorarios" placeholder="Honorarios" name="honorarios" MIN="0" maxlength="10" style="WIDTH: 400px; " />
                        <br>

                        <label>Responsable</label> <select id="inputState" name="responsable" style="WIDTH: 400px; margin: 0;" >


                            <option value="<?php echo $mostrar['responsable']; ?>"> <?php echo $mostrar['responsable']; ?></option>
                            <option value="JAZMIN">JAZMIN</option>
                            <option value="HILDA">HILDA</option>
                            <option value="DEPOSITO">DEPOSITO</option>


                        </select>
                        <br><label>Dirección</label><input value="<?php echo $mostrar['direccion']; ?>" style="text-transform:uppercase; WIDTH: 400px; margin: 0;" type="text"  id="direccion" placeholder="Dirección" name="direccion" maxlength="100" style="WIDTH: 400px; " />
                        <br><label>Email</label><input style="text-transform:uppercase; WIDTH: 400px; margin: 0;"type="email"  id="correo" value="<?php echo $mostrar['correo']; ?>" placeholder="Correo (opcional)" name="correo" maxlength="100" style="WIDTH: 400px; " />

                    </div><br><br>
                    <button style="color: #003366; background-color: #99CCFF" type="submit" class="btn btn-light" align="center"><b>Guardar cambios</b></button>
                    <br><br>

                </div>
            </form>
            <small align="center" style="color: red"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo  $_GET['vard'];   ?> </small>


        </div>

    </div>
</body>
<?php } ?>
<footer>
</footer>
