<?php

require_once '../models/Article.php';

$ex = new Article();

if (!empty($_GET['id'])) {
    $ex->delete($_GET['id']);
    header("Location: index.php");
}