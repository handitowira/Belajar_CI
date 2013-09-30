<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<h1>Welcome to my blog!</h1>
<h3>
    <?php echo $message; ?>
</h3>
<h4>to do list</h4>
<?php foreach ($todo_list as $items): ?>
    <li><?php echo $items; ?></li>
<?php endforeach; ?>