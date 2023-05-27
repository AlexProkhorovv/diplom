<?php session_start();
	require_once('../connect.php');
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$isEmail = mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM users WHERE email = '$email' "));
	if($isEmail['id']){
		echo 'Error-1';
	}
	else{
		if(mysqli_query($connect,"INSERT INTO `users` (`id`, `email`, `password`, `name`) VALUES (NULL, '$email', '$password', '$name')")){
		echo "Success";
		}
		else{
			echo "Error-2";
		}	
	}
	


 ?>