<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editor</title>
</head>
<body>

    <form action="/save.php" method="post">
            <?php if (!$article->isNew()): ?>
            <input type="hidden" name="id" value="<?php echo $article->id; ?>">
        <?php endif; ?>
        <div>
            <lable for="title">Заголовок статьи</lable>
            <input id="title" name="title" type="text" value="<?php echo $article->title;?>">
        </div>
        <div>
            <lable for="text">Заголовок статьи</lable>
            <textarea id="text" name="text" type="text"><?php echo $article->text;?></textarea>
        </div>
        <button type="submit">Отправить</button>
    </form>
</body>
</html>