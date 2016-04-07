<?php
namespace App\BITM\SEIP116718\Profilepic;
error_reporting(E_ALL ^ E_DEPRECATED);
class Profilepic {
    
    public $id ='';
    public $title ='';
    public $user_name='';
    public $image_name='';
    
    public function __construct() {
        $con = mysql_connect('localhost', 'root', '') or die('Unable to connect ');
        mysql_select_db('atomicproject') or die('Unable to select DB');
    }
    
    public function prepare($data = '') {
        if (array_key_exists('user_name', $data) && !empty($data['user_name'])) {
            $this->user_name = $data['user_name'];
        }
        if (array_key_exists('image', $data) && !empty($data['image'])) {
            $this->image_name = $data['image'];
        }
        if (array_key_exists('id', $data) && !empty($data['id'])) {
            $this->id = $data['id'];
        }
        return $this;
    }
    
    public function store(){
        $query ="INSERT INTO `profilepic` (`id`, `image`, `user_name`) VALUES (NULL, '".$this->image_name."', '".$this->user_name."')";
        if (mysql_query($query)) {
            session_start();
            $_SESSION['Message'] = "Profile Picture Uploaded";
            header('location:create.php');
        }
    }
    
    public function update(){
       
        session_start();
        if (isset($this->image_name) && !empty($this->image_name)) {
            $query = "UPDATE `profilepic` SET `user_name` = '" . $this->user_name . "', `image` = '" . $this->image_name . "' WHERE `profilepic`.`id` =" . $this->id;
        } else {
            $query = "UPDATE `profilepic` SET `user_name` = '" . $this->user_name . "' WHERE `profilepic`.`id` =" . $this->id;
        }
         mysql_query($query);
        $_SESSION['Message'] = "<h2>" . "Data Successfully Updated" . "</h2>";
        header('location:index.php');
       
        
    }

    public function index(){
        $mydata = array();
        $query ="SELECT * FROM `profilepic` WHERE delete_at IS NULL";
        $result = mysql_query($query);
        while ($row = mysql_fetch_assoc($result)) {
            $mydata[] = $row;
        }
        return $mydata;
        header('location:index.php');
    }
    public function show($id = '') {
        $this->id = $id;
        $query = "SELECT * FROM `profilepic` WHERE id=" . $this->id;
        $result = mysql_query($query);
        $row = mysql_fetch_assoc($result);
        return $row;
    }
    
    public function deleteItem(){
        $mydata = array();
        $query ="SELECT * FROM `profilepic` WHERE delete_at IS NOT NULL";
        $result = mysql_query($query);
        while ($row = mysql_fetch_assoc($result)) {
            $mydata[] = $row;
        }
        return $mydata;
    }
    
    public function softDelete(){
        session_start();
        $query = "UPDATE `atomicproject`.`profilepic` SET `delete_at` = '".date('Y-m-d')."' WHERE `profilepic`.`id` =".$this->id;
        mysql_query($query);
        $_SESSION['Message'] = "<h1>" . "Deleted Successfully" . "</h1>";
        header('location:index.php');
    }
    
    public function delete($id=''){
        $this->id= $id;
        $query = "DELETE FROM `atomicproject`.`profilepic` WHERE `profilepic`.`id` =".$this->id;
        mysql_query($query);
        $_SESSION['Message'] = "<h1>". "Deleted Successfully" ."</h1>";
        header('location:index.php');
        $_SESSION['Message'] = "<h1>". "Deleted Successfully" ."</h1>";
    }
    
    public function restoreData($id){
        session_start();
        $this->id = $id;
        $qurey = "UPDATE `profilepic` SET `delete_at` = NULL WHERE `profilepic`.`id` =".$this->id;
        $result = mysql_query($qurey);
        $_SESSION['Message'] = "<h2>" . "Data Successfully Restore" . "</h2>";
        header('location:index.php');
    }
    
    public function error(){
        session_start();
        $_SESSION['Message'] = "<h2>" . "Field Can not be empty" . "</h2>";
        header('location:edit.php');
    }
    
    
}
