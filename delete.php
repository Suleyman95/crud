<?php
/**
 * Created by PhpStorm.
 * User: msv
 * Date: 20.04.18
 * Time: 23:51
 */

try {
    $pdo = new PDO('mysql:host=127.0.0.1:3306;dbname=crud', 'root', 'root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(count($_GET)) {
        $id = $_GET['id'];
        $pdo->exec("DELETE FROM `article` WHERE `id` = $id");
        header('Location: index.php');
    }

} catch (PDOException $e) {
    exit($e->getMessage());
}
?>