<?php
include ('Metodos/conexion.php');
session_start();
$usuario = $_SESSION['user'];
$fecha= $_POST['fecha'];
$encargado = $_POST['encagado'];
if(!isset($usuario)){
    header('location:index.php');
}



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
 <link rel="shortcut icon" href="img/icon3.jpg">
    <title>Reimpresion de nomina</title>
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
        <img align="center" alt="despacho contable enriquez y asociados" src="img/icon2.jpg" width="275" alt="http://enriquezyasocs.000webhostapp.com/"> <br><br>
        <h3><b>Reimpresion récibo de nómina: <?php 
               
              
                echo $encargado; ?>
                <h5> *caracter de solo consulta</h5></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button onclick="javascript:window.print()" align="center" type="button" class="btn btn-primary btn-sm">Imprimir recibo <i class="fa fa-print" aria-hidden="true"></i></button></h3>

        <div id="div1">

            <table id="datos" class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <td scope="col"><b>Núm. Cliente</b></td>
                        <td scope="col"><b>Nombre</b></td>
                        <td scope="col"><b>Zona</b></td>


                        <td><b>Nombre del establecimiento</b></td>
                        <td><b>Fecha pago</b></td>
                        <td><b>Cantidad</b></td>

                        <td><b>Pago</b></td>
               

                    </tr>
                </thead>
                <?php 

                
                         
                
                 $sql2="SELECT * FROM registros where responsable='$encargado' and fecha_pago LIKE '_____$fecha%'  " ;
                    $result=mysqli_query($conn,$sql2);
                    while($mostrar=mysqli_fetch_array($result)){
                        
       
                    ?>

                <tr bgcolor="<?php if($mostrar['pago']=='SI') echo '';else echo '' ?>">
                    <td><?php echo $mostrar['id']; ?></td>
                    <td><?php echo $mostrar['nombre']; ?></td>

                    <td><?php echo $mostrar['zona']; ?></td>

                    <td><?php echo $mostrar['nombre_establecimiento']; ?></td>
                    <td><?php echo $mostrar['fecha_pago']; ?></td>

                    <td><?php echo '<b>$'.$mostrar['honorarios'];'</b>' ?></td>

                    <td style="color:red;"><b><?php echo $mostrar['pago'];?> </b></td>
                   

                </tr>
                <?php } ?>
            </table>

        </div>
    </div>


</body>

<footer>
</footer>
