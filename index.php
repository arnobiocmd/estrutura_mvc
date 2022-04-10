<?php
require("config\config.php");
require("app\core\Core.php");
require("vendor\autoload.php");


$core = new Core();
$core->run();

/*echo "Controller = ".$core->getController()."<br/>";
echo "Metodo = ".$core->getMetodo()."<br/>";
$parametro = $core->getParametros();

foreach ($parametro as $key => $param) {
    echo "Paramentros = ".$param;
}*/