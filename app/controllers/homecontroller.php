<?php

namespace MVC\controllers;

use MVC\core\controller;

class homecontroller extends controller{
    public function index(){
        $data['title']="crud_mvc";

        controller::view('home',$data);

    }


}
