<?php
include('../modelos/boleto.php');
include('../modelos/config.php');

$opcion=$_GET['opcion'];
switch($opcion){
 case 1://Crear
    $conexion=new Conexion();
    $con=$conexion->getConection();
    $boleto=new Boleto($con);

    $boleto->tipo=$_GET['tipo'];
    $boleto->descripcion=$_GET['descripcion'];
    $boleto->precio=$_GET['precio'];


    $res=$boleto->crear();
    if($res==1){
echo "Animal registrado";
    }else{
echo $res;     
    }
    header('Location: ../../front_end/private/boletos/data.php');
    break;
    case 2://Modificar
        $conexion=new Conexion();
        $con=$conexion->getConection();

        $boleto=new Boleto($con);
    
        $boleto->tipo=$_GET['tipo'];
        $boleto->descripcion=$_GET['descripcion'];
        $boleto->precio=$_GET['precio'];
        $boleto->id=$_GET['id'];
    
        $res=$boleto->actualizar();
        if($res==1){
    echo "Cliente actualizado";
        }else{
    echo $res;     
        }
        header('Location: ../../front_end/private/boletos/data.php');
        break;
        case 3:
            $conexion=new Conexion();
            $con=$conexion->getConection();
            $boleto=new Boleto($con);

            $boleto->id=$_GET['id'];
            $res=$boleto->borrar();
            if($res==1){
                echo "DATOS BORRADOS!!";
            }else{
                echo $res;
            }
            header('Location: ../../front_end/private/boletos/data.php');
        break;
    }





?>