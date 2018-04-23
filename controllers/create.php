<?php

require_once '../models/Article.php';

if(!empty($_POST["name"]) && !empty($_POST["description"])) {

    $ex = new Article();
    $ex->create($_POST["name"], $_POST["description"]);
    header("Location: index.php");
}

require_once '../views/form.php';

?>
