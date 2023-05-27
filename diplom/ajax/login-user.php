<?php session_start();
	require_once('../connect.php');
	
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$checkbox = $_POST['checkbox'];
	$user = mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM users WHERE email = '$email' AND password = '$password' "));
	if($user['id']){
		echo 'Success';
		$_SESSION['login'] = 1;
		$_SESSION['email-user'] = $email;
		$_SESSION['id-user'] = $user['id'];
		if($checkbox == 'on'){
			$hash = md5(rand(1,10000000000));
			setcookie('hash',$hash,time()+60*60*24*30,'/');
			setcookie('id-user',$user['id'],time()+60*60*24*30,'/');
		}
		

		mysqli_query($connect,"UPDATE users SET hash = '$hash' WHERE id = " . $user['id']);
	}
	else{
		echo "Error-1";
	}
 ?>