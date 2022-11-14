<?php 
include('../../../back_end/modelos/animal.php');
include('../../../back_end/modelos/config.php');
?>


<!doctype html>
<html lang="es">
  
  <head>
<?php
include_once('../plantilla/head.php');
?>
<title>Area administrativa</title>

  </head>
  
  <body>
    
  <header>  
  <?php
include_once('../plantilla/header.php');
 ?>
</header>

<navbar> 
 <?php
include_once('../plantilla/navbar.php');
 ?>
</navbar> 

 
<main> 
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Grupo</th>
      <th scope="col">Sexo</th>
      <th scope="col">Alimentacion</th>
      <th scope="col">Estatus</th>
      <th scope="col">Foto</th>
      <th scope="col">Editar</th>
      <th scope="col">Borrar</th>
    </tr>
  </thead>

  <tbody>
    <?php 
    $conexion=new Conexion();
    $con=$conexion->getConection();
    $animal=new Animal($con);
    $animales=$animal->leer_todos();
    foreach($animales as $animal){
    ?>
    <tr>
  <th scope="row"><?php echo $animal->id ?></th>
  <td> <?php echo $animal->nombre ?></td>
  <td> <?php echo $animal->grupo ?></td>
  <td> <?php echo $animal->sexo ?></td>
  <td> <?php echo $animal->alimentacion ?></td>
  <td> <?php echo $animal->estatus ?></td>
  <td> <?php echo $animal->foto ?></td>
  <td><a href="editar.php?id=<?php echo $animal->id ?>">Editar</a></td>
  <td><a href="mostrar.php?id=<?php echo $animal->id ?>">Borrar</a></td>

    </tr>
 <?php
    }
 ?>
  </tbody>
</main><!-- /.container -->

    <footer class="footer">
<?php
include_once('../plantilla/footer.php');
 ?>
</footer>
      
  </body>
</html>
