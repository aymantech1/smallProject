<?php

namespace App\BITM\SEIP116718\Email;
error_reporting(E_ALL ^ E_DEPRECATED);

class Email {
   
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
        $query = "INSERT INTO `emails` (`id`, `title`) VALUES (NULL, '".$this->title."')";
        
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
        $query = "SELECT * FROM `emails` WHERE delete_at IS NULL";
        $result = mysql_query($query);
        while($row = mysql_fetch_assoc($result)){
            $mydata[] = $row;
        }
        return $mydata;
    }
    
    public function show($id=''){
            $this->id = $id;
            $query ="SELECT * FROM emails WHERE id=".$this->id ;
            $result = mysql_query($query);
            $row = mysql_fetch_assoc($result);
            return $row;
    }
    
    public function update(){
            $query = "UPDATE `atomicproject`.`emails` SET `title` = '".$this->title."' WHERE `emails`.`id` =".$this->id;
            mysql_query($query);
            $_SESSION['Message'] = "<h2>" . "Data Successfully Updated" . "</h2>";
        header('location:index.php');
    }
    
    public function softdelete(){
        session_start();
        $query = "UPDATE `atomicproject`.`emails` SET `delete_at` = '".date('Y-m-d')."' WHERE `emails`.`id` =".$this->id;
        mysql_query($query);
        $_SESSION['Message'] = "<h1>" . "Deleted Successfully" . "</h1>";
        header('location:index.php');
    }
    
    public function deleteitems(){
        $mydata = array();
        $qurey = "SELECT * FROM `emails` WHERE delete_at IS Not NULL";
        $result = mysql_query($qurey);
        while($row = mysql_fetch_assoc($result)){
            $mydata[] = $row;
        }
        return $mydata;
    }
    
    public function restoreData($id=''){
        session_start();
        $this->id = $id;
        $qurey = "UPDATE `emails` SET `delete_at` = NULL WHERE `emails`.`id` =".$this->id;
        $result = mysql_query($qurey);
        $_SESSION['Message'] = "<h2>" . "Data Successfully Restore" . "</h2>";
        header('location:index.php');
        
    }
    
    public function permanentDelete($id=''){
        $this->id= $id;
        $query = "DELETE FROM `atomicproject`.`emails` WHERE `emails`.`id` =".$this->id;
        mysql_query($query);
        $_SESSION['Message'] = "<h1>". "Deleted Successfully" ."</h1>";
        header('location:index.php');
        $_SESSION['Message'] = "<h1>". "Deleted Successfully" ."</h1>";
    }
}
