@extends('layouts.app')
@section('content')
@section('head')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/js/bootstrap-select.min.js" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script>
<script src="https://www.chartjs.org/dist/2.8.0/Chart.min.js"></script>
	<script src="https://www.chartjs.org/samples/latest/utils.js"></script>
@endsection
<div class="container-fluid">
  <h1 align="CENTER">{{trans('message.Check Total Size Database')}}</h1>
  <div class="row">
@php
$servername1 = "localhost";
$username1 = "root";
$password1 = "";
$conn1 = new mysqli($servername1, $username1, $password1);
 @endphp
    <div class="col" style="background-color:orange;" align="CENTER">
        <h3>Hostinger.in.th</h3>
  @php
   $sql1 = "SELECT table_schema 'project', SUM( data_length + index_length)/1024/1024 'Database Size (MB)' FROM information_schema.TABLES where table_schema = 'project'";
    $result1 = $conn1->query($sql1);
    if ($result1->num_rows > 0) {
    while($row1 = $result1->fetch_assoc()) {
        echo   "<table class='table table-bordered '>";
        echo "<thead>
      <tr class='table-dark text-dark'>
        <th width=25%>Database</th>
        <th width=25%>Size(MB)</th>
      </tr>
    </thead>";
    echo "<tbody>
      <tr class='table-light'>
        <td>".$row1['project']."</td>
        <td>".$row1['Database Size (MB)']."</td>
      </tr>  </tbody>
  </table>";
    }
} else {
    echo "0 results";
}
//$conn1->close();
    @endphp
    <p class="text-danger">{{trans('message.*Disk: 5 GB*')}}</p>
    <button type="button" class="btn btn-info"><a href="https://cpanel.hostinger.in.th" target="_blank" class="text-white">{{trans('message.Website')}}</a></button>
    <button type="button" class="btn btn-warning"><a href="https://cpanel.hostinger.in.th/hosting/index/aid/31709073" target="_blank" >cPanel</a></button>
    <button type="button" class="btn btn-success"><a href="https://us-files.hostinger.in.th" target="_blank" class="text-white">{{trans('message.File Manager')}}</a></button>
    <button type="button" class="btn btn-danger"><a href="https://auth-db186.hostinger.in.th/index.php?db=u815234428_cce"  target="_blank" class="text-white">{{trans('message.Database')}}</a></button>
    <button type="button" class="btn btn-success"><a href="https://cpanel.hostinger.in.th/databases/remote-mysql/aid/31709073"  target="_blank" class="text-white">{{trans('message.Remote MySQL')}}</a></button>
    <button type="button" class="btn btn-info"><a href="https://my.freenom.com/clientarea.php?action=domains" target="_blank" class="text-white">{{trans('message.Domain')}}</a></button>
    <button type="button" class="btn btn-danger"><a href="http://extremetracking.com/free?login=cceudru" target="_blank" class="text-white">{{trans('message.Statistics')}}</a></button>
    </div>
  </div>
</div>

<div class="container-fluid">
  <br><br>
  <h1 align="CENTER">{{trans('message.Data summary')}}</h1>
  <div class="row">
    <div class="input-group mb-3">
        <form action="check" method="get" class="form-inline">
            <input type="date" class="form-control" name="date" required="required" value=" <?php csrf_token() ?>">
            <input type="submit" value="{{trans('message.Check')}}" class="btn btn-primary">
        </form>
    </div>

    <table class='table table-bordered '>
       <thead>
      <tr class='table-dark text-dark'>
            <th width = 10%>{{trans('message.Date')}}</th>
            <th>{{trans('message.PM10 Min')}}</th>
            <th>{{trans('message.PM10 Max')}}</th>
            <th>{{trans('message.Temperature Min')}}</th>
            <th>{{trans('message.Temperature Max')}}</th>
            <th>{{trans('message.Humidity Min')}}</th>
            <th>{{trans('message.Humidity Max')}}</th>
            <th>{{trans('message.Wind Min')}}</th>
            <th>{{trans('message.Wind Max')}}</th>
            <th>{{trans('message.Rain Min')}}</th>
            <th>{{trans('message.Rain Max')}}</th>
            <th>{{trans('message.Rainfall')}}</th>
            <th>{{trans('message.Pressure Min')}}</th>
            <th>{{trans('message.Pressure Max')}}</th>
            <th>{{trans('message.Solar Radiation Min')}}</th>
            <th>{{trans('message.Solar Radiation Max')}}</th>
      </tr>
    </thead>
  <tbody>
      <tr class='table-light'>
        <td>@php if(isset($date)) echo $date; @endphp</td>
        <td>@php if(isset($pm10min)) echo $pm10min; @endphp </td>
        <td>@php if(isset($pm10max)) echo $pm10max;@endphp </td>
        <td>@php if(isset($tempuraturemin)) echo $tempuraturemin; @endphp </td>
        <td>@php if(isset($tempuraturemax)) echo $tempuraturemax; @endphp</td>
        <td>@php if(isset($humiditymin)) echo $humiditymin; @endphp</td>
        <td>@php if(isset($humiditymax)) echo $humiditymax; @endphp</td>
        <td>@php if(isset($windmin)) echo $windmin;@endphp</td>
        <td>@php if(isset( $windmax)) echo  $windmax; @endphp</td>
        <td>@php if(isset($rainmin)) echo $rainmin; @endphp</td>
        <td>@php if(isset($rainmax)) echo $rainmax; @endphp</td>
        <td>@php if(isset($rainfall)) echo $rainfall; @endphp</td>
        <td>@php if(isset($pressuremin)) echo $pressuremin; @endphp</td>
        <td>@php if(isset($pressuremax)) echo $pressuremax; @endphp</td>
        <td>@php if(isset($solarmin)) echo $solarmin; @endphp</td>
        <td>@php if(isset($solarmax)) echo $solarmax; @endphp</td>
         </table>

      </tr> </tbody>


</div>
</div>

<div class="container-fluid">
  <br><br>
  <h1 align="CENTER">{{trans('message.Compare data')}}</h1>
  <br>
  <div class="row">
    <div class="col-auto">
        <label for="data1">Data 1:&nbsp;</label>
    </div>
    <div class="col-auto">
        <select class="form-control" name="data1" id="data1" >
            <option value="">Select Data</option>
            <option value="PM10">PM10</option>
            <option value="Tempurature">Tempurature</option>
            <option value="Humidity">Humidity</option>
            <option value="Wind">Wind</option>
            <option value="Rain">Rain</option>
            <option value="Pressure">Pressure</option>
            <option value="Solar Radiation">Solar</option>
          </select>
    </div>
    <div class="col-auto">
        <label for="data2">Data 2:&nbsp;</label>
    </div>
    <div class="col-auto">
        <select class="form-control" name="data2" id="data2" >
            <option value="">Select Data</option>
            <option value="PM10">PM10</option>
            <option value="Tempurature">Tempurature</option>
            <option value="Humidity">Humidity</option>
            <option value="Wind">Wind</option>
            <option value="Rain">Rain</option>
            <option value="Pressure">Pressure</option>
            <option value="Solar Radiation">Solar</option>
          </select>
    </div>
    <div class="col-auto">
        <label for="date">Date:&nbsp;</label>
          
    </div>
    <div class="col-auto">
        <input type="date"  class="form-control" name="date" id="date">
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary" name="search" id="search">Search</button>
    </div>
 
  </div>
  <canvas id="mycanvas" height="280" width="570"></canvas>
</div>
<script>
    
    $(document).ready(function(){
      $("#search").click(function(){
        var data1 = $('#data1').val();
        var data2 = $('#data2').val();
        var date = $('#date').val();
        if(data1 != '')
            {
                load_monthwise_data(data1,data2,date);
            }
    });
    });
    

    function load_monthwise_data(data1,data2,date)
    {
        $.ajax({
            url:"comparedata",
            method:"GET",
            data:{data1:data1,data2:data2,date:date},
            dataType:"JSON",
            success:function(data)
            {
              //console.log(data);
                    var player = [];
                    var score = [];
                    var point = [];
                   // console.log(Object.keys(data));
                    for (var i in data) {
                      player.push(data[i].Time);
                      score.push(data[i].Tempurature);
                      point.push(data[i].Humidity);
                    }
                    var chartdata = {
                      labels: player,
                      datasets: [{
                          label: '{{trans('message.Tempurature')}}',
                          backgroundColor: 'Red',
                          borderColor: 'Red',
                          hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                          hoverBorderColor: 'rgba(200, 200, 200, 1)',
                          fill: false,
                          data: score,
                          yAxisID: 'y-axis-1',
                      },{
                          label: '{{trans('message.Humidity')}}',
                          borderColor: 'blue',
                          backgroundColor: 'blue',
                          fill: false,
                          data:point,
                          yAxisID: 'y-axis-2'
                        }
                      ]};
                      var ctx = $("#mycanvas");
                      var myLineChart = new Chart(ctx, {
                      type: 'line',
                      data: chartdata,
                      options: {
                          responsive: true,
                          hoverMode: 'index',
                          stacked: false,
                      scales: {
                          yAxes: [{
                            type: 'linear',
                            display: true,
                            position: 'left',
                            id: 'y-axis-1',
                          }, {
                            type: 'linear', 
                            display: true,
                            position: 'right',
                            id: 'y-axis-2',
                            gridLines: {
                              drawOnChartArea: false, 
                            },
                          }],
                        },
                      }});
                      },
                        error: function(data) {
                          alert('Error');
                      } 
        });
    }
    </script>
@endsection
