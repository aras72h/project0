<?php
    session_start();
    require_once('helpers.php');
    $menu = simplexml_load_file('menu.xml')
?>

<?php render('header', array('title' => 'Cart')); ?>

<a href="index.php">Go back</a>
<a href="checkout.php">Checkout</a>

<?php render('footer'); ?>