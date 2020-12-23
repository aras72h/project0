<ul>
<?php
$menu = simplexml_load_file("../xml/menu.xml");

foreach ($menu->xpath("/menu/category") as $category)
         {
             print "<li>";
             print $category->item;
             print "</li>";
         }
?>
</ul>