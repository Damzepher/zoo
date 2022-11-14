<?php
include('../modelos/cliente.php');
include('../modelos/config.php');

$opcion=$_GET['opcion'];
switch($opcion){
 case 1://Crear
    $conexion=new Conexion();
    $con=$conexion->getConection();
    $cliente=new Cliente($con);

    $cliente->apellido1=$_GET['apellido1'];
    $cliente->apellido2=$_GET['apellido2'];
    $cliente->nombre=$_GET['nombre'];
    $cliente->sexo=$_GET['sexo'];
    $cliente->correo=$_GET['correo'];
    $cliente->clave=$_GET['clave'];
    $cliente->fecha=$_GET['fecha'];
    $cliente->estatus=$_GET['estatus'];
    $cliente->foto=$_GET['foto'];

    $res=$cliente->crear();
    if($res==1){
echo "Cliente registrado";
    }else{
echo $res;     
    }
    header('Location: ../../front_end/private/clientes/data.php');
    break;
    case 2://Modificar
        $conexion=new Conexion();
        $con=$conexion->getConection();

        $cliente=new Cliente($con);
    
        $cliente->apellido1=$_GET['apellido1'];
        $cliente->apellido2=$_GET['apellido2'];
        $cliente->nombre=$_GET['nombre'];
        $cliente->sexo=$_GET['sexo'];
        $cliente->correo=$_GET['correo'];
        $cliente->clave=$_GET['clave'];
        $cliente->fecha=$_GET['fecha'];
        $cliente->estatus=$_GET['estatus'];
        $cliente->foto=$_GET['foto'];
        $cliente->id=$_GET['id'];
    
        $res=$cliente->actualizar();
        if($res==1){
    echo "Cliente actualizado";
        }else{
    echo $res;     
        }
        header('Location: ../../front_end/private/clientes/data.php');
        break;
        case 3:
            $conexion=new Conexion();
            $con=$conexion->getConection();
            $cliente=new Cliente($con);

            $cliente->id=$_GET['id'];
            $res=$cliente->borrar();
            if($res==1){
                echo "DATOS BORRADOS!!";
            }else{
                echo $res;
            }
            header('Location: ../../front_end/private/clientes/data.php');
        break;
    }





?>