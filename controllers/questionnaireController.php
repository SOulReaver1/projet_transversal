<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/factories/questionnaireFactory.php';
$questions = new questions($pdo);
$allQuestions = $questions->allQuestions();

if($action == "resultat-ecolo"){
    require_once $_SERVER['DOCUMENT_ROOT'].'/views/questionnaire/assets/html/resultatEcolo.php';
}else{
    require_once $_SERVER['DOCUMENT_ROOT'].'/views/questionnaire/index.php';
}