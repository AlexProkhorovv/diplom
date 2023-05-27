<?php session_start();
	require_once('../connect.php');
	$id = $_POST['id'];
	$lastTest = mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM `save-test` WHERE `user-id` = $id ORDER BY id DESC "));

	if($lastTest['id']){
		$lastDateSec = strtotime($lastTest['date']);
		$nowSec = strtotime(date('Y-m-d H:i:s'));
		$hourSec = 60 * 60;
		if($nowSec - $lastDateSec > $hourSec)
			echo 'Success';
		else
			echo 'Error-1'; 
	}
	else
		echo 'Success';
 ?>