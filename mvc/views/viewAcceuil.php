<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="<?php echo URL; ?>">Mon Blog</a>
    <?php
        foreach ($articles as $article) { ?>
            <h2><?php echo $article->getTitle(); ?></h2>
            <p><?php echo $article->getContent(); ?></p>
            <time><?php echo $article->getDate(); ?></time>
        <?php } ?>
</body>
</html>