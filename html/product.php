<?php
    require_once('helpers.php');
?>

<?php render('header', array('title' => 'product page')); ?>
    <h1> cheese Pizza </h1>
    <form action="add.php" method="post">
        <input type="text" name="food">
        <input type="submit" name="add" value="Add to Card">
    </form>

<?php render('footer'); ?>