<?php 
define("ROOT",dirname(__FILE__).'/');

include_once 'Config/Config.php';
include_once 'Config/Autoload.php';
Config\Autoload::run();
Config\Bootstrap::run(new Config\Request);


?>