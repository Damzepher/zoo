<?php
include('crud.php');
class Boleto  implements CRUD{
    public $id;
    public $tipo;
    public $descripcion;
    public $precio;

    public $con;

    public function __construct($con){
        $this->con=$con;
}

public function crear(){
    try{
     $sql = "INSERT INTO boletos (tipo, descripcion, precio) 
     VALUES (:tipo, :descripcion, :precio)";
    $stmt = $this->con->prepare($sql);
    $stmt->bindParam(':tipo', $this->tipo);
    $stmt->bindParam(':descripcion', $this->descripcion);
    $stmt->bindParam(':precio', $this->precio);
    return $stmt->execute();
    
    } catch(PDOException $e){
    return $e->getMessage();
    }finally{
    $this->con=null;
    }
        }
        public function actualizar(){
            try{
            $sql= "UPDATE boletos SET tipo=:tipo, descripcion=:descripcion, precio=:precio WHERE id=:id";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam(':tipo', $this->tipo);
        $stmt->bindParam(':descripcion', $this->descripcion);
        $stmt->bindParam(':precio', $this->precio);
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
                $sql= "DELETE FROM boletos WHERE id=:id";
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
                $sql = "Select * from boletos"; 
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
            $sql = "Select * from boletos where id=:id"; 
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

