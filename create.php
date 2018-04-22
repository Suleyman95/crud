<?php
/**
 * Created by PhpStorm.
 * User: msv
 * Date: 20.04.18
 * Time: 23:50
 */

try {
    $pdo = new PDO('mysql:host=127.0.0.1:3306;dbname=crud', 'root', 'root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(count($_POST)) {
        $name = $_POST['name']; $description = $_POST['description'];
        $pdo->exec("INSERT INTO `article` VALUES(NULL, '$name', '$description', NOW())");
        header("Location: index.php");
    }

} catch (PDOException $e) {
    exit($e->getMessage());
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>

    <div>
        <form method='post' action='create.php'>
            <input type='text' name='name'><br><br>
            <input type='text' name='description'><br><br>
            <input type="submit" value="Add">
        </form>
    </div>

</body>
</html>
