<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php
        if (file_exists('menu.xml')) {
            $dom=simplexml_load_file('menu.xml');
            foreach ($dom->xpath('/ITEM') as $item){
                print "<li>";
                print $item->NAME;
                print $item->CATEGORY;
                print "</li>";
            }
        } else {
            exit('Failed');
        }
        ?>
    </ul>
</body>
</html>