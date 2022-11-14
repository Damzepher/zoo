<!DOCTYPE html>
<html lang="es">


<head>
<?php
include('bootstrap/hd.php');
?>
</head>
<body>

    <header>
<?php
include('bootstrap/hdr.php');
?>
    </header>
    
    <nav>
    <?php
include_once('bootstrap/navbar.php');
?>
    </nav>

    <main>  
    <div class="container border border-dark shadow p-3 mb-5 bg-white rounded">
        <div class="row">
            <div class="col-lg-6 rounded" style="background-color:rgb(145, 143, 143)"><h4>Empleado #1</h4> <img src="imagenes/icon.png" width="20%"> <p>Nombre: Juan Gutierrez <br> Puesto: Guardia <br> Turno: Matutino</p> </div>
            <div class="col-lg-6 rounded" style="background-color:rgb(211, 207, 207)"><h4>Empleado #2</h4> <img src="imagenes/icon.png" width="20%"> <p>Nombre: Elias Herrera <br> Puesto: Guardia <br> Turno: Vespertino</p></div>
            <div class="col-lg-6 rounded" style="background-color:rgb(194, 194, 194)"><h4>Empleado #3</h4> <img src="imagenes/icon.png" width="20%"> <p>Nombre: Izcoatl Castillo <br> Puesto: Veterinario <br> Turno: Mixto</p> </div>
            <div class="col-lg-6 rounded" style="background-color:rgb(226, 226, 226)"><h4>Empleado #4</h4> <img src="imagenes/icon.png" width="20%"> <p>Nombre: Brandon Gonzalez <br> Puesto: Barrendero <br> Turno: Mixto</p></div>
        </div>
    </div>

</main>

<footer>
        <?php
include('bootstrap/foot.php');
?>
         </footer>
</body>
</html>