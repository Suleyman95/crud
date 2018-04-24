<?php

/**
 *
 *
 */

require_once '../models/Article.php';

$ex = new Article();

$val = $ex->showAll();

require_once '../views/show.php';