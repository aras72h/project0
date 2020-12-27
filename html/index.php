<?php
    session_start();
    require_once('helpers.php');
    $menu = simplexml_load_file('menu.xml');
?>

<?php render('header', array('title' => 'Menu')); ?>

<form action="cart.php" method="post">
    <select name="menu" id="menu">
    <option value="$number">$name $size</option>
    </select>
    <input type="submit" value="Submit">
</form>

<?php render('footer'); ?>