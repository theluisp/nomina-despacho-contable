<?php
session_start();
$usuario = $_SESSION['user'];
if(!isset($usuario)){
    header('location:index.php');
}
?>

<head>
    <link rel="shortcut icon" href="img/icon3.png">
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
        background-size: 3500px 1500px;
    }
    input, textarea, select{
  background: rgba(255, 255, 255, 0.4);
        border: none;
        position: relative;
        display: block;

        width: 300px;
        height: 50px;

        margin: 0 auto;
        
       
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
                        <a href="#"> <i class="fa fa-chevron-circle-right" aria-hidden="true"></i> <b>Registrar nuevo cliente</b></a>
                    </li>
                    <li>
                        <a href="Clientes_index.php"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</a>

                    </li>
                    <li>
                        <a href="destruir.php"> <i class="fa fa-lock" aria-hidden="true"></i> Cerrar sesión</a>
                    </li>
                </ul><br><br><br><br><br><br><br><br><br><br><br>
                <div class="mb-5">
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                </div>
            </div>
        </nav>


        <div class="ima" id="ima">
            <form action="Metodos/registrar_cliente.php" align="center" method="post">
                <div >
                    <div id="contenSDASt"  style="width: 300px;">
                        <br><br><br>
                        <center>
                            <h1 ALIGN="center">Nuevo cliente Enriquez y asociados <img src="img/profe.png" style="width: 100%;" />
                            </h1>
                        </center>

                        <small>* Todos los campos obligatorios (si no se conoce el dato favor de poner un cero '0')</small><br>
                        <br><input type="text" style="text-transform:uppercase; WIDTH: 100px; margin: 0;"  id="id" placeholder="#Cliente" name="id" maxlength="6" required /><br>
                        
                        <input type="text" style="text-transform:uppercase; WIDTH: 400px; margin: 0;"  id="nombre" placeholder="*Nombre completo" name="nombre" maxlength="100"   required />
                        <br>

                        <input type="text" style="text-transform:uppercase;WIDTH: 400px; margin: 0;"  id="id" placeholder="Zona" name="zona" maxlength="20" required />

                        <br><input type="number" style="text-transform:uppercase;WIDTH: 400px; margin: 0;" id="telefono" placeholder="TELEFONO (10 digitos)" name="telefono" MIN="0" maxlength="10" required/>
                        <br>
                        <input type="text" style="text-transform:uppercase;WIDTH: 400px; margin: 0;" id="curp" placeholder="*Curp" name="curp" maxlength="18" required/>
                        <br>
                        <input type="text" style="text-transform:uppercase;WIDTH: 400px; margin: 0;" id="rfc" placeholder="Rfc" name="rfc" maxlength="13" required />
                        <br>
                        <input type="text"  style="WIDTH: 400px; margin: 0;"  id="contrasenia" placeholder="CLAVE CIEC" name="usuario" maxlength="10" required />
                        <br>
                        <input type="number" style="text-transform:uppercase;WIDTH: 400px; margin: 0;" id="clave_registro" placeholder="Clave de registro" name="clave_registro" maxlength="10" required />
                        <br>
                        <input type="text" style="text-transform:uppercase;WIDTH: 400px; margin: 0;"  id="nombre_establecimiento" placeholder="Nombre y giro" name="nombre_establecimiento" maxlength="50" required />
                        <br> <select id="inputState" name="fecha" style="WIDTH: 400px; margin: 0;" required>
                            <option selected>* FECHA DE PAGO</option>
                            <option value="1ERO DEL MES">1ERO DEL MES</option>
                            <option value="15 DE MES">15 DE MES</option>
                            <option value="1RO. BIMESTRAL">BIMESTRAL</option>
                            <option value="IRREGULAR">IRREGULAR</option>

                        </select>
                        <br><input type="number" style="text-transform:uppercase; WIDTH: 160px;margin: 0; "  id="honorarios" placeholder="$ Honorarios" name="honorarios" MIN="0" maxlength="10" required />
                        <br>

                        <select id="inputState" name="responsable" style="WIDTH: 400px; margin: 0;"  required>
                            <option selected>ENCARGAD@</option>
                            <option value="HILDA">HILDA</option>
                            <option value="JAZMIN">JAZ</option>
                            <option value="DEPOSITO">DÉPOSITO</option>

                        </select>

                        <br><input style="text-transform:uppercase;WIDTH: 400px; margin: 0;" type="text" id="direccion" placeholder="Dirección" name="direccion" maxlength="100" required />
                        <br><input style="text-transform:uppercase;WIDTH: 400px; margin: 0;" type="email"  id="correo" placeholder="Correo" name="correo" maxlength="100" required />

                    </div><br><br>
                    <button style="color: #003366; background-color: #99CCFF" type="submit" class="btn btn-light" align="center"><b>GUARDAR</b></button>
                    <a href="Clientes_index.php" style="color:red;"><b>Cancelar</b></a>
                    <br><br>

                </div>
                <small align="center" style="color: red"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo  $_GET['vard'];   ?> </small>

            </form>
        </div>

    </div>
</body>

<footer>
</footer>
