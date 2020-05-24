<?php

require_once $_SERVER['DOCUMENT_ROOT']."/factories/mainFactory.php";
$main = new main($pdo);
$page_id = 1;
$visitor_ip = $_SERVER['REMOTE_ADDR'];
$total_views = $main->total_views($page_id);
$add_views = $main->add_view($visitor_ip, $page_id);
require_once("./views/main-index.php");
