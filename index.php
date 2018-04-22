<?php
/**
 * Created by PhpStorm.
 * User: msv
 * Date: 20.04.18
 * Time: 0:14
 */


try {
    $pdo = new PDO('mysql:host=127.0.0.1:3306;dbname=crud', 'root', 'root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $show = $pdo->query("SELECT * FROM `article` ORDER BY `created_at` DESC")->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    exit($e->getMessage());
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
    <style>
        div a{
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div>
        <a href="create.php">Create article</a>
    </div>
    <?php foreach ($show as $value) : ?>
        <div>
            <p><?php echo $value['name'] ?>
                <a title="update this article" href="update.php?id=<?php echo $value['id'] ?>">&#x270e;</a>
                <a title="delete this article" href="delete.php?id=<?php echo $value['id'] ?>">&#x2718;</a>
            </p>
            <p><?php echo $value['description'] ?></p>
            <p><?php echo $value['created_at'] ?></p>
        </div>
        <hr>
    <?php endforeach; ?>
</body>
</html>
