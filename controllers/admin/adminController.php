<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/factories/adminFactory.php';

if($action == "connect" && $_POST){
    require_once $_SERVER['DOCUMENT_ROOT']."/controllers/admin/library/login.php";
}else if($action == "questionnaire"){
    require_once $_SERVER['DOCUMENT_ROOT']."/controllers/admin/questionnaireController.php";
}else if($action == "contact"){
    require_once $_SERVER['DOCUMENT_ROOT']."/controllers/admin/newletterController.php";
}else if($action == null){
    require_once $_SERVER['DOCUMENT_ROOT']."/controllers/admin/analyticsController.php";
}

if(!isset($_SESSION["login"])){
    require_once $_SERVER['DOCUMENT_ROOT']."/views/admin/login.html";
}else{
    require_once $_SERVER['DOCUMENT_ROOT']."/views/admin/adminConnect.php";
}
