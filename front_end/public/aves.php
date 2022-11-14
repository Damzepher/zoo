<!DOCTYPE html>
<html lang="es">

<head>
<?php
include('plantilla/hda.php');
?>
</head>
<body>

    <header>
<?php
include('plantilla/hdra.php');
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
        <div id="loro" class="art">  
<img src="imagenes/Loro.jpg" alt="" width="40%" class="center">
<h3>Loro</h3> <br>
<h4>Nombre cientifico:</h4><p>Psittacidae</p>
<h4>Grupo: </h4><p>Psittaciformes</p>
<h4>Alimentacion: </h4><p>Omnivoro</p>
<h4>Estatus: </h4><p>Activo</p>
</div>
<div id="tucan" class="art">
    <img src="imagenes/Tucn.jpg" alt="" width="40%" class="center">
    <h3>Tucan</h3> <br>
    <h4>Nombre cientifico:</h4><p>Ramphastos toco</p>
    <h4>Grupo: </h4><p>Ramphastidae</p>
    <h4>Alimentacion: </h4><p>Omnivoro</p>
    <h4>Estatus: </h4><p>Activo</p>
</div>
<div id="aguila" class="art">
    <img src="imagenes/Aguila.jpg" alt="" width="40%" class="center">
    <h3>Aguila Calva</h3> <br>
    <h4>Nombre cientifico:</h4><p>Haliaeetus leucocephalus</p>
    <h4>Grupo: </h4><p>Accipitridae</p>
    <h4>Alimentacion: </h4><p>Carnivoro</p>
    <h4>Estatus: </h4><p>Activo</p>
    </div>
</div>

</article>
</section>
</main>

<footer class="footmenu">
        <?php
include('plantilla/footer.php');
?>
         </footer>
</body>
</html>