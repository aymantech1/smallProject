<?php

namespace App\BITM\SEIP116718\Gender;
error_reporting(E_ALL ^ E_DEPRECATED);

class Gender {
    public $id = '';
    public $title = '';
    
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
        
        return $this;
    }
    public function storeDataInDatabase(){
        session_start();
        $query = "INSERT INTO `genders` (`id`, `title`) VALUES (NULL, '".$this->title."')";
        
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
        $query = "SELECT * FROM `genders` WHERE delete_at IS NULL";
        $result = mysql_query($query);
        while($row = mysql_fetch_assoc($result)){
            $mydata[] = $row;
        }
        return $mydata;
    }
    public function show($id=''){
            $this->id = $id;
            $query ="SELECT * FROM genders WHERE id=".$this->id ;
            $result = mysql_query($query);
            $row = mysql_fetch_assoc($result);
            return $row;
    }
    
    public function update(){
            $query = "UPDATE `atomicproject`.`genders` SET `title` = '".$this->title."' WHERE `genders`.`id` =".$this->id;
            mysql_query($query);
            $_SESSION['Message'] = "<h2>" . "Data Successfully Updated" . "</h2>";
        header('location:index.php');
    }
    
    public function softdelete(){
        session_start();
        $query = "UPDATE `atomicproject`.`genders` SET `delete_at` = '".date('Y-m-d')."' WHERE `genders`.`id` =".$this->id;
        mysql_query($query);
        $_SESSION['Message'] = "<h1>" . "Deleted Successfully" . "</h1>";
        header('location:index.php');
    }
    
    public function deleteitems(){
        $mydata = array();
        $qurey = "SELECT * FROM `genders` WHERE delete_at IS Not NULL";
        $result = mysql_query($qurey);
        while($row = mysql_fetch_assoc($result)){
            $mydata[] = $row;
        }
        return $mydata;
    }
    
    public function restoreData($id=''){
        session_start();
        $this->id = $id;
        $qurey = "UPDATE `genders` SET `delete_at` = NULL WHERE `genders`.`id` =".$this->id;
        $result = mysql_query($qurey);
        $_SESSION['Message'] = "<h2>" . "Data Successfully Restore" . "</h2>";
        header('location:index.php');
        
    }
    
    public function permanentDelete($id=''){
        $this->id= $id;
        $query = "DELETE FROM `atomicproject`.`genders` WHERE `genders`.`id` =".$this->id;
        mysql_query($query);
        $_SESSION['Message'] = "<h1>". "Deleted Successfully" ."</h1>";
        header('location:index.php');
        $_SESSION['Message'] = "<h1>". "Deleted Successfully" ."</h1>";
    }
}
