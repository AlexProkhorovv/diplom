<?php 
function kama_create_csv_file( $create_data, $file = null, $col_delimiter = ';', $row_delimiter = "\r\n" ){

	if( ! is_array( $create_data ) ){
		return false;
	}

	if( $file && ! is_dir( dirname( $file ) ) ){
		return false;
	}

	// строка, которая будет записана в csv файл
	$CSV_str = '';

	// перебираем все данные
	foreach( $create_data as $row ){
		$cols = array();

		foreach( $row as $col_val ){
			// строки должны быть в кавычках ""
			// кавычки " внутри строк нужно предварить такой же кавычкой "
			if( $col_val && preg_match('/[",;\r\n]/', $col_val) ){
				// поправим перенос строки
				if( $row_delimiter === "\r\n" ){
					$col_val = str_replace( [ "\r\n", "\r" ], [ '\n', '' ], $col_val );
				}
				elseif( $row_delimiter === "\n" ){
					$col_val = str_replace( [ "\n", "\r\r" ], '\r', $col_val );
				}

				$col_val = str_replace( '"', '""', $col_val ); // предваряем "
				$col_val = '"'. $col_val .'"'; // обрамляем в "
			}

			$cols[] = $col_val; // добавляем колонку в данные
		}

		$CSV_str .= implode( $col_delimiter, $cols ) . $row_delimiter; // добавляем строку в данные
	}

	$CSV_str = rtrim( $CSV_str, $row_delimiter );

	// задаем кодировку windows-1251 для строки
	if( $file ){
		$CSV_str = iconv( "UTF-8", "cp1251",  $CSV_str );

		// создаем csv файл и записываем в него строку
		$done = file_put_contents( $file, $CSV_str );

		return $done ? $CSV_str : false;
	}

	return $CSV_str;

}


$total = $_GET['total'];
$mode = $_GET['mode'];
$BW = $_GET['BW'];
$date = date('Y-m-d H:i:s');
$typeModulation = $_GET['modulation'];
$modulation = $_GET['select-modulation'];
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


$dataArray = [];
$dataArray[] = ['Итоговая пропускная способность','Режим двусторонней связи','Режим модуляции','Полоса пропускания'];
$dataArray[] = [$total,$mode,$modulation,$BW];

if(count($dataArray) > 1){
	header( 'Content-Type: text/csv; charset=utf-8' );
	header( 'Content-Disposition: attachment; filename="file.csv"' );
	echo kama_create_csv_file( $dataArray, 'file.csv' );
		
}
else{
	echo "<script>document.location.href = 'index.php'</script>";
}




?>