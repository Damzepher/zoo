<!DOCTYPE html>
<html lang="es">

<head>
<?php
include('plantilla/hdm.php');
?>
</head>
<body>

    <header>
<?php
include('plantilla/hdrm.php');
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
        <div id="l" class="art">  
<img src="imagenes/Leon.jpg" alt="" width="40%" class="center">
<h3>Leon</h3> <br>
<h4>Nombre cientifico:</h4><p>Panthera leo</p>
<h4>Grupo: </h4><p>Felidae</p>
<h4>Alimentacion: </h4><p>Carnivoro</p>
<h4>Estatus: </h4><p>Activo</p>
</div>
<div id="e" class="art">
    <img src="imagenes/Elefante.jpg" alt="" width="40%" class="center">
    <h3>Elefante</h3> <br>
    <h4>Nombre cientifico:</h4><p>Elephantidae</p>
    <h4>Grupo: </h4><p>Elephantoidea</p>
    <h4>Alimentacion: </h4><p>Herbivoro</p>
    <h4>Estatus: </h4><p>Activo</p>
</div>
<div id="ca" class="art">
    <img src="imagenes/Cebra.jpg" alt="" width="40%" class="center">
    <h3>Cebra</h3> <br>
    <h4>Nombre cientifico:</h4><p>Equus zebra</p>
    <h4>Grupo: </h4><p>Equus</p>
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