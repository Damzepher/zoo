<!DOCTYPE html>
<html lang="es">

<head>
<?php
include('plantilla/hdan.php');
?>
</head>
<body>

    <header>
<?php
include('plantilla/hdran.php');
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
        <div id="rana" class="art">  
<img src="imagenes/Rana.jpg" alt="" width="40%" class="center">
<h3>Rana Toro</h3> <br>
<h4>Nombre cientifico:</h4><p>Lithobates catesbeianus</p>
<h4>Grupo: </h4><p>Ranidae</p>
<h4>Alimentacion: </h4><p>Omnivoro</p>
<h4>Estatus: </h4><p>Activo</p>
</div>
<div id="salamandra" class="art">
    <img src="imagenes/Salamandra.jpg" alt="" width="40%" class="center">
    <h3>Salamandra Comun</h3> <br>
    <h4>Nombre cientifico:</h4><p>Salamandra salamandra</p>
    <h4>Grupo: </h4><p>Salamandridae</p>
    <h4>Alimentacion: </h4><p>Carnivoro</p>
    <h4>Estatus: </h4><p>Activo</p>
</div>
<div id="axolotl" class="art">
    <img src="imagenes/Ajolot.jpg" alt="" width="40%" class="center">
    <h3>Ajolote Mexicano</h3> <br>
    <h4>Nombre cientifico:</h4><p>Ambystoma mexicanum</p>
    <h4>Grupo: </h4><p>Ambystomatidae</p>
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