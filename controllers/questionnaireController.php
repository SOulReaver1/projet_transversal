<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/factories/questionnaireFactory.php';
$questions = new questions($pdo);
$allQuestions = $questions->allQuestions();
require_once $_SERVER['DOCUMENT_ROOT'].'/views/questionnaire/index.php';
