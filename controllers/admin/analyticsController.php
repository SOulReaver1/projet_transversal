<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/controllers/admin/newletterController.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/controllers/admin/questionnaireController.php';
require_once $_SERVER['DOCUMENT_ROOT']."/factories/mainFactory.php";
$main = new main($pdo);
$questionnaire_page = 2;
$home_page = 1;
$total_views_questionnaire = $main->total_views($questionnaire_page);
$total_views_home = $main->total_views($home_page);
$total_views = $main->total_views();
$stats_questionnaire = $main->statsPages(3, $total_views);
$recordsCount = $questions->recordsCount()[0]->num;
$calcTypeOfProfil = $questions->calcTypeOfProfil();
$statsMail = $newletter->statMail();
$countShare = $questions->countShare();
