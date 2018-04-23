<?php
/**
 * Created by PhpStorm.
 * User: msv
 * Date: 20.04.18
 * Time: 0:14
 */

require_once '../models/Article.php';

$ex = new Article();

$val = $ex->showAll();

require_once '../views/show.php';

?>