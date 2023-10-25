<?php


namespace MVC\core;

use Dcblogdev\PdoWrapper\Database;

class model{

    static function db(){
        $options = [
            //required
            'username' => DB_USER,
            'database' => DB_NAME,
            //optional
            'password' => DB_PASS,
            'type' => 'mysql',
            'charset' => 'utf8',
            'host' =>DB_HOST,
            'port' => '3306'
        ];

        return  $db = new Database($options);
    }

}

