<?php error_reporting(0); ?><?php

session_start();
$usuario = $_SESSION['user'];
if(!isset($usuario)){
    header('location:index.php');
}
setlocale(LC_ALL,"es_ES");
date_default_timezone_set('UTC');
?>
<style>
    .Usuario {
        position: absolute;
        top: 35px;
        left: 200px;

    }

</style>
<style>
    body {

        background-color: #cccccc;
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
                        <a href="#"> <i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Panel principal</a>
                    </li>


                    <li>
                        <a href="destruir.php"> <i class="fa fa-lock" aria-hidden="true"></i> Cerrar sesión</a>
                    </li>
                </ul><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><img align="center" alt="despacho contable enriquez y asociados" src="img/icon3.jpg" width="75" alt="http://enriquezyasocs.000webhostapp.com/"><br>

            </div>
        </nav>
        <div id="content" class="mx-auto" style="width: 60%;">
            <br><br><br><br>
            <div id="Usuario" class="Usuario">

                <h4><i class="fa fa-user-circle" aria-hidden="true"></i>  <b>Bienvenid@
                    <?php echo $usuario;?>  </b>

<a href="destruir.php" style="  text-decoration: underline;"><small style="color:#0489B1;" ><br><br><b>Cerrar sesión</b><img src="https://img.icons8.com/offices/18/000000/sort-down.png"/><br></small></a></h4>

           <br> </div><br><br><br><br>
            <div class="row"><br>
                <div align="center">

                   
                    <div>

                        <div align="right">
                            <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                                <div class="card-header" style='background-color:#418CC3; color:white; '><i class="fa fa-info-circle" aria-hidden="true"></i></div>
                                <div class="card-body" style='background-color:#418CC3; color:white; '>

                                    <h5 class="card-text" style='background-color:#418CC3; color:white; '>Seleccione la fecha de cobro</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $bd= $_GET['var1'];
               
                $pago= $_GET['varz'];
                $var2= $_GET['var2'];
                echo '<h1>'. $var2."  " .$pago.'</h1>'; ?><br>

                    <div class="card-group">
                        <div class="card">
                            <?php echo      "<a href='nominapersonal.php?var1=Nómina&var2=$var2&varfecha=15 DE MES'>"; ?><img src='img/calendar.png' style='width: 100%;' class='card-img-top' alt='...'><?php '</a>'?>
                            <div class="card-body">

                                <h5 class="card-title" style="color:#0489B1;" >15 DE CADA MES</h5>

                                <br> <?php echo  "<a target='_blank' href='faltantes_movil.php?var1=Nómina&var2=$usuario&varfecha=15 DE MES'>
                                <button class='btn btn-#418CC3' type='submit'  style='background-color:#418CC3; color:white; '> Faltantes <img src='https://img.icons8.com/cotton/44/000000/checklist--v1.png'/></button></a>";?>

                            </div>

                        </div>
                        <div class="card">
                            <?php echo      "<a href='nominapersonal.php?var1=Nómina&var2=$usuario&varfecha=1ERO DEL MES '>"; ?><img src='img/calendar.png' style='width: 100%;' class='card-img-top' alt='...'><?php '</a>'?>
                            <div class="card-body">

                                <h5 class="card-title" style="color:#0489B1;">1ERO CADA MES</h5>

                                <br> <?php echo  "<a target='_blank' href='faltantes_movil.php?var1=Nómina&var2=$usuario&varfecha=1ERO DEL MES'>
                                <button class='btn btn-#418CC3' type='submit'  style='background-color:#418CC3; color:white; '>Faltantes <img src='https://img.icons8.com/cotton/44/000000/checklist--v1.png'/></button></a>";?>

                            </div>

                        </div>
                        <div class="card">
                            <?php echo      "<a href='nominapersonal.php?var1=Nómina&var2=$usuario&varfecha=1RO. BIMESTRAL'>"; ?><img src='img/calendar.png' style='width: 100%;' class='card-img-top' alt='...'><?php '</a>'?>
                            <div class="card-body">
                                <h5 class="card-title" style="color:#0489B1;">BIMESTRALES E IRREGULARES</h5>
                                <br>
                                <?php echo  "<a target='_blank' href='faltantes_movil.php?var1=Nómina&var2=$usuario&varfecha=1RO. BIMESTRAL'>
                                <button class='btn btn-#418CC3' type='submit'  style='background-color:#418CC3; color:white; '>Faltantes <img src='https://img.icons8.com/cotton/44/000000/checklist--v1.png'/></button></a>";?>

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
