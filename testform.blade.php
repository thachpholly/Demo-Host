<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
    <body>
        <form action="show_data.php" method="POST" role="form" class="stats-form">
            <legend>
                Send Data From Rasp
            </legend>
            <div class="form-group">
                <label for="">
                    Time:
                </label>
                <input class="form-control" id="" name="time" placeholder="hh:mm:ss" type="text" required="">
                </input>
            </div>
            <div class="form-group">
                <label for="">
                    NodeID:
                </label>
                <input class="form-control" id="" name="nodeID" placeholder="Địa chỉ nút dữ liệu: 1, 2, 3..." type="text" required="">
                </input>
            </div>
            <div class="form-group">
                <label for="">
                    AirTemperature:
                </label>
                <input class="form-control" id="" name="airTemperature" placeholder="Nhiệt độ không khí" type="text" >
                </input>
            </div>
            <div class="form-group">
                <label for="">
                    AirHumidity:
                </label>
                <input class="form-control" id="" name="airHumidity" placeholder="Độ ẩm không khí" type="text" >
                </input>
            </div>
            <div class="form-group">
                <label for="">
                    SoilTemperature:
                </label>
                <input class="form-control" id="" name="soilTemperature" placeholder="Nhiệt độ đất" type="text" >
                </input>
            </div>
            <div class="form-group">
                <label for="">
                    SoilMoisture:
                </label>
                <input class="form-control" id="" name="soilMoisture" placeholder="Độ ẩm đất" type="text" >
                </input>
            </div>
            <div class="form-group">
                <label for="">
                    LightIntensity:
                </label>
                <input class="form-control" id="" name="lightIntensity" placeholder="Cường độ ánh sáng" type="text" >
                </input>
            </div>
            
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button class="btn btn-primary" type="submit">
                Gửi dữ liệu
            </button>
        </form>
        <form action="smartgarden/stats/insert" method="POST" role="form" class="stats-form">
            <legend>
                Send Data From Rasp
            </legend>
            <div class="form-group">
                <label for="">
                    Time:
                </label>
                <input class="form-control" id="" name="time" placeholder="hh:mm:ss" type="text" required="">
                </input>
            </div>
            <div class="form-group">
                <label for="">
                    NodeID:
                </label>
                <input class="form-control" id="" name="nodeID" placeholder="Địa chỉ nút dữ liệu: 1, 2, 3..." type="text" required="">
                </input>
            </div>
            <div class="form-group">
                <label for="">
                    WindVelocity:
                </label>
                <input class="form-control" id="" name="windVelocity" placeholder="Giá trị tốc độ gió." type="text" >
                </input>
            </div>
            <div class="form-group">
                <label for="">
                    WindDirection:
                </label>
                <input class="form-control" id="" name="windDirection" placeholder="Hướng gió" type="text" >
                </input>
            </div>
            <div class="form-group">
                <label for="">
                    Rain:
                </label>
                <input class="form-control" id="" name="rain" placeholder="Trạng thái mưa: 0 hoặc 1" type="text" >
                </input>
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button class="btn btn-primary" type="submit">
                Gửi dữ liệu
            </button>
        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js">
        </script>
        <script crossorigin="anonymous" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
        </script>
    </body>
</html>