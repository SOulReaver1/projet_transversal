<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/factories/questionnaireFactory.php';
$questions = new questions($pdo);
$allQuestions = $questions->allQuestions();
if($event == "delete-question" && $_POST){
    $delete = $questions->deleteQuestion($_POST["question"]);
    header("Location: /admin/questionnaire");
}else if($event == "addQuestion" && $_POST){
    $addQuestion = $questions->addQuestion($_POST);
    header("Location: /admin/questionnaire");
}else if($event == "edit" && $_POST){
     $editQuestion = $questions->editQuestion($_POST);
     header("Location: /admin/questionnaire");
}