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
    body {

        background-color: #F7F6F7;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: 3500px 1500px;
    }

</style>

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
                        <a href="#"> <i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Seleccionar fecha</a>
                    </li>

                   
                    <li>
                        <a href="select.php"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</a>

                    </li>
                    <li>
                        <a href="Metodos/destruir.php"> <i class="fa fa-lock" aria-hidden="true"></i> Cerrar sesión</a>
                    </li>
                </ul><br><br><br><br><br><br><br><br><br><br><br><br><br><br><img align="center" alt="despacho contable enriquez y asociados" src="img/icon3.jpg" width="75" alt="http://enriquezyasocs.000webhostapp.com/"><br>

            </div>
        </nav>
        <div id="content" class="mx-auto" style="width: 60%;">
            <div class="row"><br><br><br><br>
                <div align="center">
                    <?php $bd= $_GET['var1'];
               
                $pago= $_GET['varz'];
                $var2= $_GET['var2'];
                echo '<h1>'. $var2."  " .$pago.'</h1>'; ?>
                    <h3>Seleccione fecha a cobrar</h3><br><br>
                    <div class="card-group">
                        <div class="card">
                            <?php echo      "<a href='nomina.php?var1=Nómina&var2=$var2&varfecha=15 DE MES'>"; ?><img src='img/calendar.png' style='width: 100%;' class='card-img-top' alt='...'><?php '</a>'?>
                            <div class="card-body">

                                <h5 class="card-title">15 DE CADA MES</h5>
                                <?php echo  "<a target='_blank' href='guia_nomina.php?var1=Nómina&var2=$var2&varfecha=15 DE MES'>
                               <br> <button type='button' class='btn btn' style='background-color: #C4C4C5; color:black;'> <b>FALTANTES</b>  <img src='https://img.icons8.com/cotton/44/000000/checklist--v1.png'/></button></a>";?>

                            </div>

                        </div>
                        <div class="card">
                            <?php echo      "<a href='nomina.php?var1=Nómina&var2=$var2&varfecha=1ERO DEL MES '>"; ?><img src='img/calendar.png' style='width: 100%;' class='card-img-top' alt='...'><?php '</a>'?>
                            <div class="card-body">

                                <h5 class="card-title">1ERO CADA MES</h5>

                                <?php echo  "<a target='_blank' href='guia_nomina.php?var1=Nómina&var2=$var2&varfecha=1ERO DEL MES'>
                                <br><button type='button' class='btn btn' style='background-color: #C4C4C5; color:black;'><b>FALTANTES  </b><img src='https://img.icons8.com/cotton/44/000000/checklist--v1.png'/></button></a>";?>

                            </div>

                        </div>
                        <div class="card">
                            <?php echo      "<a href='nomina.php?var1=Nómina&var2=$var2&varfecha=1RO. BIMESTRAL'>"; ?><img src='img/calendar.png' style='width: 100%;' class='card-img-top' alt='...'><?php '</a>'?>
                            <div class="card-body">
                                <h5 class="card-title">BIMESTRALES E IRREGULARES</h5>
                                <br>
                                <?php echo  "<a target='_blank' href='guia_nomina.php?var1=Nómina&var2=$var2&varfecha=1RO. BIMESTRAL'>
                                <button type='button' class='btn btn' style='background-color: #C4C4C5; color:black;' > <b>FALTANTES </b><img src='https://img.icons8.com/cotton/44/000000/checklist--v1.png'/></button></a>";?>

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
