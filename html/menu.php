<?php

require_once('helpers.php');

?>

<?php render('header', array('title' => 'Menu')); ?>

    <table>
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
<?php render('footer'); ?>