<?php
      session_start();
      require 'dbconfig.php';

      $username = mysqli_real_escape_string($conn,$_POST['username']);
      $password = mysqli_real_escape_string($conn,$_POST['password']);


      $sql = "SELECT * FROM `users` WHERE username='$username'  AND password='$password' ;"; 

      $result = mysqli_query($conn,$sql);

      $rows= mysqli_fetch_assoc($result);


      

       if ($rows['id'] != '') {
            $_SESSION['id'] = $rows['id'];
            $_SESSION['username'] = $rows['username'];
            header("Location: index.php");
       } else {
            header("Location: login.php");
       }
?>