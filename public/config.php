<?php

//define files paths

define('DS',DIRECTORY_SEPARATOR);
define('ROOT',dirname(__DIR__). DS);
define('APP',ROOT.'app'.DS);
define('CORE',APP.'core'.DS);
define('MODELS',APP.'models'.DS);
define('VIEWS',APP.'views');
define('CONTROLLERS',APP.'controllers'.DS);


//define domain
define('BURL','http://crud_mvc.test/');

//define database constant
define('DB_NAME','crud_mvc');
define('DB_PASS','');
define('DB_USER','root');
define('DB_HOST','localhost');

require_once ('../vendor/autoload.php');

require_once (CORE.'helper.php');
$app=new MVC\core\app();

