<?php

require_once('../includes/helpers.php');

// determine which page to render
if (isset($_GET['page']))
    $page = $_GET['page'];
else
    $page = 'index';
    
// show page
switch ($page)
{
    case 'index':
        render('templates/header', array('title' => 'PizzaML'));
        render('index');
        render('templates/footer');
        break;

    case 'menu':
        render('templates/header', array('title' => 'Menu'));
        render('menu');
        render('templates/footer');
        break;

    case 'cart':
        if (isset($_GET['n']))
        {
            render('templates/header', array('title' => 'Shopping Cart ' . $_GET['n']));
            render('cart', array('n' => $_GET['n']));
            render('templates/footer');
        }
        break;
}

?>