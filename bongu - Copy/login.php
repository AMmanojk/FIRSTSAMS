<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";
		$sql2 = "SELECT * FROM students WHERE user_name='$uname' AND password='$pass'";
		$sql3 = "SELECT * FROM admin1 WHERE user_name='$uname' AND password='$pass'";


		$result = mysqli_query($conn, $sql);
		$result1 = mysqli_query($conn1, $sql2);
		$result2 = mysqli_query($conn2, $sql3);

		if (mysqli_num_rows($result) === 1){    
			//code to be executed if condition1 is true 
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: ADMIN_HOME/Home.html");
		        exit(); 
			}  
			} elseif (mysqli_num_rows($result1) === 1){ 
				$row = mysqli_fetch_assoc($result1);
				if ($row['user_name'] === $uname && $row['password'] === $pass) {
					$_SESSION['user_name'] = $row['user_name'];
					$_SESSION['name'] = $row['name'];
					$_SESSION['id'] = $row['id'];
					header("Location: SAMS/dashboard.php");
					exit();     
				}
			

			} elseif (mysqli_num_rows($result2) === 1){ 
				$row = mysqli_fetch_assoc($result2);
				if ($row['user_name'] === $uname && $row['password'] === $pass) {
					$_SESSION['user_name'] = $row['user_name'];
					$_SESSION['name'] = $row['name'];
					$_SESSION['id'] = $row['id'];
					header("Location: bokka/dashboard.html");
					exit();      
			} else{
				header("Location: index.php?error=Incorrect username and password");    
			    exit();
			}
		} 
	}
}   

	
		
		