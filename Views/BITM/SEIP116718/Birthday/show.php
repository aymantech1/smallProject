<?php
include_once '../../../../vendor/autoload.php';
use App\BITM\SEIP116718\Birthday\Birthday;
$id = $_GET['id'];

$birthday = new Birthday();

$oneBirthDay = $birthday->show($id);

?>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Created</th>
        <th>Action</th>
    </tr>
    <tr>
        <td><?php echo $oneBirthDay['id'];?></td>
        <td><?php echo $oneBirthDay['title']?></td>
        <td><?php echo $oneBirthDay['created_at']?></td>
        <td><a href="edit.php?id=<?php echo $oneBirthDay['id'];?>">Edit</a> |
            <a href="#">Delete</a> 
        </td>
    </tr>
</table>
        
