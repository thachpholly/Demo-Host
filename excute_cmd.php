<?php
	

	$connect = mysql_connect("localhost", "root", "") or die ("Server not found!");
	mysql_select_db("Sensor", $connect) or die("Database not found!");
   // Hiển thị các dữ liệu đã được nhận được từ raspberry

	
	function EXE_RECORD($cmd, $rasp_id, $pass)
		{
			$str_insert = "insert into cmd VALUES ('".$rasp_id.":".trim($cmd)."', '0')";
		//echo "\n".$str_insert;
		mysql_query($str_insert);
			return true;
		}

		$cmd = $_POST['cmd'];
	   $rasp_id = $_POST['rasp_id'];
	   $pass = $_POST['cmd'];
		if(EXE_RECORD($cmd, $rasp_id, $pass))
		{
			echo "success";
		}

	

?>