<?php
session_start();
$usuario = $_SESSION['user'];
if(!isset($usuario)){
    header('location:index.php');
}
?>
<style>
    #div1 {
        overflow: scroll;
        height: 600px;
        width: 1200px;
    }

    #div1 table {
        width: 500px;

    }

</style>
<style>
    body {

        background-color: #EADFEA;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: 3500px 1500px;
    }

</style>

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
     <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" href="css/zabctyle.css">
</head>



<body style="background-color:#EADFEA ">
    <div class="wraper d-flex align-items-stretch" style="color:#0489B1;">
        <nav id="sidebar">
            <div class="p-4" pt5>
                <h1><a href="index.html" class="logo">Enriquez y asociados</a></h1>
                <ul class="list-unstyled components mb-5">
                    <li>
                        <a href="select.php"> <i class="fa fa-credit-card" aria-hidden="true"></i> Nómina</a>

                    </li>

                    <li class="active">
                        <a href="#"> <i class="fa fa-chevron-circle-right" aria-hidden="true"></i> <b>Base de datos clientes</b></a>
                    </li>

                    <li>
                        <a href="alta.php"> <i class="fa fa-handshake-o" aria-hidden="true"></i> Nuevo cliente</a>
                    </li>

  <li>
                        <a href="crud.php"> <i class="fa fa-pencil-square" aria-hidden="true"></i> Editar/eliminar</a>
                    </li>

                    <li>
                        <a href="select.php"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</a>

                    </li>
                   
                    <li>
                        <a href="Metodos/destruir.php"> <i class="fa fa-lock" aria-hidden="true"></i> Cerrar sesión</a>
                    </li>
                </ul><br><br><br><br><br><br><br><br><br><br><br><img align="center" alt="despacho contable enriquez y asociados" src="img/icon3.jpg" width="75" alt="http://enriquezyasocs.000webhostapp.com/"><br><br><br>
                <div class="mb-5">
                    <form action="#" class="colorlib-subscribe-form">

                    </form>
                </div>
            </div>
        </nav>
        <div id="content" class="mx-auto" style="width: 60%;">
            <br><br>
            <div class="row">
                <h1>Base de datos Enriquez y Asociados<img src="https://img.icons8.com/ultraviolet/56/000000/data-configuration.png" /></h1><br><br><br><br><br><br>
                <br><br><br><br>
                <div align="center">
                    <div class="card-group">
   <div class="card" style="background-color: rgba(245, 245, 245, 0.4); "><a href="Clientes.php?var1=BASE DE DATOS GENERAL&VAR2=f">
                                <img src="img/icon3.png" style="width: 50%;" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">GENERAL</h5>

                                </div>
                            </a>
                        </div>
                        <div class="card" style="background-color: rgba(245, 245, 245, 0.4); "><a href="Clientes.php?var1=RÉGIMEN PROFESIONAL Y ASEGURADOS&VAR2=A">
                                <img src="img/profe.png" style="width: 90%;" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">REGIMEN PROFESIONAL Y ASEGURADOS</h5>

                                </div>
                            </a>
                        </div>

                        <div class="card" style="background-color: rgba(245, 245, 245, 0.4); ">
                            <a href="Clientes.php?var1=ARRENDAMIENTO&VAR2=AAA">
                                <img src="img/arrenda2.png" style="width: 60%;" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">ARRENDAMIENTO</h5>

                                </div>
                            </a>
                        </div>

                        <div class="card" style="background-color: rgba(245, 245, 245, 0.4); "><a href="Clientes.php?var1=clientes& VAR2= &var3=RIFS">
                                <img src="img/contri.png" style="width: 100%;" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">RIFS</h5>

                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</body>

<footer>
</footer>
