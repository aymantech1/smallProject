<?php
    include_once '../../../../vendor/autoload.php';
    use App\BITM\SEIP116718\Hobby\Hobby;
    $id = $_GET['id'];
    $showOneData = new Hobby();
    $takeOneData = $showOneData->show($id);
?>
<html>
    <head>
        <title>Hobby</title>
    </head>
    
    <body>
    <table border="1">
        <tr>
            <th>Serial</th>
            <th>Title</th>
            <th>Action</th>
        </tr>
        <tr>
            <td><?php echo $takeOneData['id']?></td>
            <td><?php echo $takeOneData['title']?></td>
            <td>
                <a href="edit.php?id=<?php echo $takeOneData['id']?>">Edit</a> |
                <a href="softDelete.php?id=<?php echo $takeOneData['id']?>">Delete</a> 
            </td>
        </tr>
    </table>
    </body>
    
</html>
