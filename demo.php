
<!doctype html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>database connections</title>
      <script src="myscripts.js"> </script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
      <?php
      $username = "root";
      $password = "";
      $host = "localhost";

      $connector = mysql_connect($host,$username,$password)
          or die("Unable to connect");
        echo "Connections are made successfully::";
      $selected = mysql_select_db("sensor", $connector)
        or die("Unable to connect");
        ?>

  <?php 
    if(isset($_POST['insert'])){
      $str_insert = "insert into cmd VALUES ('000:0', '0')";

      //echo "\n".$str_insert;
      mysql_query($str_insert);
    }
    if(isset($_POST['select'])){
      $str_insert = "insert into cmd VALUES ('000:1', '0')";
      mysql_query($str_insert);
    }
    if(isset($_POST['remove'])){
      $str_insert = "DELETE FROM `sensor` WHERE 1";
      mysql_query($str_insert);
    }
    if(isset($_POST['btnconfig'])){
      $str_insert = "INSERT INTO `Config` (`ligth_intensity_w`, `temperature_w`, `air_humidity_w`, `soil_temperature_w`, `soil_moisture_w`, `ligth_intensity_d`, `temperature_d`, `air_humidity_d`, `soil_temperature_d`, `soil_moisture_d`) VALUES ('".trim($_POST['ligth_intensity_w'])."', '".trim($_POST['temperature_w'])."', '".trim($_POST['air_humidity_w'])."', '".trim($_POST['soil_temperature_w'])."', '".trim($_POST['soil_moisture_w'])."', '".trim($_POST['ligth_intensity_d'])."', '".trim($_POST['temperature_d'])."', '".trim($_POST['air_humidity_d'])."', '".trim($_POST['soil_temperature_d'])."', '".trim($_POST['soil_moisture_d'])."')";
      #echo $str_insert;
      $delete = 'delete from Config where 1';
      mysql_query($delete);
      mysql_query($str_insert);
    }
    ?>
    <form  method="post" align = "center">
    
      <input type="submit" name="insert" value="Tắt" title="000:0">
      <input type="submit" name="select" value="Mở" title="000:1">
      <input type="submit" name="remove" value="Xóa dữ liệu">
    </form>

      
 
<div id="tableID" class="table-responsive">
     <?php include_once'page2.php'; ?>
</div>

<script type='text/javascript'>
      var table = $('#tableID');
     // refresh every 5 seconds
     var refresher = setInterval(function(){
       table.load("page2.php");
     }, 1000);
     setTimeout(function() {
       clearInterval(refresher);
     }, 1800000);
</script>
<div align = "center">
 <form action="excute_cmd.php" method="POST">
    Mã Nút: <input type="text" name="rasp_id" id="rasp_id">
      <br/>
       <br/>
      Lệnh: <input type="text" name="cmd" id="cmd">
      <br/>
      <input type="submit" name="btnInsert">
  </form>
</div>
<div align = "center">
 <form  method="POST">
    ligth_intensity_w: <input type="text" name="ligth_intensity_w">
       <br/>
    temperature_w: <input type="text" name="temperature_w">
      <br/>
    air_humidity_w: <input type="text" name="air_humidity_w">
      <br/>
    soil_temperature_w: <input type="text" name="soil_temperature_w">
      <br/>
    soil_moisture_w: <input type="text" name="soil_moisture_w">
      <br/>
    ligth_intensity_d: <input type="text" name="ligth_intensity_d">
    <br/>
    temperature_d: <input type="text" name="temperature_d">
      <br/>
    air_humidity_d: <input type="text" name="air_humidity_d">

      <br/>
    soil_temperature_d: <input type="text" name="soil_temperature_d">
      <br/>
    soil_moisture_d: <input type="text" name="soil_moisture_d">
      <br/>
      <input type="submit" name="btnconfig">
  </form>
</div>
   
     <?php mysql_close($connector); ?>
  </body>
</html>   