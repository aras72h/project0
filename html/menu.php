<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
<?php
    $xml=simplexml_load_file('menu.xml');
    print_r($xml);
?>
</body>
</html>