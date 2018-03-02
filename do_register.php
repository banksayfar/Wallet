<?php 
		require 'dbconfig.php';	
		$username = $_POST['username'];
		$password = $_POST['password'];
		$confirmpassword = $_POST['confirmpassword'];

		if ($confirmpassword==$password) {
			
			$query = "INSERT INTO `users`( `username`, `password`) VALUES ('$username','$password')";

			$result = mysqli_query($conn,$query);

			if ($result) {

				header('Location: login.php');
				
			}else{
				echo "เกิดข้อผิดพลาด".mysqli_error($conn);
			}

			}else{
				echo "Password not match!";
			}	
 ?>