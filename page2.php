<table class="table">
      <thead>
        <tr>
          <th>Thời Gian Ghi nhận</th>
          <th>Mã Nút</th>
          <th>Nhiệt độ không khí</th>
          <th>Độ ẩm không khí</th>
          <th>Nhiệt độ đất</th>
          <td>Độ ẩm đất</td>
          <td>Cường độ ánh sáng</td>
        </tr>
      </thead>
      <tbody>
      <?php
         $username = "root";
        $password = "";
        $host = "localhost";

        $connector = mysql_connect($host,$username,$password)
            or die("Unable to connect");
          echo "Connections are made successfully::";
        $selected = mysql_select_db("sensor", $connector)
          or die("Unable to connect");
        $result = mysql_query("select * from sensor order by ID desc");
          while( $row = mysql_fetch_assoc( $result ) ){

            echo
            "<tr>
              <td bgcolor=\"#FFFFFF\">{$row['Time']}</td>
              <td bgcolor=\"#FFFFFF\">{$row['NodeID']}</td>
              <td bgcolor=\"#FFFFFF\">{$row['AirTemperature']}(&#8451)</td>
              <td bgcolor=\"#FFFFFF\">{$row['AirHumidity']}(%)</td>
              <td bgcolor=\"#FFFFFF\">{$row['SoilTemperature']}(&#8451)</td>
              <td bgcolor=\"#FFFFFF\">{$row['SoilMoisture']}(%)</td> 
              <td bgcolor=\"#FFFFFF\">{$row['LightIntensity']}(Lux)</td>
            </tr>\n";
          }
          ?>
      </tbody>
</table>    
