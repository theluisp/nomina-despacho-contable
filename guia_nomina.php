<?php
session_start();
error_reporting(0);
$usuario = $_SESSION['user'];
if(!isset($usuario)){
    header('location:index.php');
}date_default_timezone_set('UTC');
?>
<style>
    #div1 {}

    #div1 table {
        width: 1100px;

    }

    .hide {
        display: none;
    }

    .red {
        color: Red;
    }

</style>

<head>
    <link rel="shortcut icon" href="img/icon3.png">
    <title>Faltantes por cobrar</title>
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
    <link rel="stylesheet" href="css/cssf.css">
</head>


<body>

    <div id="content" align="center" class="mx-auto" style="width: 100%;">
        <img align="left" alt="despacho contable enriquez y asociados" src="img/icon2.jpg" width="275" alt="http://enriquezyasocs.000webhostapp.com/"> <br><br><button onclick="javascript:window.print()" align="center" type="button" class="btn btn-primary btn-sm"><B>Imprimir O GENERAR PDF</B> <i class="fa fa-print" aria-hidden="true"></i></button>
        <h4><b>PERIODO DE COBRO <br><H5><?php $nombre= $_GET['var7']; $fecha= $_GET['varfecha'];
               $nombres= $_GET['var2'];
              
            echo $nombre."  ".$fecha." - ".$nombres; ?></H5></b></h4>

        <div id="div1">

            <table id="datos" class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <td><img src="https://img.icons8.com/color/28/000000/instagram-verification-badge.png"/></td>
                        <td scope="col"><b>Nombre</b></td>
                        <td scope="col"><b>Zona</b></td>
                        <td><b>Nombre del establecimiento</b></td>
                       

                        <td><b>Fecha pago</b></td>
                        <td><b>Honorarios</b></td>
                       
                        <td><b>Pago incompleto</b></td>

                    </tr>
                </thead>
                <?php 
                include('Metodos/conexion.php');
date_default_timezone_set('UTC');
                $curdate= date("Y")."-".date("m")."-".date("j");

                      $nombre= $_GET['var2'];
            $varfecha= $_GET['varfecha'];
                    $trimmed = trim($nombre);
            $trimmeds = trim($varfecha);
        
                         
                
                    $sql="SELECT * FROM clientes where responsable='$trimmed'  and fecha_pago='$trimmeds' and pago='NO' ORDER BY zona ASC  ";
                
                    $result=mysqli_query($conn,$sql);
                    while($mostrar=mysqli_fetch_array($result)){
                        
                    
                    ?>
                <tr>
<td><input type="checkbox"></td>
                    <td><?php echo $mostrar['Nombre']; ?></td>

                    <td><b><?php echo $mostrar['zona']; ?></b></td>

                    <td><?php echo $mostrar['nombre_establecimiento']; ?></td>
                   
                    <td><?php echo $mostrar['fecha_pago']; ?></td>

                    <td style=""><b><?php echo '$'. $mostrar['honorarios'];?> </b></td>

                    
                    <td>$_________</td>
                </tr>
                <?php }?>
                Fecha de expedición de la presente guia de cobro: <?php 
echo date("Y")."-".date("m")."-".date("j");;
?>
            </table>

        </div>
    </div>


</body>

<footer>
</footer>
