<?php
    require_once('helpers.php');
?>

<?php render('header', array('title' => 'product page')); ?>
    <h1> cheese Pizza </h1>
    <form action="add.php" method="post">
        <select name="item" id="item">
            <option value="tomato">Tomato cheese</option>
            <option value="onion">Onion</option>
        </select>
        <input name="quantity" type="number" min="1" max="10" step="1" value="1">
        <input type="submit" value="Add to Cart">
    </form>

<?php render('footer'); ?>