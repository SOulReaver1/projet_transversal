<?php
session_start();

/**************
 * ROUTER 
 *************/

// on récupère l'url
$url = $_SERVER["REQUEST_URI"];
// on récupère le path
$path = parse_url($url, PHP_URL_PATH);

@list($null, $controller, $action, $event) = explode("/", $path);

$controller = !empty($controller) ? $controller : "main";

// on récupère les paramètres
$parameters = $_GET;

require_once $_SERVER['DOCUMENT_ROOT']."/config/secret.php";

$pdo = new PDO('mysql:dbname='.$secret["db"]["dbname"].';host='.$secret["db"]["host"], $secret["db"]["username"], $secret["db"]['pwd'], array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// on va décider du controller qui va gérer
if($controller == "main"){
  require_once $_SERVER['DOCUMENT_ROOT']."/controllers/mainController.php";
}else if($controller == "admin"){
  require_once $_SERVER['DOCUMENT_ROOT']."/controllers/admin/adminController.php";
}else if($controller == "questionnaire"){
  require_once $_SERVER['DOCUMENT_ROOT']."/controllers/questionnaireController.php";
}
else{
  require_once $_SERVER['DOCUMENT_ROOT']."/controllers/404Controller.php";
}