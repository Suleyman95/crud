<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit</title>
</head>
<body>
    <div>
        <form method='post' action='../controllers/update.php'>
            <input type='text' name='name' value='<?php echo $show[name] ?>'><br><br>
            <input type='text' name='description' value='<?php echo $show[description] ?>'><br><br>
            <input type="hidden" name="id" value="<?php echo $show[id] ?>">
            <input type="submit" name="btn" value="Update">
        </form>
    </div>
</body>
</html>