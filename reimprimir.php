<?php
session_start();
$usuario = $_SESSION['user'];
if(!isset($usuario)){
    header('location:index.php');
}
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
<script type="text/javascript">
    function mostrarPassword() {
        var cambio = document.getElementById("txtpassword");
        if (cambio.type == "password") {
            cambio.type = "text";
            $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');

        } else {
            cambio.type = "password";
            $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
        }
    }
    $(document).ready(function() {
        $('#ShowPassword').click(function() {
            $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
        });
    });

</script>

<body style="background-color:#EADFEA ">
    <div class="wraper d-flex align-items-stretch" style="color:#0489B1;">
        <nav id="sidebar">
            <div class="p-4" pt5>
                <h1><a href="index.php" class="logo">Enriquez y asociados</a></h1>
                <ul class="list-unstyled components mb-5">
                    <li>
                        <a href="select.php"> <i class="fa fa-credit-card" aria-hidden="true"></i> Sistema de nómina</a>

                    </li>

                    <li class="active">
                        <a href="#"> <i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Reimprimir récibo</a>
                    </li>
                    <li>
                        <a href="select.php"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</a>
                    </li>
                    <li>
                        <a href="Metodos/destruir.php"> <i class="fa fa-lock" aria-hidden="true"></i> Cerrar sesión</a>
                    </li>
                </ul><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><img align="center" alt="despacho contable enriquez y asociados" src="img/icon3.jpg" width="75" alt="http://enriquezyasocs.000webhostapp.com/"><br>

            </div>
        </nav>
        <div id="content" class="mx-auto" style="width: 60%;">
            <div class="row"><br><br><br><br>
                <div align="center">
                    <?php $bd= $_GET['var1'];
               
                $pago= $_GET['varz'];
                $var2= $_GET['var2'];
                echo '<h1>'. $var2."  " .$pago.'</h1>'; ?>


                    <div class="card-group">
                        <div class="card">
                            <img src='img/search.png' style='width: 50%;' align="center" class='card-img-top' alt='...'><?php '</a>'?>
                            <div class="card-body">
                                <form action="reimprimir2.php" method="post"><br>
                                    <h5 class="card-title"> Seleccione fecha de reimpresion</h5>
                                    <br> <select id="inputState" name="encagado" class="form-control form-control-xs" required>
                                        <option selected>Seleccione encargado</option>
                                    
                                        <option value="JAZMIN">JAZMIN</option>
                                        <option value="HILDA">HILDA</option>


                                    </select>
                                    <br> <select id="inputState" name="fecha" class="form-control form-control-xs" required>
                                        <option selected>Seleccione mes</option>
                                        <option value="01">Enero</option>
                                        <option value="02">Febrero</option>
                                        <option value="03">Marzo</option>
                                        <option value="04">Abril</option>
                                        <option value="05">Mayo</option>
                                        <option value="06">Junio</option>
                                        <option value="07">Julio</option>
                                        <option value="08">Agosto</option>
                                        <option value="09">Septiembre</option>
                                        <option value="10">Octubre</option>
                                        <option value="11">Noviembre</option>
                                        <option value="12">Diciembre</option>

                                    </select>
                                    <br> <input type=hidden value="15 DE MES" name="pago" /><button type='submit' class='btn btn-light'>Buscar</button>
                                </form>
                            </div>

                        </div>



                    </div><br>
                    <br>


                </div>
            </div>
        </div>
    </div>
</body>

<footer>
</footer>
