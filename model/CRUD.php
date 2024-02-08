<?php

abstract class CRUD extends PDO {

     public function __construct(){
         parent::__construct('mysql:host=localhost; dbname=recette; port=8888; charset=utf8', 'root', '');
     }

     // public function __construct(){
       //parent::__construct('mysql:host=localhost; dbname=e2395236; port=8888; charset=utf8', 'e2395236', 'Ey64oDuRuznu8EheWRf4');
   // }        //pour webdev, ne pas enlever svp


    public function select($field='id', $order='ASC'){
        $sql="SELECT * FROM $this->table ORDER BY $field $order";
        $stmt = $this->query($sql);
        return $stmt->fetchAll();
    }

    public function selectId($value){
        $sql="SELECT * FROM $this->table WHERE $this->primaryKey = '$value'";
        $stmt = $this->query($sql);
        $count = $stmt->rowCount();
        if($count == 1){
            return $stmt->fetch();
        }else{
          RequirePage::url('home/error/404');
        }  
    }

  
    

    public function insert($data){

        $data_keys = array_fill_keys($this->fillable, '');
        $data = array_intersect_key($data, $data_keys);

        $nomChamp = implode(", ",array_keys($data));
        $valeurChamp = ":".implode(", :", array_keys($data));

        $sql = "INSERT INTO $this->table ($nomChamp) VALUES ($valeurChamp)";

        $stmt = $this->prepare($sql);
        foreach($data as $key => $value){
            $stmt->bindValue(":$key", $value);
        }
        $stmt->execute();

        return $this->lastInsertId();

    }

    public function delete($value){

        $sql = "DELETE FROM $this->table WHERE $this->primaryKey = :$this->primaryKey";
        $stmt = $this->prepare($sql);
        $stmt->bindValue(":$this->primaryKey", $value);
        if($stmt->execute()){
            return true;
        }else{
            return $stmt->errorInfo();
        }
    }
    public function update($id, $data) {
        $queryFields = [];
        foreach ($data as $key => $value) {
            $queryFields[] = "$key = :$key";
        }
        $queryFieldString = implode(", ", $queryFields);
    
        $sql = "UPDATE {$this->table} SET $queryFieldString WHERE {$this->primaryKey} = :primaryKey";
        $stmt = $this->prepare($sql);
    
        foreach ($data as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }
        $stmt->bindValue(":primaryKey", $id);
    
        if (!$stmt->execute()) {
          
            return false;
        }
        return true;
    }
    
  





}


?>