<?php

namespace MVC\models;

use MVC\core\model;

class product extends model {
    private $table='products';


    public function getAllProduct(){
        return model::db()->rows("SELECT * FROM $this->table");
    }

    public function getOneProduct($id){
        return model::db()->row("SELECT * FROM $this->table WHERE id=:id" ,['id'=>$id]);
    }
    public function deleteProduct($id){
        return model::db()->delete($this->table, ['id' => $id]);
    }
    public function addProduct($data){
        return model::db()->insert($this->table,$data);
    }

    public function updateProduct($data,$id){
        return model::db()->update($this->table,$data,$id);
    }




}
