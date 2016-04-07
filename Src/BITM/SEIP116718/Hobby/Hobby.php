<?php

namespace App\BITM\SEIP116718\Hobby;
error_reporting(E_ALL ^ E_DEPRECATED);

class Hobby {
    
    public $id='';
    public $hobby='';
    
    public function __construct() {
        $conn = mysql_connect('localhost', 'root', '') or die("Unable to connect");
        mysql_select_db('atomicproject') or die('Unable to connect with DB');
    }
    
    public function prepare($data = ""){
        
        if (array_key_exists('id', $data)) 
            {
                $this->id = $data['id'];
            }
        if (array_key_exists('myOneHobby', $data)) 
            {
                $this->hobby = $data['myOneHobby'];
            }
        return $this;
    }
    
    public function storeDataInDatabase(){
        $qurey = "INSERT INTO `atomicproject`.`table_hobby` (`id`, `title`) VALUES (NULL, '".$this->hobby."')";
        mysql_query($qurey);
        header('location:index.php');
    }
    
    public function index(){
        $mydata = array();
        $qurey = "SELECT * FROM `table_hobby`WHERE delete_at IS NULL";
        $result = mysql_query($qurey);
        while($row = mysql_fetch_assoc($result))
        {
            $mydata[] = $row;
        }
        return $mydata;
    }
    
    public function show($id=""){
        $this->id = $id;
        $qurey = "SELECT * FROM table_hobby WHERE id=".$this->id;
        $result = mysql_query($qurey);
        $row = mysql_fetch_assoc($result);
        return $row; 
    }
    
    public function update(){
        $qurey = "UPDATE `table_hobby` SET `title` = '".$this->hobby."' WHERE `table_hobby`.`id` =".$this->id;
        mysql_query($qurey);
        header('location:index.php'); 
    }
    
    public function softDelete(){
        $qurey = "UPDATE `table_hobby` SET `delete_at` = '".date('Y-m-d')."' WHERE `table_hobby`.`id` =".$this->id;
        mysql_query($qurey);
        header('location:index.php');
    }
    
    public function deleteItem(){
        $mydata = array();
        $qurey = "SELECT * FROM `table_hobby`WHERE delete_at IS NOT NULL";
        $result= mysql_query($qurey);
        while($row = mysql_fetch_assoc($result)){
            $mydata[] = $row;
        }
        return $mydata;
    }
    
    public function restore($id=''){
        //echo $this->id;
        $query = "UPDATE `table_hobby` SET `delete_at` = NULL WHERE `table_hobby`.`id` =".$this->id;
        mysql_query($query);
        header('location:deleteitem.php');
    }
    
    public function delete($id=""){
        $query = "DELETE FROM `atomicproject`.`table_hobby` WHERE `table_hobby`.`id` =".$this->id;
        mysql_query($query);
        header('location:deleteitem.php');
    }
}
