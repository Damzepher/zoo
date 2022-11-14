<!DOCTYPE html>
<html lang="es">


<head>
<?php
include('plantilla/hdp.php');
?>
</head>
<body>

    <header>
<?php
include('plantilla/hdrp.php');
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
        <div id="p" class="art">  
<img src="imagenes/Payaso.jpg" alt="" width="40%" class="center">
<h3>Pez Payaso</h3> <br>
<h4>Nombre cientifico:</h4><p>Amphiprioninae</p>
<h4>Grupo: </h4><p>Pomacentridae</p>
<h4>Alimentacion: </h4><p>Omnivoro</p>
<h4>Estatus: </h4><p>Activo</p>
</div>
<div id="m" class="art">
    <img src="imagenes/Mantaraya.jpg" alt="" width="40%" class="center">
    <h3>Mantarraya Gigante</h3> <br>
    <h4>Nombre cientifico:</h4><p>Mobula birostris</p>
    <h4>Grupo: </h4><p>Myliobatidae</p>
    <h4>Alimentacion: </h4><p>Carnivoro</p>
    <h4>Estatus: </h4><p>Activo</p>
</div>
<div id="t" class="art">
    <img src="imagenes/Tiburon.jpg" alt="" width="40%" class="center">
    <h3>Tiburon de Arrecife</h3> <br>
    <h4>Nombre cientifico:</h4><p>Triaenodon obesus</p>
    <h4>Grupo: </h4><p>Carcharhinidae</p>
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