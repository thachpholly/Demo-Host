
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
		function get_config()
		{
			$valid_Rasp = "select * from Config "; 			
			$result = mysql_query($valid_Rasp);
			$emparray = array();
		    while($row =mysql_fetch_assoc($result))
		    {
		        $emparray[] = $row;
		    }
		    echo json_encode($emparray);
		}

	//header('Content-Type: application/json');
	//$rasp_id = $_POST['rasp_id'];
	//$pass = $_POST['pass'];
	//if(valid_Rasp($rasp_id, $pass))
		get_config();
	//echo json_encode($data);
	//?>


