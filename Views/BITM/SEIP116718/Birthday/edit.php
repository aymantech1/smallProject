<?php

include_once '../../../../vendor/autoload.php';
use App\BITM\SEIP116718\Birthday\Birthday;
$id = $_GET['id'];
session_start();
if (isset($_SESSION['Message'])) {
    echo $_SESSION['Message'];
    unset($_SESSION['Message']);
}

$edit = new Birthday();
$show = $edit->show($id);
?>
<html>
    <head>
        <title>
            Update Your Birthday
        </title>
    </head>
    <body>
        <fieldset>
            <legend>
                Update Your Birthday
            </legend>
            <form action="update.php" method="post">
                <label for="update_id">Update Birthday</label>
                <input type="text" name="title" id="update_id" value="<?php echo $show['title'];?>">
                <input type="submit" value="Update">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                
            </form>
        </fieldset>
    </body>
</html>
