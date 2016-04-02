<?php

include_once '../../../../vendor/autoload.php';
use App\BITM\SEIP116718\Birthday\Birthday;

session_start();
if (isset($_SESSION['Message'])) {
    echo $_SESSION['Message'];
    unset($_SESSION['Message']);
}

$delitem = new Birthday();
$allDeleteBirthDays = $delitem->deleteitems();

//echo "<pre>";
//print_r($allDeleteBirthDays);
//echo "</pre>";
?>
<html>
    <head>
        <title>Soft Delete Item</title>
    </head>
    <body>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Action</th>
            </tr>
            <?php
            $serial = 0;
            foreach ($allDeleteBirthDays as $row) {
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
