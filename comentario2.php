<?php
session_start();
$usuario = $_SESSION['user'];
if(!isset($usuario)){
    header('location:index.php');
}
?>
<style>
    body {


        background-color: #F7F6F7;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: 3500px 1500px;
    }

</style>

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
    <link rel="stylesheet" href="css/ccssf.css">
</head>
<style>
    .ima {
        position: absolute;
        top: 90px;
        left: 400px;
    }

</style>

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
                        <a href="#"> <i class="fa fa-chevron-circle-right" aria-hidden="true"></i> <b>Comentario</b></a>
                    </li>
                    <li>
                        <a href="javascript:history.back()"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</a>
                        <script>



                        </script>
                    </li>

                </ul><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <div class="mb-5">
                    <br><img align="center" alt="despacho contable enriquez y asociados" src="img/icon3.jpg" width="75" alt="http://enriquezyasocs.000webhostapp.com/"><br><br>
                </div>
            </div>
        </nav>


        <div class="ima" id="ima">
            <form action="comentario.php" align="center" method="post">

                <div id="content">
                    <br><br><br>
                    <h1 style="color:black">Añadir comentario para <br> <?php $_GET['varfecha'];
                        $id=$_GET['id'];
                           
                        $var1= $_GET['var1'];
                        $var2= $_GET['var2'];
                        $varfecha= $_GET['varfecha'];
                         $nombre= $_GET['nombre'];
                            echo $nombre;
                            ?><br>
                        <img src="https://img.icons8.com/color/98/000000/note.png" />
                    </h1>

                    <br>
                    <div class="form-group">
                        <textarea cols="54" rows="6" name="comentario" id="exampleFormControlTextarea1" rows="10"></textarea>

                        <input type="hidden" name="id" value="<?php echo $id; ?>" />
                        <input type="hidden" name="curdate" value=" <?php $curdate=date("Y")."-".date("m")."-".date("j"); echo $curdate. "";?>" />
                        <input type="hidden" name="nomina" value="<?php echo $var1; ?>" />
                        <input type="hidden" name="nombre" value="<?php echo $var2; ?>" />
                        <input type="hidden" name="fecha" value="<?php echo $varfecha; ?>" />
                    </div>


                </div><br><br>
                <button style=" background-color: #99CCFF" type="submit" class="btn btn-light" align="center">Registrar</button> <a href="javascript:history.back()"> Cancelar</a>
                <br><br>

                <small align="center" style="color: red"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo  $_GET['vard'];   ?> </small>

            </form>
        </div>

    </div>
</body>

<footer>
</footer>
