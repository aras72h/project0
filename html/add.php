<?php
    require_once('helpers.php');
?>

<?php render('header', array('title' => 'cart')); ?>

<h1>Shopping card</h1>

<?php
    
    $item = $_POST['item'];
    $quantity = $_POST['number'];
    $order = "you ordered " . $number . " " . $item ;
    print_r($item);

?>
<a href="menu.php">Go back</a>
<a href="#">Checkout</a>

<?php render('footer'); ?>