<?php

namespace MVC\controllers;

use MVC\core\controller;
use MVC\core\helper;
use MVC\models\product;

class productcontroller{
    public $db;
    public function __construct(){
        $this->db=new product();
    }

    public function index(){
        controller::view('home');
    }

    public function show(){
        $data['products']=$this->db->getAllProduct();
        controller::view('index',$data);
    }
    public function add(){
        controller::view('add');
    }
    public function store(){
            if(isset($_POST['submit'])){
                $name=trim($_POST['name']);
                $price=trim($_POST['price']);
                $description=trim($_POST['description']);
                $quantity=trim($_POST['quantity']);

                $data = [
                    'name' =>$name,
                    'price' =>$price ,
                    'description' =>$description ,
                    'quantity'=>$quantity

                ];

                if($this->db->addProduct($data)){

                    controller::view('add',['success'=>'data added successfully']);
                }else{

                    controller::view('add',['errors'=>'data not added']);
                }

            }
    }

    public function delete($id){
        $row=$this->db->getOneProduct($id);
        if($row){
            $this->db->deleteProduct($id);
            $data['success']="product deleted";
            controller::view('delete',$data);
            header("refresh:1;/product/show");
        }else{
            $data['errors']="error in deleted";
            controller::view('delete',$data);
        }
    }
    public function edit($id){
        $data['products']=$this->db->getOneProduct($id);
//        var_dump($data['products']);die;
        controller::view('edit',$data);
    }

    public function update($id){
//        var_dump($_POST);die;
        if(isset($_POST['submit'])){
            $name=$_POST['name'];
            $price=$_POST['price'];
            $description=$_POST['description'];
            $quantity=$_POST['quantity'];

            $data = [
                'name' =>$name,
                'price' =>$price ,
                'description' =>$description ,
                'quantity'=>$quantity
            ];


            if ($this->db->updateProduct($data,['id'=>$id])){
                controller::view('update',['success'=>'data updated successfully']);
                header("refresh:1;/product/show");
            }else{
                controller::view('update',['errors'=>'data not updated']);
                header("refresh:1;/product/show");
            }


        }

    }



}
