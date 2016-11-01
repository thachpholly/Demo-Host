
    <?php
	$connect = mysql_connect("localhost", "root", "") or die ("Server not found!");
		mysql_select_db("Sensor", $connect) or die("Database not found!");
	   // Hiển thị các dữ liệu đã được nhận được từ raspberry

		function valid_Rasp($rasp_id, $pass)
			{
				$valid_Rasp = "select rasp_id, pass from data 
						where rasp_id = '".trim($rasp_id)."' AND  pass = '".trim($pass)."'";				
				$result = mysql_query($valid_Rasp);

				if (mysql_num_rows($result) > 0) {
				    // output data of each row
				    return true;
				} else {
				    return false;
				}
			}
		function get_command()
		{
			$valid_Rasp = "select command from cmd where excuted = \"0\""; 			
			$result = mysql_query($valid_Rasp);
			while($row = mysql_fetch_assoc($result))
				echo $row["command"]." ";
			$valid_Rasp = "update cmd set excuted = \"1\""; 
			//echo $valid_Rasp;
			$result = mysql_query($valid_Rasp);
		}

	//header('Content-Type: application/json');
	//$rasp_id = $_POST['rasp_id'];
	//$pass = $_POST['pass'];
	//if(valid_Rasp($rasp_id, $pass))
		get_command();
	//echo json_encode($data);
	?>

