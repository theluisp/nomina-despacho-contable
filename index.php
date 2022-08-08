<?php error_reporting(0); ?>
<head>
    <link rel="shortcut icon" href="img/icon3.png">
    <title>Nómina Enriquez y Asociados</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
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
<style>
    body {

        background-color: #F7F6F7;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: 1590px 19000px;
    }

    #fuc2 {
        width: 300px;

    }

</style>

    <body style="background-color:#EADFEA ">
        <div class="wraper d-flex align-items-stretch" style="color:#418CC3 ;">
            <nav id="sidebar">
                <div class="p-4" pt5>
                    <h1><a href="index.html" class="logo">Enriquez y asociados</a></h1>
                    <ul class="list-unstyled components mb-5">
                        <li>
                            <a href="#home"> <i class="fa fa-credit-card" aria-hidden="true"></i> Sistema de nómina</a>

                        </li>

                        <li class="active">
                            <a href="index.php"> <i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Inicio de sesión</a>
                        </li>


                    </ul><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><img align="center" alt="despacho contable enriquez y asociados" src="img/icon3.jpg" width="75" alt="http://enriquezyasocs.000webhostapp.com/">
                    <br><br>
                </div>
            </nav>
            <div id="content" class="mx-auto" style="width: 320px;">
                <div class="row">
                    <div align="center">
                        <form action="Metodos/login.php" method="post">
                            <div class="form-group form-control-lg">
                                <div id="content" align="center" class="mx-auto" style="width: 300px;">
                                    <br><center><h4>Nómina Despacho Enriquez y Asociados<img src="img/icon3.png" style="width: 25px;"/></h4>
                                    <h1 class="h1-responsive  text-center my-4"><br><b>Login </b> 
                                        <img src="https://img.icons8.com/office/56/000000/user-credentials.png" /> </h1><br>
                                    <input type="text" id="usuario" placeholder="Usuario" name="usuario" maxlength="10" style="width: 320px; " />
                                    <br>

                                    <div class="input-group" style="width:320px;"><input type="password" name="contrasenia" id="txtpassword" placeholder="Contraseña" style="width: 220px;" />
                                        <div class="input-group-append"><button id="show_password" class="btn btn-#418CC3" type="button" style="background-color:#418CC3; color: white"   onclick="mostrarPassword()"><span class="fa fa-eye-slash icon"></span></button></div>
                                    </div><br><br>
                                     <center><button class="btn btn-#418CC3" type="submit"  style="background-color:#418CC3; color:white; ">Siguiente</button></center><br>
                                    <div id="fuc2"> <small align="center" style="color: red">
                                            <p><b> <?php echo  $_GET['var'];   ?></b> </p>
                                        </small></div></center>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

<footer>
</footer>
