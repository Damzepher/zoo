<?php
include('../modelos/empleado.php');
include('../modelos/config.php');

$opcion=$_GET['opcion'];
switch($opcion){
 case 1://Crear
    $conexion=new Conexion();
    $con=$conexion->getConection();
    $empleado=new Empleado($con);

    $empleado->apellido1=$_GET['apellido1'];
    $empleado->apellido2=$_GET['apellido2'];
    $empleado->nombre=$_GET['nombre'];
    $empleado->sexo=$_GET['sexo'];
    $empleado->correo=$_GET['correo'];
    $empleado->clave=$_GET['clave'];
    $empleado->fecha=$_GET['fecha'];
    $empleado->puesto=$_GET['puesto'];
    $empleado->horario=$_GET['horario'];
    $empleado->estatus=$_GET['estatus'];
    $empleado->foto=$_GET['foto'];

    $res=$empleado->crear();
    if($res==1){
echo "Empleado registrado";
    }else{
echo $res;     
    }
    header('Location: ../../front_end/private/empleados/data.php');
    break;
    case 2://Modificar
        $conexion=new Conexion();
        $con=$conexion->getConection();

        $empleado=new Empleado($con);
    
        $empleado->apellido1=$_GET['apellido1'];
        $empleado->apellido2=$_GET['apellido2'];
        $empleado->nombre=$_GET['nombre'];
        $empleado->sexo=$_GET['sexo'];
        $empleado->correo=$_GET['correo'];
        $empleado->clave=$_GET['clave'];
        $empleado->fecha=$_GET['fecha'];
        $empleado->puesto=$_GET['puesto'];
        $empleado->horario=$_GET['horario'];
        $empleado->estatus=$_GET['estatus'];
        $empleado->foto=$_GET['foto'];
        $empleado->id=$_GET['id'];
    
        $res=$empleado->actualizar();
        if($res==1){
    echo "Cliente actualizado";
        }else{
    echo $res;     
        }
        header('Location: ../../front_end/private/empleados/data.php');
        break;
        case 3:
            $conexion=new Conexion();
            $con=$conexion->getConection();
            $empleado=new Empleado($con);

            $empleado->id=$_GET['id'];
            $res=$empleado->borrar();
            if($res==1){
                echo "DATOS BORRADOS!!";
            }else{
                echo $res;
            }
            header('Location: ../../front_end/private/empleados/data.php');
        break;
    }





?>