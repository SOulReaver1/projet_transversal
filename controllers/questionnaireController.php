<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/factories/questionnaireFactory.php';

require_once("/views/questionnaire/index.php")
$questions = new questions($pdo);
$allQuestions = $questions->allQuestions();
