<?php
	$connect = mysql_connect("mysql.hostinger.vn", "u686021949_admin", "123456") or die ("Server not found!");
	mysql_select_db("u686021949_data", $connect) or die("Database not found!");
   // Hiển thị các dữ liệu đã được nhận được từ raspberry

	function get_insert_str($data)
	{
		list($Time, $NodeID, $AirTemperature, $AirHumidity, $SoilTemperature, $SoilMoisture, $LightIntensity) = explode(",", $data);
		$Time = substr($Time,1,strlen($Time));
		$NodeID = substr($NodeID,1,strlen($NodeID));
		$AirTemperature = substr($AirTemperature,1,strlen($AirTemperature));
		$AirHumidity = substr($AirHumidity,1,strlen($AirHumidity));
		$SoilTemperature = substr($SoilTemperature,1,strlen($SoilTemperature));
		$SoilMoisture = substr($SoilMoisture,1,strlen($SoilMoisture));
		$LightIntensity = substr($LightIntensity,1,strlen($LightIntensity)-2);

		$str_insert = "insert into sensor VALUES ('".trim($Time)."', '".trim($NodeID)."', '".trim($AirTemperature)."', '".trim($AirHumidity)."', '".trim($SoilTemperature)."', '".trim($SoilMoisture)."', '".trim($LightIntensity)."')";
		//echo "\n".$str_insert;
		mysql_query($str_insert);
	}

	function INSERT_RECORD($data, $rasp_id, $pass)
		{
			get_insert_str($data);
			return true;
		}

		$data = $_POST['data'];
	   $rasp_id = $_POST['rasp_id'];
	   $pass = $_POST['pass'];
		if(INSERT_RECORD($data, $rasp_id, $pass))
		{
			echo "<script>window.location.href='form.html'</script>";
		}

	

?>