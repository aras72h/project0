
<?php
    require_once('helpers.php');
?>

<?php render('header', array('title' => 'Checkout')); ?>

<h1>Checkout</h1>
<h2>You should pay us</h2>
<form action="">
    <input type="text" name="full_name">
    <input type="text" name="phone">
    <input type="text" name="address">
    <input type="submit" value="Checkout">
</form>

<?php render('footer'); ?>