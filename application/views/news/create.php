<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Create a news item</h2>
        <?php echo validation_errors(); ?>
        <?php echo form_open('news/create'); ?>
        <label for="title">Title</label>
        <input type="input" name="title"/><br/>
        <label for="text">Text</label>
        <textarea name="text"></textarea><br/>
        <input type="submit" name="Submit" value="Create new items"/>
        <?php echo form_close(); ?>
    </body>
</html>