<?php
include('../modelos/animal.php');
include('../modelos/config.php');

$opcion=$_GET['opcion'];
switch($opcion){
 case 1://Crear
    $conexion=new Conexion();
    $con=$conexion->getConection();
    $animal=new Animal($con);

    $animal->nombre=$_GET['nombre'];
    $animal->grupo=$_GET['grupo'];
    $animal->sexo=$_GET['sexo'];
    $animal->alimentacion=$_GET['alimentacion'];
    $animal->estatus=$_GET['estatus'];
    $animal->foto=$_GET['foto'];

    $res=$animal->crear();
    if($res==1){
echo "Animal registrado";
    }else{
echo $res;     
    }
    header('Location: ../../front_end/private/animales/data.php');
    break;
    case 2://Modificar
        $conexion=new Conexion();
        $con=$conexion->getConection();

        $animal=new Animal($con);
    
        $animal->nombre=$_GET['nombre'];
        $animal->grupo=$_GET['grupo'];
        $animal->sexo=$_GET['sexo'];
        $animal->alimentacion=$_GET['alimentacion'];
        $animal->estatus=$_GET['estatus'];
        $animal->foto=$_GET['foto'];
        $animal->id=$_GET['id'];
    
        $res=$animal->actualizar();
        if($res==1){
    echo "Cliente actualizado";
        }else{
    echo $res;     
        }
        header('Location: ../../front_end/private/animales/data.php');
        break;
        case 3:
            $conexion=new Conexion();
            $con=$conexion->getConection();
            $animal=new Animal($con);

            $animal->id=$_GET['id'];
            $res=$animal->borrar();
            if($res==1){
                echo "DATOS BORRADOS!!";
            }else{
                echo $res;
            }
            header('Location: ../../front_end/private/animales/data.php');
        break;
    }





?>