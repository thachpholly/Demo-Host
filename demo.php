<!doctype html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>database connections</title>
    </head>
    <body>
      <?php
      $username = "u686021949_admin";
      $password = "123456";
      $host = "mysql.hostinger.vn";

      $connector = mysql_connect($host,$username,$password)
          or die("Unable to connect");
        echo "Connections are made successfully::";
      $selected = mysql_select_db("u686021949_data", $connector)
        or die("Unable to connect");

      //execute the SQL query and return records
      $result = mysql_query("SELECT * FROM sensor ");
      ?>
      <table border="3" style= "background-color: #84ed86; color: #761a9b; margin: 0 auto;" >
      <thead>
        <tr>
          <th>Time </th>
          <th>NodeID</th>
          <th>Air Temperature</th>
          <th>AirHumidity</th>
          <th>SoilTemperature</th>
          <td>SoilMoisture</td>
          <td>LightIntensity</td>
        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysql_fetch_assoc( $result ) ){
            echo
            "<tr>
              <td>{$row['Time']}</td>
              <td>{$row['NodeID']}</td>
              <td>{$row['AirTemperature']}</td>
              <td>{$row['AirHumidity']}</td>
              <td>{$row['SoilTemperature']}</td>
              <td>{$row['SoilMoisture']}</td> 
              <td>{$row['LightIntensity']}</td>
            </tr>\n";
          }
        ?>
      </tbody>
    </table>
    </br></br></br></br>

    <form action="excute_cmd.php" method="POST">
	 	rasp_id: <input type="text" name="rasp_id" id="rasp_id">
	    <br/>
	    password: <input type="password" name="pass" id="pass">
	    <br/>
	    Command: <input type="text" name="cmd" id="cmd">
	    <br/>
	    <input type="submit" name="btnInsert">
	</form>
     <?php mysql_close($connector); ?>
    </body>
    </html>