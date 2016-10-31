<?php
	$connect = mysql_connect("mysql.hostinger.vn", "u686021949_admin", "123456") or die ("Server not found!");
	mysql_select_db("u686021949_data", $connect) or die("Database not found!");
   // Hiển thị các dữ liệu đã được nhận được từ raspberry

	
	function EXE_RECORD($cmd, $rasp_id, $pass)
		{
			$str_insert = "insert into cmd VALUES ('".trim($cmd)."', '0')";
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