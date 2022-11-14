<?php 
include('../../../back_end/modelos/boleto.php');
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
      <th scope="col">id</th>
      <th scope="col">Tipo</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Precio</th>
      <th scope="col">Editar</th>
      <th scope="col">Borrar</th>
    </tr>
  </thead>

  <tbody>
    <?php 
    $conexion=new Conexion();
    $con=$conexion->getConection();
    $boleto=new Boleto($con);
    $boletos=$boleto->leer_todos();
    foreach($boletos as $boleto){
    ?>
    <tr>
  <th scope="row"><?php echo $boleto->id ?></th>
  <td> <?php echo $boleto->tipo ?></td>
  <td> <?php echo $boleto->descripcion ?></td>
  <td> <?php echo $boleto->precio ?></td>
  <td><a href="editar.php?id=<?php echo $boleto->id ?>">Editar</a></td>
  <td><a href="mostrar.php?id=<?php echo $boleto->id ?>">Borrar</a></td>

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
