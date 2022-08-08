<?php
session_start();
$usuario = $_SESSION['user'];
if(!isset($usuario)){
    header('location:index.php');
}
?>
<style>
    #div1 {
        overflow: scroll;
        height: 690px;
        width: 1000px;
    }



    .hide {
        display: none;
    }

    .red {
        color: Red;
    }

</style>
<style>
    body {

        background-color: #EADFEA;
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
                        <a href="#"> <i class="fa fa-credit-card" aria-hidden="true"></i> Nómina</a>

                    </li>

                    <li class="active">
                        <a href="#"> <i class="fa fa-chevron-circle-right" aria-hidden="true"></i> <b> Editar/eliminar</b></a>
                    </li>



                    <li>
                        <a href="Clientes_index.php"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</a>

                    </li>
                    <li>
                        <a href="Metodos/destruir.php"> <i class="fa fa-lock" aria-hidden="true"></i> Cerrar sesión</a>
                    </li>
                </ul><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><img align="center" alt="despacho contable enriquez y asociados" src="img/icon3.jpg" width="75" alt="http://enriquezyasocs.000webhostapp.com/">
            </div>
        </nav>
        <div id="content" class="mx-auto" style="width: 100%;">
            <br><br>
            <h1><?php $bd= $_GET['var1'];
                $var2= $_GET['var2'];
                $var3= $_GET['var3'];
                echo "Base de datos ". $bd."  ".$var2." ".$var3." <img src='https://img.icons8.com/ultraviolet/56/000000/data-configuration.png' />"; ?></h1>
            <form>
                <input align="center" id="searchTerm" placeholder="Buscar " type="text" onkeyup="doSearch()" />
            </form>
            <div id="div1">

                <table id="datos" class="table ">
                    <thead class="thead-dark">
                        <tr>
                            <td scope="col"><b>Núm. Cliente</b></td>
                            <td scope="col"><b>Nombre</b></td>
                         
                            <td><b>Rfc</b></td>

                            <td scope="col"><b>Zona</b></td>


                            <td><b>Nombre del establecimiento</b></td>

                            <td><b>Editar</b></td>
                            <td><b>Dar de baja</b></td>

                        </tr>
                    </thead>
                    <?php 
include('Metodos/conexion.php');
                
                    $sql="SELECT * FROM clientes ";
                    $result=mysqli_query($conn,$sql);
                    while($mostrar=mysqli_fetch_array($result)){
                        
                    
                    ?>
                    <tr>
                        <td><?php echo $mostrar['id']; ?></td>
                        <td><?php echo $mostrar['Nombre']; ?></td>
          
                        <td><?php echo $mostrar['rfc']; ?></td>

                        <td><?php echo $mostrar['zona']; ?></td>


                        <td><?php echo $mostrar['nombre_establecimiento']; ?></td>

                        <td><?php $id= $mostrar['id']; echo "<a href='editar.php?var=$id'><img src='https://img.icons8.com/fluent/54/000000/edit.png' /></button> </a>";  ?></td>

                        <td><?php  $id= $mostrar['id']; 
                                $nombre=$mostrar['Nombre'];
                        echo "<a href='Metodos/eliminar.php?var=$id' onclick='return confirmar()'> <img src='https://img.icons8.com/fluent/54/000000/delete-sign.png'/></button></a>"; ?></td>


                    </tr>
                    <?php }?>
                </table>
            </div>
        </div>
    </div>

</body>
<script>
    function confirmar() {
        if (confirm('¿Esta seguro de dar de baja cliente? *Cuidado, esta acción no se puede revertir.'))
            return true;
        else
            return false;
    }

</script>
<footer>
</footer>
