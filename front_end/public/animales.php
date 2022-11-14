<!DOCTYPE html>
<html lang="es">


<head>
<?php
include('plantilla/heada.php');
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
    <p class="text">Conoce las distintas especies de animales con las que cuenta el zoologico!</p>
  <div class="principal">
    <section>
      <article>
        <h2>Mamiferos</h2>
        <div class="flex-container-m"> 
          <a href="mamiferos.php"><img src="imagenes/animal1.png" alt="Mamiferos" width="90%"></a> 
        <p>Los mamiferos son un grupo de animales vertebrados que cuentan con glandulas mamarias, las cuales les permiten producir leche con las cuales pueden alimentar a sus crias. Muchas especies de 
          animales salen de aqui, por ejemplo los felinos, los canidos, y un largo etc.
        </p>
        </div>
       </article>

      <article>
        <h2>Reptiles</h2>
        <div class="flex-container-r"> 
        <a href="reptiles.php"><img src="imagenes/animal2.png" alt="Reptil" width="90%"></a>
        <p>Los reptiles son un grupo de animales vertebrados amniotas que cuentan con una piel seca formada por escamas de queratina, ademas de respirar
          por los pulmones y contar con sangre fria. Algunas especies que se encuentran en este grupo vienen siendo la familia crocodilia o squamata.</p>
      </div>
       </article>

      <article>
        <h2>Aves</h2>
        <div class="flex-container-a"> 
        <a href="aves.php"><img src="imagenes/animal3.png" alt="Aves" width="90%"></a>
        <p>Las aves son un grupo de animales vertebrados de sangre caliente, que caminan, saltan, o se mantienen sobre extremidades posteriores.
          Este grupo posee alas que en la mayoria de casos les permite volar,  y aunque no todas las especies sean capaces de volar, la mayoria cuenta con plumas en su cuerpo.
        </p>
      </div>
       </article>

      <article>
        <h2>Anfibios</h2>
        <div class="flex-container-an">  
        <a href="anfibios.php"> <img src="imagenes/animal4.png" alt="Anfibio" width="90%"></a>
        <p>Los anfibios son un grupo de animales vertebrados que cuentan con respiracion branquial durante la fase latvaria y pulmonar al alcanzar la etapa adulta.
          A diferencia del resto de grupos vertebrados, los anfibios se distinguen por sufrir transformaciones durante todo su desarrollo.
        </p>
      </div>
      </article>

      <article>
        <h2>Peces</h2>
        <div class="flex-container-p">  
        <a href="peces.php"> <img src="imagenes/animal5.png" alt="Peces" width="90%"></a>
        <p>Los peces son un grupo de animales vertebrados acuaticos, que generalmente regulan su temperatura a partir del medio ambiente y cuentan con respiracion por branquias.
          Ademas suelen estar cubiertos por escamas y estan dotados de aletas que permiten su movimiento bajo el agua.
        </p>
      </div>
      </article>
    </section>
  </div>
</main>

    
    <footer class="footmenu">
        <?php
include('plantilla/footer.php');
?>
         </footer>
</body>
</html>