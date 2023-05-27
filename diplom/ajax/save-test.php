<?php session_start();
	require_once('../connect.php');
	
	if(isset($_POST['user-id'])){
		$idUser = $_POST['user-id'];
		$value1= $_POST['test1'];
		$value2= $_POST['test2'];
		$value3= $_POST['test3'];
		$value4= $_POST['test4'];
		$value5= $_POST['test5'];
		$date = date('Y-m-d H:i:s');
		

		if(mysqli_query($connect,"INSERT INTO `save-test` (`id`, `value1`, `value2`, `value3`, `value4`, `value5`, `user-id`, `date`) VALUES (NULL, $value1, $value2, $value3, $value4, $value5, $idUser, '$date')"))
			echo 'Success';
		else
			echo 'Error-2'; 
	}
	else
		echo 'Error-1';
 ?>