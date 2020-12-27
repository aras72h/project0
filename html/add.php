<?php
    require_once('helpers.php');
?>

<?php render('header', array('title' => 'cart')); ?>

<h1>Shopping card</h1>

<?php
    
    $order = array(
        0 => array('name' => $_POST['item'], 'quantity' => $_POST['quantity'])
    );
    print_r($order);

?>
<a href="menu.php">Go back</a>
<a href="checkout.php">Checkout</a>

<?php render('footer'); ?>