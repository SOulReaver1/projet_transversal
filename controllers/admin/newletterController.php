<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/factories/newletterFactory.php';

$newletter = new newletter($pdo);
$getEmail = $newletter->getEmail();
$countEmail = $newletter->countMails()[0]->num;
$countMonthEmail = $newletter->countMonthMails()[0]->num;
if($_POST){
    $insertNewMail = $newletter->insertNewMail($_POST["newsletterEmail"]);
    header("Location: /questionnaire?mail=true");
}