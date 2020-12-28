<?php
    session_start();
    require_once('helpers.php');
    $menu = simplexml_load_file('menu.xml');
    $item_number = $menu->xpath('/ITEM['number']');
    $name = $menu->xpath('/ITEM/NAME');
    $size = $menu->xpath('/ITEM/SIZE');
?>

<?php render('header', array('title' => 'Menu')); ?>

<?php echo $item_number <br> $name <br> $size ?>
<form action="cart.php" method="post">
    <select name="item" id="item">
    <option value="number">$name $size</option>
    </select>
    <input type="submit" value="Submit">
</form>

<?php render('footer'); ?>