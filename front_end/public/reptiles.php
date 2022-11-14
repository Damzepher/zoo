<!DOCTYPE html>
<html lang="es">

<head>
<?php
include('plantilla/hdr.php');
?>
</head>
<body>

    <header>
<?php
include('plantilla/hdrr.php');
?>
    </header>
    
    <nav>
    <?php
include_once('plantilla/navbar.php');
?>
    </nav>

    <main>

<section> 
    <article>  
        <div id="cr" class="art">  
<img src="imagenes/Cocodrilo.jpg" alt="" width="40%" class="center">
<h3>Cocodrilo</h3> <br>
<h4>Nombre cientifico:</h4><p>Crocodylidae</p>
<h4>Grupo: </h4><p>Crocodilia</p>
<h4>Alimentacion: </h4><p>Carnivoro</p>
<h4>Estatus: </h4><p>Activo</p>
</div>
<div id="s" class="art">
    <img src="imagenes/Cobra.jpg" alt="" width="40%" class="center">
    <h3>Cobra Real</h3> <br>
    <h4>Nombre cientifico:</h4><p>Ophiophagus hannah</p>
    <h4>Grupo: </h4><p>Squamata</p>
    <h4>Alimentacion: </h4><p>Carnivoro</p>
    <h4>Estatus: </h4><p>Activo</p>
</div>
<div id="t" class="art">
    <img src="imagenes/Tortuga.jpg" alt="" width="40%" class="center">
    <h3>Tortuga Gigante</h3> <br>
    <h4>Nombre cientifico:</h4><p>Geochelone gigantea</p>
    <h4>Grupo: </h4><p>Testudines</p>
    <h4>Alimentacion: </h4><p>Herbivoro</p>
    <h4>Estatus: </h4><p>Activo</p>
    </div>
</div>

</article>
</section>
</main>

<footer class="footmenu">
        <?php
include_once('plantilla/footer.php');
?>
         </footer>
</body>
</html>