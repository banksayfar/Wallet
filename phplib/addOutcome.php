<?php 
    require '../dbconfig.php';

    $id = $_POST['id'];
    $money = $_POST['money'];
    $type = $_POST['type'];
     $date = $_POST['date'];
     $sql = "INSERT INTO `outcome` (`id`, `money`, `type`, `user_id`,`date`) VALUES (NULL, '$money', '$type', '$id', '$date') ; " ;
    $result = mysqli_query($conn,$sql);

    if($result){
        header("Location: ../index.php");
    }

?>