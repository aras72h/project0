<?php
    require_once('helpers.php');
?>

<?php render('header', array('title' => 'cart')); ?>

<h1>Shopping card</h1>

<?php
    
    $order[$_POST['item']] = $_POST['number'];
    print_r($order);

?>
<a href="menu.php">Go back</a>
<a href="#">Checkout</a>

<?php render('footer'); ?>