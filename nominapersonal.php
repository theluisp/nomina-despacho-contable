<?php error_reporting(0); ?><?php

session_start();
$usuario = $_SESSION['user'];
if(!isset($usuario)){
    header('location:index.php');
    $x="";
}
?>
<style>
    #div1 {
        overflow: scroll;
        height: 569px;

    }

    #div1 table {
        width: 160px;

    }

    .hide {
        display: none;
    }

    .red {
        color: Red;
    }

    #fuc {
        width: 100px;

    }

</style>
<style>
    .Usuario {
        position: absolute;
        top: 10px;
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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

<script>
    function doSearch() {
        const tableReg = document.getElementById('datos');
        const searchText = document.getElementById('searchTerm').value.toLowerCase();
        let total = 0;

        // Recorremos todas las filas con contenido de la tabla
        for (let i = 1; i < tableReg.rows.length; i++) {
            // Si el td tiene la clase "noSearch" no se busca en su cntenido
            if (tableReg.rows[i].classList.contains("noSearch")) {
                continue;
            }

            let found = false;
            const cellsOfRow = tableReg.rows[i].getElementsByTagName('td');
            // Recorremos todas las celdas
            for (let j = 0; j < cellsOfRow.length && !found; j++) {
                const compareWith = cellsOfRow[j].innerHTML.toLowerCase();
                // Buscamos el texto en el contenido de la celda
                if (searchText.length == 0 || compareWith.indexOf(searchText) > -1) {
                    found = true;
                    total++;
                }
            }
            if (found) {
                tableReg.rows[i].style.display = '';
            } else {
                // si no ha encontrado ninguna coincidencia, esconde la
                // fila de la tabla
                tableReg.rows[i].style.display = 'none';
            }
        }

        // mostramos las coincidencias
        const lastTR = tableReg.rows[tableReg.rows.length - 1];
        const td = lastTR.querySelector("td");
        lastTR.classList.remove("hide", "red");
        if (searchText == "") {
            lastTR.classList.add("hide");
        } else if (total) {
            td.innerHTML = "Se ha encontrado " + total + " coincidencia" + ((total > 1) ? "s" : "");
        } else {
            lastTR.classList.add("red");
            td.innerHTML = "No se han encontrado coincidencias";
        }
    }

</script>



<body style="background-color:#EADFEA ">
    <div class="wraper d-flex align-items-stretch" style="color:#0489B1;">
        <nav id="sidebar">
            <div class="p-4" pt5>
                <h1><a href="index.html" class="logo">Enriquez y asociados</a></h1>
                <ul class="list-unstyled components mb-5">
                    <li>
                        <a href="#"> <i class="fa fa-credit-card" aria-hidden="true"></i> Sistema de nómina</a>

                    </li>

                    <li class="active">
                        <a href="#"> <i class="fa fa-chevron-circle-right" aria-hidden="true"></i> <b>Nómina</b></a>
                    </li>



                    <li>
                        <a href="Selectpersonal.php"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</a>

                    </li>
                    <li>
                        <a href="destruir.php"> <i class="fa fa-lock" aria-hidden="true"></i> Salir</a>
                    </li>
                </ul><br><br><br><br><br><br><br><br><br><br><br><br><br><br><img align="center" alt="despacho contable enriquez y asociados" src="img/icon3.jpg" width="75" alt="http://enriquezyasocs.000webhostapp.com/"><br><br>
            </div>
        </nav>
<div id="Usuario" class="Usuario">

                <h4><i class="fa fa-user-circle" aria-hidden="true"></i>  <b>
                    <?php echo $usuario;?>  </b>

<a href="destruir.php" style="  text-decoration: underline;"><small style="color:#0489B1;" ><br><b>Salir</b><img src="https://img.icons8.com/offices/18/000000/sort-down.png"/><br></small></a></h4>

           <br> </div> 
        <div id="content" class="mx-auto" style="width: 100%;">
            <br>  <br>  <br>  <br>  <br>    
            <h1><?php $bd= $_GET['var1'];
               include ('Metodos/conexion.php');
                $varfecha= $_GET['varfecha'];
                $pago= $_GET['varz'];
                $var2= $_SESSION['user'];
                echo ''."  " .$varfecha.'';
                 $sql2="SELECT SUM(honorarios) AS total FROM clientes where responsable='$var2' and fecha_pago='$varfecha'  ";
                
                   $results = mysqli_query($conn,$sql2);
                
                ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "<a target='_blank' href='imprimir_personal.php?var7= $var2&varfecha=$varfecha'><button  align='center' type='button' class='btn btn-primary btn-sm'>Generar pdf <i class='fa fa-print' aria-hidden='true'></i></button></a>


</a> " ?> </h1>
            <form>
               
                <div id="fuc"><br> <input align="center" id="searchTerm" placeholder="Buscar " type="text" onkeyup="doSearch()" />
                </div>
               
            </form>
            <div id="div1">

                <table id="datos" class="table table-hover">
                    <thead class="thead-dark">
                        <tr>

                            <td><b>Nombre</b></td>
                            <td><b>Monto</b></td>
                            <td><b>Pagar</b></td>
                            <td><b>¿Cantidad parcial?</b></td>
 <td><b>Pagar parcial</b></td>

                        </tr>
                    </thead>
                    <?php 
include('conexion.php');
                    $usuario = $_SESSION['user'];
                    $sql="SELECT * FROM clientes where responsable='$usuario' and fecha_pago='$varfecha'";
                    $result=mysqli_query($conn,$sql);
                    while($mostrar=mysqli_fetch_array($result)){
                    
                        $nombre_establecimiento=$mostrar['nombre_establecimiento'];
                        
                        $nombre=$mostrar['Nombre'];
                        $zona=$mostrar['zona'];
                        $honorarios=$mostrar['honorarios'];
                        $comentario=$mostrar['comentario'];
                        $responsable=$mostrar['responsable'];
                        
                    
                    
                    
                    ?>
                    <tr bgcolor="<?php if($mostrar['pago']=='SI') echo '#B0BAB9';else echo '' ?>">

                        <td><b><?php echo $mostrar['Nombre']; ?></b></td>


      <td>$<?php echo $mostrar['honorarios']; ?></td>






                        <td><?php $id= $mostrar['id']; echo "<a href='Metodos/pagar.php?var=$id&var2=$bd&varx=$x&nombre=$nombre&nombre_estable=$nombre_establecimiento&zona=$zona&hono=$honorarios&comentario=$comentario&responsable=$responsable'   onclick='return confirmar()' > <img src='https://img.icons8.com/plasticine/70/000000/banknotes.png'/>  </a>";  ?></td>

                       

   <form name="incompleto" action="Metodos/pagar_incompleto.php" method="get"> <td><input min="1" type="number" id="pago_especial" name="pago_especial" style="WIDTH: 65px;  height:30px;  margin: 0;" >
                           <input type="hidden" value="<?php echo $id;?>" name="var" id="var">
                       
                           </td>


                           <td><?php $id= $mostrar['id']; echo "<a href='pagar_incompleto.php?var=$id&var2=$bd&varx=$x&nombre=$nombre&nombre_estable=$nombre_establecimiento&zona=$zona&hono=$honorarios&comentario=$comentario&responsable=$responsable&pago_incompleto=$pago_incompleto'   onclick='return confirmar()' > <button type='submit' class='btn btn-light'>Parcial</button> </a>";  ?></td> </form>

                    </tr>
                    <?php }?>
                </table>
            </div>
        </div>
    </div>

</body>


<script>


</script>


<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <form action="comentario.php?var=$id&var2=$bd" method="post">
                <label>Comentario:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="comentario" rows="5"></textarea>
                <input type="hidden" name="id" value='<?php
                                                      $id= $mostrar['id'];
                                                      echo $id;?>' />
                <button type="submit" class="btn btn-primary"><?php
                                                      $id= 324;
                                                      echo $id;?></button>
                <a href="">
                    <button type="button" class="btn btn-danger">Cancelar</button></a>
            </form>
        </div>
    </div>
</div>

<script>
    function confirmar() {
        if (confirm('Confirmación de pago'))
            return true;
        else
            return false;
    }

</script>


<footer>
</footer>
