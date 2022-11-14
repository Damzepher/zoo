<?php
include('crud.php');
class Empleado implements CRUD{
    public $id;
    public $apellido1;
    public $apellido2;
    public $nombre;
    public $sexo;
    public $fecha;
    public $correo;
    public $clave;
    public $estatus;
    public $foto;
    public $puesto;
    public $horario;

    public $con;
    public function __construct($con){
        $this->con=$con;
}

public function crear(){
    try{
     $sql = "INSERT INTO empleados (apellido1, apellido2, nombre, sexo, correo, clave, fecha, puesto, horario, estatus, foto) 
     VALUES (:apellido1, :apellido2, :nombre, :sexo, :correo, :clave, :fecha, :puesto, :horario, :estatus, :foto)";
    $stmt = $this->con->prepare($sql);
    $stmt->bindParam(':apellido1', $this->apellido1);
    $stmt->bindParam(':apellido2', $this->apellido2);
    $stmt->bindParam(':nombre', $this->nombre);
    $stmt->bindParam(':sexo', $this->sexo);
    $stmt->bindParam(':correo', $this->correo);
    $stmt->bindParam(':clave', $this->clave);
    $stmt->bindParam(':fecha', $this->fecha);
    $stmt->bindParam(':puesto', $this->puesto);
    $stmt->bindParam(':horario', $this->horario);
    $stmt->bindParam(':estatus', $this->estatus);
    $stmt->bindParam(':foto', $this->foto);
    return $stmt->execute();
    
    } catch(PDOException $e){
    return $e->getMessage();
    }finally{
    $this->con=null;
    }
        }
        public function actualizar(){
            try{
                $sql= "UPDATE empleados SET apellido1=:apellido1, apellido2=:apellido2, nombre=:nombre, sexo=:sexo, correo=:correo,
                clave=:clave, fecha=:fecha, puesto=:puesto, horario=:horario, estatus=:estatus, foto=:foto WHERE id=:id";
            $stmt = $this->con->prepare($sql);
               $stmt->bindParam(':apellido1', $this->apellido1);
               $stmt->bindParam(':apellido2', $this->apellido2);
               $stmt->bindParam(':nombre', $this->nombre);
               $stmt->bindParam(':sexo', $this->sexo);
               $stmt->bindParam(':correo', $this->correo);
               $stmt->bindParam(':clave', $this->clave);
               $stmt->bindParam(':fecha', $this->fecha);
               $stmt->bindParam(':puesto', $this->puesto);
               $stmt->bindParam(':horario', $this->horario);
               $stmt->bindParam(':estatus', $this->estatus);
               $stmt->bindParam(':foto', $this->foto);
               $stmt->bindParam('id', $this->id);
               return $stmt->execute();
               
               } catch(PDOException $e){
               return $e->getMessage();
               }finally{
               $this->con=null;
               }
        }
        public function borrar(){
            try{
                $sql= "DELETE FROM empleados WHERE id=:id";
            $stmt = $this->con->prepare($sql);
               $stmt->bindParam('id', $this->id);
               return $stmt->execute();
               
               } catch(PDOException $e){
               return $e->getMessage();
               }finally{
               $this->con=null;
               }
        }
    
        public function leer_todos(){
            try{
                $sql = "Select * from empleados"; 
               $stmt = $this->con->prepare($sql);
               $stmt->setFetchMode(PDO::FETCH_OBJ);
             $stmt->execute();
             return $stmt->fetchAll();
               }catch(PDOException $e){
               return $e->getMessage();
               }finally{
               $this->con=null;
               }
        }
        public function leer_uno_id(){
            try{
                $sql = "Select * from empleados where id=:id"; 
               $stmt = $this->con->prepare($sql);
               $stmt->bindParam(':id', $this->id);
               $stmt->setFetchMode(PDO::FETCH_OBJ);
             $stmt->execute();
             return $stmt->fetchAll();
               }catch(PDOException $e){
               return $e->getMessage();
               }finally{
               $this->con=null;
               }
        }
        public function leer_varios_campo(){
    
        }
    }

    ?>

