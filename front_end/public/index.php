<!DOCTYPE html>
<html lang="es">

<head>
<?php
include_once('plantilla/head.php');
?>
</head>
<body>

    <header>
<?php
include('plantilla/header.php');
?>
    </header>
    
    <nav>
    <?php
include_once('plantilla/navbar.php');
?>
    </nav>

    <main>
    <!--Seccion info-->
    <section>
        <article class="pt1">
            <h2>Acerca del zoologico:</h2>
            <p>Nuestro zoologico lleva unos años operando en el estado de Jalisco, contando con un area de 30 hectareas de terreno que lleva consigo el espacio para tanto flora como fauna.</p>
            <p>El zoologico actualmente cuenta con al menos 15 especies diferentes, habiendo 3 por cada uno de los 5 grupos de animales, ayudando a dar un sentimiento de dioversidad a la zona.</p>
         </article>
    </section>

<!--Seccion especies-->
    <article> 
    <h3>Conoce mas sobre nuestras especies:</h3>
    <img src="imagenes/lion1.jpg"  alt="Leon"  class="center1">
    <img src="imagenes/zebra1.jpg" alt="Cebra" class="center1">
    <img src="imagenes/croc1.jpg" alt="Cocodrilo" class="center1">
    <p>Para conocer mas sobre nuestras especies del zoologico, has click sobre el siguiente enlace: <a href="animales.html">Especies</a></p>
    </article>

<!--Seccion contacto-->
    <section>
        <article class="pt2">
            <h2>Contactos</h2>
            <p>Para contactar con nuestro personal puede recurrir a lo siguiente:</p>
            <p>Correo: zoo@gmail.com </p>
            <p>Telefono: 33 45 23 55 23 90</p>
            <h3>Redes sociales:</h3>
            <ul>
            <a href="https://es-la.facebook.com/zoologicogdl/"><img src="imagenes/Facebook_f_logo__2019_.svg.png" width="4% alt="imgFb"></a>
            <a href="https://twitter.com/zooguadalajara?lang=es"><img src="imagenes/Twitter-logo.svg.png" width="4.5%" alt="imgTt"></a>
            <a href="https://www.youtube.com/channel/UCElRvKHYngk7d1Hp94bbUdA/videos"><img src="imagenes/YouTube_full-color_icon__2017_.svg.png" width="5%" alt="imgYt"></a>
        </ul>
        </article>
    </section>

<!--Seccion indicaciones-->
    <section>
        <article class="pt3">
            <h2>¿Como y cuando llegar?</h2>
            <p>Ubicación: Nos encontramos en el norte de la ciudad de Guadalajara Jalisco.</p>
            <p>Horario: De 9:00 am a 6:30pm de Martes a Domingo.</p>
            <p>Si usted desea llegar a la zona por medio de transporte publico, lo ideal seria tomar el macrobus parador.</p>
            <p><a href="https://www.google.com/maps/place/Zool%C3%B3gico+Guadalajara/@20.7288303,-103.3069716,15z/data=!4m2!3m1!1s0x0:0x9cf40bdcb60e44c9?sa=X&ved=2ahUKEwidi9fAqcj6AhU2m2oFHUP9AGsQ_BJ6BAhzEAU">Ver ubicacion en Google maps.</a></p>
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