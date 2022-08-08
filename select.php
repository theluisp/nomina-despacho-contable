<?php
setlocale(LC_ALL,"es_ES");
session_start();
$usuario = $_SESSION['user'];
if(!isset($usuario)){
    header('location:index.php');
}	
setlocale(LC_ALL,"es_ES");
date_default_timezone_set('UTC');
?>
<style>
    body {

        background-color: #F7F6F7;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: 3000px 1000px;
    }

    #fuc {
        padding: 10px;
        margin: 10px;

        float: left;
        width: 250px;
    }

</style>
<script>
    function confirmar() {
        if (confirm('Confirmar'))
            return true;
        else
            return false;
    }

</script>

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
                        <a href="#"> <i class="fa fa-chevron-circle-right" aria-hidden="true"></i> <b>Panel principal</b></a>
                    </li>

                    <li>
                        <a href="Clientes_index.php"> <i class="fa fa-database" aria-hidden="true"></i> Base de datos clientes</a>

                    </li>
                    <li>
                        <a href="reimprimir.php"><i class='fa fa-print' aria-hidden='true'></i> Reimprimir récibo</a>

                    </li>
                    <li>
                        <a href="Metodos/destruir.php"> <i class="fa fa-lock" aria-hidden="true"></i> Cerrar sesión</a>
                    </li>
                </ul><br><br><br><br><br><br><br><br><br><br><br><br><br><br><img align="center" alt="despacho contable enriquez y asociados" src="img/icon3.jpg" width="75" alt="http://enriquezyasocs.000webhostapp.com/"><br><br><br>

            </div>
        </nav>
        <div id="content" class="mx-auto" style="width: 60%;">

            <div class="row">
                <div align="center">

                    <div class="fuc" id="fuc">
                        <a href="Metodos/reinicio15.php" onclick='return confirmar()'> <button class="btn btn" style=" background-color: #C4C4C5; color:black;">Nuevos pagos <b>15 de mes</b></button></a>
                        <a href="Metodos/reinicio1.php" onclick='return confirmar()'><button class="btn btn" style=" background-color: #C4C4C5; color:black;">Nuevos pagos <b>1ERO de mes</b></button></a>
                        <a href="Metodos/reiniciob.php" onclick='return confirmar()'> <button class="btn btn" style=" background-color: #C4C4C5; color:black;">*Nuevos pagos <b>BIMESTRALES E IRREGULARES</b></button></a>

                    </div>

                    <h6 style="color:red"> <?php  
                        $curdate= date("d")."-".date("m")."-".date("Y");
                      
                        
                        
                        if(date("j")=="26"||date("j")=="27" ||date("j")=="28"||date("j")=="29"){
                            $echo2= "SE DEBE DE REINICIAR COBROS 1ERO DE MES";
                        }
                        elseif(date("j")=="12" ||date("j")=="13"||date("j")=="14"){
                        $echo2= '<img src="https://img.icons8.com/color/48/000000/warning-shield.png"/>
<br> REINICIAR COBROS 15 DE MES';    
                        }
                       
                        
                        
                        
                        else{
                            $echo2= "No hay información para mostrar";
                        }
                         ?></h6>
                    <div>

                        <div align="right">
                            <div class="card text-white  mb-3" style="max-width: 18rem; background-color:#418CC3 ;">
                                <div class="card-header"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
                                <div class="card-body">

                                    <h5 class="card-text" style="color:white">*Se sugiere aplicar reinicio de bimestrales e irregulares despues de acabar periodo de cobro</h5>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div align="right">
                        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                            <div class="card-header"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                            <div class="card-body">

                                <h5 class="card-text" style="color:white"><?php     echo $echo2;?></h5>
                            </div>
                        </div>
                    </div>

                    <br><br>
                    <div class="card-group">
                        <div class="card " style="background-color: rgba(245, 245, 245, 0.4); ">
                            <a href="fecha.php?var1=Depositos&var2=DEPOSITO"><img src="img/depga.png" style="width: 60%;" alt="..."></a>
                            <div class="card-body">
                                <a style="color:#418CC3 ;" href="fecha.php?var1=Depositos&var2=DEPOSITO">
                                    <h5 class="card-title">Déposito</h5>
                                </a>

                            </div>

                        </div>
                        <div class="card" style="background-color: rgba(245, 245, 245, 0.4); ">
                            <a href="fecha.php?var1=Nómina Jazmin&var2=JAZMIN"><img src="img/woman.png" style="width: 60%;" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <a style="color:#418CC3 ;" href="fecha.php?var1=Nómina Jazmin&var2=JAZMIN">
                                    <h5 class="card-title">Jázmin</h5>
                                </a>

                            </div>

                        </div>
                        <div class="card" style="background-color: rgba(245, 245, 245, 0.4); ">
                            <a style="color:#418CC3 ;" href="fecha.php?var1=Nómina Hilda&var2=HILDA"><img src="img/woman.png" style="width: 60%;" class="card-img-top" alt="..."></a>
                            <div class="card-body"><a style="color:#418CC3 ;" href="fecha.php?var1=Nómina Hilda&var2=HILDA">
                                    <h5 class="card-title">Hilda</h5>
                                </a>
                            </div>
                        </div><div class="card" style="background-color: rgba(245, 245, 245, 0.4); ">
                            <a style="color:#418CC3 ;" href="fecha.php?var1=Nómina Ximena&var2=Ximena"><img src="img/woman.png" style="width: 60%;" class="card-img-top" alt="..."></a>
                            <div class="card-body"><a style="color:#418CC3 ;" href="fecha.php?var1=Nómina Ximena&var2=Ximena">
                                    <h5 class="card-title">Ximena</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<footer>
</footer>
