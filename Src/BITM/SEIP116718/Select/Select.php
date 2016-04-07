<?php
namespace App\BITM\SEIP116718\Select;
error_reporting(E_ALL ^ E_DEPRECATED);
class Select {
    public $id = '';
    public $title = '';
    public $create_at ='';
    public $update_at='';


    public function __construct() {
        $con = mysql_connect('localhost', 'root', '') or die('Unable to connect ');
        mysql_select_db('atomicproject') or die('Unable to select DB');
    }
    
    public function prepare($data = ''){
        if(array_key_exists('id', $data)){
            $this->id = $data['id'];
        }
        
        if(array_key_exists('title', $data)){
            $this->title = $data['title'];
        }
        
        if(array_key_exists('create_at', $data)){
            $this->create_at = $data['create_at'];
        }
        
        if(array_key_exists('update_at', $data)){
            $this->update_at = $data['update_at'];
        }
        
        return $this;
    }
    public function storeDataInDatabase(){
        session_start();
        $query = "INSERT INTO `selects` (`id`, `title`,create_at) VALUES (NULL, '".$this->title."','".$this->create_at."')";
        
        if(mysql_query($query)){
            $_SESSION['Massage'] = "Successfully Done";
        }
        
        else{
            $_SESSION['Massage'] = "Not Done By Me Sorry ";
        }
        
         header('location:create.php');
    }
    
    public function index(){
        $mydata = array();
        $query = "SELECT * FROM `selects` WHERE delete_at IS NULL";
        $result = mysql_query($query);
        while($row = mysql_fetch_assoc($result)){
            $mydata[] = $row;
        }
        return $mydata;
    }
    
    public function show($id=''){
            $this->id = $id;
            $query ="SELECT * FROM selects WHERE id=".$this->id ;
            $result = mysql_query($query);
            $row = mysql_fetch_assoc($result);
            return $row;
    }
    
    public function update(){
            $query1 = "UPDATE `atomicproject`.`selects` SET `title` = '".$this->title."' WHERE `selects`.`id` =".$this->id;
            $query2 = "UPDATE `selects` SET `update_at` = '".$this->update_at."' WHERE `selects`.`id` =".$this->id;
            mysql_query($query1);
            mysql_query($query2);
            $_SESSION['Message'] = "<h2>" . "Data Successfully Updated" . "</h2>";
        header('location:index.php');
    }
    
    public function softdelete(){
        session_start();
        $query = "UPDATE `atomicproject`.`selects` SET `delete_at` = '".date('Y-m-d')."' WHERE `selects`.`id` =".$this->id;
        mysql_query($query);
        $_SESSION['Message'] = "<h1>" . "Deleted Successfully" . "</h1>";
        header('location:index.php');
    }
    
    public function deleteitems(){
        $mydata = array();
        $qurey = "SELECT * FROM `selects` WHERE delete_at IS Not NULL";
        $result = mysql_query($qurey);
        while($row = mysql_fetch_assoc($result)){
            $mydata[] = $row;
        }
        return $mydata;
    }
    
    public function restoreData($id=''){
        session_start();
        $this->id = $id;
        $qurey = "UPDATE `selects` SET `delete_at` = NULL WHERE `selects`.`id` =".$this->id;
        $result = mysql_query($qurey);
        $_SESSION['Message'] = "<h2>" . "Data Successfully Restore" . "</h2>";
        header('location:index.php');
        
    }
    
    public function permanentDelete($id=''){
        $this->id= $id;
        $query = "DELETE FROM `atomicproject`.`selects` WHERE `selects`.`id` =".$this->id;
        mysql_query($query);
        $_SESSION['Message'] = "<h1>". "Deleted Successfully" ."</h1>";
        header('location:index.php');
        $_SESSION['Message'] = "<h1>". "Deleted Successfully" ."</h1>";
    }
}
