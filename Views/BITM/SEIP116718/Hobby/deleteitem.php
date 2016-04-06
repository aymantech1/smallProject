<?php

include_once '../../../../vendor/autoload.php';
use App\BITM\SEIP116718\Hobby\Hobby;

$deleteiteminfo = new Hobby();
$allDeleteItem = $deleteiteminfo->deleteItem();

//echo "<pre>";
//print_r($allDeleteItem);
//echo "</pre>";
?>
<html>
    <head>
        <title>Soft Delete Item</title>
    </head>
    <body>
        <a href="index.php">Home Page</a>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Action</th>
            </tr>
            <?php
                $serial = 0;
                foreach ($allDeleteItem as $row) {
                   $serial++;
                   ?>
                   <tr>
                       <td><?php echo $serial; ?></td>
                       <td><?php echo $row['title']; ?></td>
                       <td>
                            <a href="restore.php?id=<?php echo $row['id']?>">Restore</a>
                            <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                       </td>
                   </tr>
            <?php
                }
            ?>
        </table>
    </body>
</html>