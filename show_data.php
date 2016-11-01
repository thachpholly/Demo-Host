<?php
	$connect = mysql_connect("localhost", "root", "") or die ("Server not found!");
	mysql_select_db("Sensor", $connect) or die("Database not found!");
   // Hiển thị các dữ liệu đã được nhận được từ raspberry

	

	function INSERT_RECORD($Time, $NodeID, $AirTemperature, $AirHumidity, $SoilTemperature, $SoilMoisture, $LightIntensity)
		{
			$str_insert = "INSERT INTO `sensor`(`Time`, `NodeID`, `AirTemperature`, `AirHumidity`, `SoilTemperature`, `SoilMoisture`, `LightIntensity`) VALUES ('".trim($Time)."', '".trim($NodeID)."', '".trim($AirTemperature)."', '".trim($AirHumidity)."', '".trim($SoilTemperature)."', '".trim($SoilMoisture)."', '".trim($LightIntensity)."')";
		#echo "\n".$str_insert;
		mysql_query($str_insert);
			return true;
		}

		$time = $_POST['time'];
	   	$nodeID = $_POST['nodeID'];
         $airTemperature = $_POST['airTemperature'];
          $airHumidity = $_POST['airHumidity'];
           $soilTemperature = $_POST['soilTemperature'];
           $soilMoisture = $_POST['soilMoisture'];
           $lightIntensity = $_POST['lightIntensity'];
		if(INSERT_RECORD($time, $nodeID, $airTemperature, $airHumidity, $soilTemperature, $soilMoisture, $lightIntensity))
		{
			echo "haha";
		}

	

?>