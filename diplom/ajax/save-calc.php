<?php session_start();
	require_once('../connect.php');
	
	if(isset($_POST['user-id'])){
		$idUser = $_POST['user-id'];
		$total = $_POST['total'];
		$mode = $_POST['mode'];
		$BW = $_POST['BW'];
		$date = date('Y-m-d H:i:s');
		$typeModulation = $_POST['modulation'];
		$modulation = $_POST['select-modulation'];
		if($typeModulation == '0'){
			if($modulation == 2)
				$modulation = 'QPSK';
			elseif($modulation == 4)
				$modulation = '16QAM';
			elseif($modulation == 6)
				$modulation = '64QAM';
			else
				$modulation = '256QAM';
		}
		else
			$modulation = '64QAM';


		if($BW == 6)
			$BW = '1.4 МГц';
		elseif ($BW == 15) 
			$BW = '3.0 МГц';
		elseif ($BW == 25) 
			$BW = '5.0 МГц';
		elseif ($BW == 50) 
			$BW = '10 МГц';
		elseif ($BW == 75)
			$BW = '15 МГц';
		else
			$BW = '20 МГц';

		if(mysqli_query($connect,"INSERT INTO `save-calculator` (`id`, `total`, `mode`, `modulation`, `bw`,`date`, `id-user`) VALUES (NULL, '$total', '$mode', '$modulation', '$BW', '$date', $idUser);"))
			echo 'Success';
		else
			echo 'Error-2'; 
	}
	else
		echo 'Error-1';
 ?>