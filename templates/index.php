<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная страница</title>
    <style>
        .title { background: silver; color:white;}
        .text { background: gold; color:darkblue;}
        a {color: darkblue }
    </style>
</head>
<body>
    <a href="#">Добавить новость</a>
    <a href="#">Редактировать новость</a>
    <h1>Все новости</h1>
    <ul>
    <?php
        foreach ($news as $article) : ?>
            <li class="title"><?php echo $article->title; ?></li>
            <li class="text"><?php echo $article->text; ?></li>

            <?php if (!empty($article->author)) : ?>
                Автор: <?php echo $article->author->name; ?>
            <?php endif;?>
        <?php endforeach; ?>
    </ul>
</body>
</html>




