<?php
include_once '../../../../vendor/autoload.php';
use App\BITM\SEIP116718\Hobby\Hobby;

$id = $_GET['id'];

$edit = new Hobby();
$oneData = $edit->show($id);

//echo"<pre>";
//print_r($oneData);
//echo"</pre>";



?>
<html>
<body>
    <fieldset>
        <legend>
            Your Hobby
        </legend>

        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <input type="checkbox" name="myHobby[]" value="Gardening" <?php if(preg_match("/Gardening/", $oneData['title'])){echo "checked";}?>>Gardening<br>
            <input type="checkbox" name="myHobby[]" value="Liberal Arts Pursuits"<?php if(preg_match("/Liberal Arts Pursuits/", $oneData['title'])){echo "checked";}?>>Liberal Arts Pursuits<br>
            <input type="checkbox" name="myHobby[]" value="Sports and Games"<?php if(preg_match("/Sports and Games/", $oneData['title'])){echo "checked";}?>>Sports and Games<br>
            <input type="checkbox" name="myHobby[]" value="friends"<?php if(preg_match("/friends/", $oneData['title'])){echo "checked";}?>>friends<br>
            <input type="submit" value="Submit">
        </form>
    </fieldset>

</body>
</html>