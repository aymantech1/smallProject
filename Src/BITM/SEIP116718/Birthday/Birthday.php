<?php

namespace App\BITM\SEIP116718\Birthday;
class Birthday {
    
    public $id = "";
    public $title = "";
    
    public function __construct() {
        $conn = mysql_connect('localhost', 'root', '') or die("Unable to connect");
        mysql_select_db('atomicproject') or die('Unable to connect with DB');
    }
    
    public function prepare($data = ""){
        $this->title = $data['title'];
        
        $this->id = $data['id'];
        
        //echo $this->title;
    }
    
    public function storeDataInDatabase(){
        session_start();
        
        $query ="INSERT INTO `birthdays` (`id`, `title`) VALUES (NULL, '".$this->title."');";
        
        if(mysql_query($query)){
            $_SESSION['Massage'] = "Successfully Done";
        }
        else
            $_SESSION['Massage'] = "Not Done By Me Sorry ";
        
        header('location:create.php');
    }
    
    public function index(){
        $mydata = array();
        $qurey = "SELECT * FROM `birthdays`WHERE deleted_at IS NULL";
        $result = mysql_query($qurey);
        while($row = mysql_fetch_assoc($result)){
            $mydata[] = $row;
        }
        return $mydata;
    }
    
    public function show($id=''){
        $this->id = $id;
        $qurey = "SELECT * FROM `birthdays` WHERE id = ".$this->id;
        $result = mysql_query($qurey);
        $row = mysql_fetch_assoc($result);
        return $row;
    }
    
    public function update(){
        $query = "UPDATE `birthdays` SET `title` = '".$this->title."' WHERE `birthdays`.`id` =".$this->id;
        mysql_query($query);
        $_SESSION['Message'] = "<h2>" . "Data Successfully Updated" . "</h2>";
        header('location:index.php');
    }
    
    public function softdelete(){
        session_start();
        $query = "UPDATE `atomicproject`.`birthdays` SET `deleted_at` = '".date('Y-m-d')."' WHERE `birthdays`.`id` =".$this->id;
        mysql_query($query);
        $_SESSION['Message'] = "<h1>" . "Deleted Successfully" . "</h1>";
        header('location:index.php');
    }
    
    public function deleteitems(){
        $mydata = array();
        $qurey = "SELECT * FROM `birthdays` WHERE deleted_at IS Not NULL";
        $result = mysql_query($qurey);
        while($row = mysql_fetch_assoc($result)){
            $mydata[] = $row;
        }
        return $mydata;
    }
    
    public function restoreData($id=''){
        session_start();
        $this->id = $id;
        $qurey = "UPDATE `birthdays` SET `deleted_at` = NULL WHERE `birthdays`.`id` =".$this->id;
        $result = mysql_query($qurey);
        $_SESSION['Message'] = "<h2>" . "Data Successfully Restore" . "</h2>";
        header('location:index.php');
        
    }
    public function permanentDelete($id=''){
        $this->id= $id;
        $query = "DELETE FROM `atomicproject`.`birthdays` WHERE `birthdays`.`id` =".$this->id;
        mysql_query($query);
        $_SESSION['Message'] = "<h1>". "Deleted Successfully" ."</h1>";
        header('location:index.php');
        $_SESSION['Message'] = "<h1>". "Deleted Successfully" ."</h1>";
    }
           
}
