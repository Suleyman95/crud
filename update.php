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

    if(count($_GET)) {
        $id = $_GET['id'];
        $show = $pdo->query("SELECT * FROM `article` WHERE `id` = $id")->fetch();
    }

    if(count($_POST)) {
        $name = $_POST['name']; $description = $_POST['description']; $id = $_POST['id'];
        $pdo->exec("UPDATE `article` SET `name` = '$name', `description` = '$description', `created_at` = NOW() WHERE `id` = $id");
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
    <title>update</title>
</head>
<body>
    <div>
        <form method='post' action='update.php'>
            <input type='text' name='name' value='<?php echo $show[name] ?>'><br><br>
            <input type='text' name='description' value='<?php echo $show[description] ?>'><br><br>
            <input type="hidden" name="id" value="<?php echo $show[id] ?>">
            <input type="submit" name="btn" value="Update">
        </form>
    </div>
</body>
</html>
