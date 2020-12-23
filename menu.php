<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (file_exists('menu.xml')) {
        $xml=simplexml_load_file('menu.xml');
        print_r($xml);
    } else {
        exit('Failed');
    }
    ?>
</body>
</html>