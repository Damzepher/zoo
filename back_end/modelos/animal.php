<?php
include('crud.php');
class Animal implements CRUD{
    public $id;
    public $nombre;
    public $grupo;
    public $sexo;
    public $alimentacion;
    public $estatus;
    public $foto;

    public $con;

    public function __construct($con){
        $this->con=$con;
}

public function crear(){
    try{
     $sql = "INSERT INTO animales (nombre, grupo, sexo, alimentacion, estatus, foto) 
     VALUES (:nombre, :grupo, :sexo, :alimentacion, :estatus, :foto)";
    $stmt = $this->con->prepare($sql);
    $stmt->bindParam(':nombre', $this->nombre);
    $stmt->bindParam(':grupo', $this->grupo);
    $stmt->bindParam(':sexo', $this->sexo);
    $stmt->bindParam(':alimentacion', $this->alimentacion);
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
            $sql= "UPDATE animales SET nombre=:nombre, grupo=:grupo, sexo=:sexo, alimentacion=:alimentacion,
           estatus=:estatus, foto=:foto WHERE id=:id";
        $stmt = $this->con->prepare($sql);
           $stmt->bindParam(':nombre', $this->nombre);
           $stmt->bindParam(':grupo', $this->grupo);
           $stmt->bindParam(':sexo', $this->sexo);
           $stmt->bindParam(':alimentacion', $this->alimentacion);
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
                $sql= "DELETE FROM animales WHERE id=:id";
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
                $sql = "Select * from animales"; 
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
            $sql = "Select * from animales where id=:id"; 
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

