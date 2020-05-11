<?php

require_once $_SERVER['DOCUMENT_ROOT']."/controllers/admin/adminController.php";

if($action == "questionnaire"){
    include("./views/admin/assets/html/questionnaire.php");
}else if($action == "contact"){
    include("./views/admin/assets/html/contact.php");
}
else{
    include("./views/admin/assets/html/dashboard.php");
}