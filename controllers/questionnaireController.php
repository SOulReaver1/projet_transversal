<?php
require_once $_SERVER['DOCUMENT_ROOT']."/factories/mainFactory.php";
$main = new main($pdo);
$page_id = 2;
$visitor_ip = $_SERVER['REMOTE_ADDR'];
$total_views = $main->total_views($page_id);
$add_views = $main->add_view($visitor_ip, $page_id);
require_once $_SERVER['DOCUMENT_ROOT'].'/factories/questionnaireFactory.php';
$questions = new questions($pdo);
$allQuestions = $questions->allQuestions();
if($action == "resultat-ecolo" && $_POST){
    $totalPoints = 0;
    foreach ($_POST as $key => $value) {
        foreach($questions->allAnswers($key) as $v){
            $totalPoints = $totalPoints + $v->points;
        }
    }
    if($totalPoints <= 15){
        $getProfil = $questions->getProfil(4);
        $getConseils = $questions->getConseils(4);
    }else if($totalPoints <= 30 && $totalPoints > 15){
        $getProfil = $questions->getProfil(3);
        $getConseils = $questions->getConseils(3);
    }else if($totalPoints <= 45 && $totalPoints > 30){
        $getProfil = $questions->getProfil(2);
        $getConseils = $questions->getConseils(2);
    }else if($totalPoints <= 60 && $totalPoints > 45){
        $getProfil = $questions->getProfil(1);
        $getConseils = $questions->getConseils(1);
    }
    $record = $questions->recordQuestion($getProfil[0]->idProfil);
    require_once $_SERVER['DOCUMENT_ROOT'].'/views/questionnaire/assets/html/resultatEcolo.php';
}
else{
    if($action == "newsletter" && $_POST){
        require_once $_SERVER['DOCUMENT_ROOT'].'/controllers/admin/newletterController.php';
    }else if($action == "shareResultOnNetwork" && $_POST){
        $shareResultOnNetwork = $questions->shareResultOnNetwork($_SERVER['REMOTE_ADDR']);
        header("Location: /questionnaire?share=true");
    }
    require_once $_SERVER['DOCUMENT_ROOT'].'/views/questionnaire/index.php';
}