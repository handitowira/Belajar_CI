<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php foreach ($news as $news_item): ?>
            <h2><?php echo $news_item['title'] ?></h2>
            <div id="main">
                <?php echo $news_item['text'] ?>
            </div>
            <p><a href="<?php echo $news_item['slug'] ?>">View Article</a></p>
        <?php endforeach; ?>
    </body>
</html>