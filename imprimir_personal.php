<?php
error_reporting(0); 
session_start();
$usuario = $_SESSION['user'];
if(!isset($usuario)){
    header('location:index.php');
}
?>
<style>
    #div1 {}

    #div1 table {
        width: 100px;

    }

    .hide {
        display: none;
    }

    .red {
        color: Red;
    }

    input {
        border-radius: 5px;
        width:400px;
    }

</style>


<head>
    <link rel="shortcut icon" href="img/icon3.png">
    <title>Récibo de nomina</title>
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
        <img align="left" alt="despacho contable enriquez y asociados" src="img/icon2.jpg" width="275" alt="http://enriquezyasocs.000webhostapp.com/"> <br><br><button onclick="javascript:window.print()" align="center" type="button" class="btn btn-primary btn-sm">Generar pdf <i class="fa fa-print" aria-hidden="true"></i></button>



        <script>
            var URLactual = window.location;

        </script>
        <?php 

$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];  
        
$href=urlencode($host.$url);

        ?>



        <?php  echo "<a target='_blank' href='https://api.whatsapp.com/send?phone=+522222541766&text=$href'><button align='center' type='submit' class='btn btn-success btn-sm'>Enviar <img src='https://img.icons8.com/color/18/000000/whatsapp.png' />
            </button> </a>";  ?>







        <h4><b><img src="https://img.icons8.com/color/28/000000/instagram-verification-badge.png"/> COMPROBANTE DE PAGO <br><H5><?php $nombre= $_GET['var7']; $fecha= $_GET['varfecha'];
               
              
            echo $nombre."  ".$fecha; ?></H5></b></h4>

        <div id="div1">

            <table id="datos" class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                    
                        <td scope="col"><b>Nombre</b></td>
                       

          

                        <td><b>Honorarios</b></td>

                        <td><b>Pago</b></td>
              

                    </tr>
                </thead>
                <?php 
include('Metodos/conexion.php');
date_default_timezone_set('UTC');
                $curdate= date("Y")."-".date("m")."-".date("j");

                    $nombre= $_GET['var7'];
                    $trimmed = trim($nombre);
                    $fecha= $_GET['varfecha'];
                    $fecha2 = trim($fecha);
                
                   $sql2="SELECT SUM(pago_parcial) AS total FROM clientes where pago='SI' and responsable='$trimmed' and fecha_pagoactual='$curdate' and fecha_pago='$fecha2'  ";
                   $results = mysqli_query($conn,$sql2);
                  
        
                         
                
                    $sql="SELECT * FROM clientes where pago='SI' and responsable='$trimmed' and fecha_pagoactual='$curdate' and fecha_pago='$fecha2' ";
                    $result=mysqli_query($conn,$sql);
                    while($mostrar=mysqli_fetch_array($result)){
                     
                    $sql3="SELECT COUNT(*) AS tot FROM clientes where pago='SI' and responsable='$trimmed' and fecha_pagoactual='$curdate' and fecha_pago='$fecha2' ";
                    $results2 = mysqli_query($conn,$sql3);   
                    
                    ?>
                <tr bgcolor="<?php if($mostrar['pago']=='SI') echo '';else echo '' ?>">
                    <td><?php echo $mostrar['Nombre']; ?></td>

                   
         

                    <td><?php echo '$'.$mostrar['pago_parcial'];'</b>' ?></td>

                    <td><b><?php echo $mostrar['pago'];?> </b></td>
   


                </tr>
                <?php }?>
             <small>Versión mobil.</small>   Fecha de expedición: <?php 
echo date("Y")."-".date("m")."-".date("j");
?>
            </table>
            <h5 style="color:black"><b>Total= <?php   while ($fila =mysqli_fetch_array($results)){
echo '$'.$fila['total'].'MXN';
} ?></b>
                  <h6 style="color:black"><b>Total de clientes cobrados: <?php   while ($fila =mysqli_fetch_array($results2)){
echo $fila['tot'];
} ?> </b> </h6><br>
            <br>
            <br>
            </h5>
        </div>
    </div>


</body>

<footer>
</footer>
