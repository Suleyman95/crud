<?php

require_once '../models/Article.php';

$ex = new Article();
if(!empty($_GET['id'])) {
    $show = $ex->update($_GET['id']);
}

if(!empty($_POST["name"]) && !empty($_POST["description"])) {
    $name = $_POST['name']; $description = $_POST['description']; $id = $_POST['id'];
    $ex->update($id, $name, $description);
    header("Location: index.php");
}

require_once '../views/edit.php';

?>