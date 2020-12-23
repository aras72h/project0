<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table style="width:100% border:1px solid black">
        <tr>
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
        </tr>
        <?php
        if (file_exists('menu.xml')) {
            $dom=simplexml_load_file('menu.xml');
            foreach ($dom->xpath('/ITEM') as $item){
                print "<tr>";
                print "<td>";
                print $item->NAME;
                print "</td>";
                print "<td>";
                print $item->CATEGORY;
                print "</td>";
                print "<td>";
                print $item->PRICE;
                print "</td>";
                print "</tr>";
            }
        } else {
            exit('Failed');
        }
        ?>
    </table>
</body>
</html>