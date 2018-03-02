<?php
    require_once "dbconfig.php";
 
    //print_r($_POST);die();
    $id = $_GET['id'];
 
 
 
    $sql = "DELETE FROM `outcome` WHERE `outcome`.`id` = $id";
 
    $query = mysqli_query($conn,$sql);      
    if($query){
        header('Location: index.php');
    }else {
        echo "ลบข้อมูลไม่สำเร็จ";       
    }

     
?>
 

 