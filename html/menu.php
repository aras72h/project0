<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
    <ul>
        <?php
            $menu=simplexml_load_file("xml/menu.xml");
            foreach ($menu->xpath("/pizzas/pizza") as $pizza)
            {
                print "<li>";
                print "$pizza->name";
                print "</li>";
            }
        ?>
    </ul>
</body>
</html>