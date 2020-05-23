<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/controllers/admin/newletterController.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/controllers/admin/questionnaireController.php';

$recordsCount = $questions->recordsCount()[0]->num;
$calcTypeOfProfil = $questions->calcTypeOfProfil();