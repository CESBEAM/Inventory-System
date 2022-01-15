<?php 
session_start(); 
include "connect.php";

if (isset($_POST['email']) && isset($_POST['password'])
    && isset($_POST['canteenname']) && isset($_POST['conpassword'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['email']);
	$password = validate($_POST['password']);

	$conpassword = validate($_POST['conpassword']);
	$canteenname = validate($_POST['canteenname']);

	$user_data = 'email='. $email. '&canteenname=';


	if (empty($canteenname)) {
		header("Location: register.php?error=Canteen Name field is required&$user_data");
	    exit();
	}else if(empty($password)){
        header("Location: register.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($conpassword)){
        header("Location: register.php?error=Please provide confirm Password&$user_data");
	    exit();
	}

	else if(empty($email)){
        header("Location: register.php?error=Provide email address&$user_data");
	    exit();
	}

	else if($password !== $conpassword){
        header("Location: register.php?error=Confirm password not match&$user_data");
	    exit();
	}

	else{

		// hashing the password
        $password = md5($password);

	    $sql = "SELECT * FROM users WHERE email='$email' ";
		$result = mysqli_query($con, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: register.php?error=The email is already taken&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(email, password, canteenname) VALUES('$email', '$password', '$canteenname')";
           $result2 = mysqli_query($con, $sql2);
           if ($result2) {
           	 header("Location: login.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: register.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: register.php");
	exit();
}