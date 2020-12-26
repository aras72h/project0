<?php
    require_once('helpers.php');
?>

<?php render('header', array('title' => 'cart')); ?>

<h1>Shopping card</h1>
<pre><?php print_r($_POST); ?></pre>
<a href="menu.php">Go back</a>

<?php render('footer'); ?>