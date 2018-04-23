<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
</head>
<body>
    <div>
        <a href="create.php">create</a>
    </div>
    <?php foreach ($val as $value) : ?>
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