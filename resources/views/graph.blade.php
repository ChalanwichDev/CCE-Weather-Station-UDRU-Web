@extends('master')
@section('title')
    - AirQuality
@endsection
@section('header')
  
@endsection
@section('head')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/js/bootstrap-select.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script>
@endsection
@section('sidebar-AirQuality')
    w3-blue
@endsection
@section('content')
    <!-- PM10 -->
		<div class="w3-panel">
			<div class="w3-row-padding" style="margin:0 -16px">
				<div class="w3-third">
					<div class="w3-container w3-red  w3-text-white w3-padding-16 w3-round-xxlarge">
						<div class="w3-left"><i class="fa fa-leaf w3-xxxlarge"></i></div>
						<div class="w3-right">
                            <table>
                                <tr>
                                    <td><h3 id="msg1">--</h3></td>
                                    <td><h3>&nbsp;{{trans('message.μg/m')}}<sup>3</sup></h3></td>
                                </tr>
                            </table>
						</div>
						<div class="w3-clear"></div>
						<h4>{{trans('message.PM10')}}</h4>
					</div>
				</div>
				<div class="w3-twothird">
                    <!--<div id="line_chart_PM10" style="width: 750px; height: 300px;"></div>-->
                        <div class="w3-right">
                            <div class="w3-bar" aligh="Right">
                                <button class="w3-bar-item w3-button w3-white  w3-border  w3-tiny" onclick="chartDustDTECtoday()">{{trans('message.Today')}}</button>
                                <button class="w3-bar-item w3-button w3-white w3-border  w3-tiny" onclick="chartDustDTEC7days()">{{trans('message.7 days')}}</button>
                              </div>                  
                        </div>
                    <canvas id="mycanvas" height="280" width="570"></canvas>
                    <script>
                    this.chartDustDTECtoday();
                    //********************** Today ***************************************
                    function chartDustDTECtoday(){
                        $(document).ready(function() {
                            $.ajax({
                                url: "checkchartDustDTECtoday",
                                method: "GET",
                                success: function(data) {
                                    var player = [];
                                    var score = [];
                                    var gline1 = [];
                                    var gline2 = [];
                                    var gline3 = [];
                                    var gline4 = [];
                                    var gline5 = [];
                                    for(var i = 0; i <= 120;i++){
                                        gline1.push(25);
                                        gline2.push(50);
                                        gline3.push(100);
                                        gline4.push(200);
                                        gline5.push(230);
                                    }
                                    for (var i in data) {
                                        player.push(data[i].Time);
                                        score.push(data[i].PM10);
                                    }
                                    
                                    var chartdata = {
                                        labels: player,
                                        datasets: [{
                                            label: '{{trans('message.PM10')}}',
                                            backgroundColor: 'black',
                                            borderColor: 'black',
                                            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                                            hoverBorderColor: 'rgba(200, 200, 200, 1)',
                                            fill: false,
                                            data: score,
                                             responsive: true
                                        },{
                                            label: '{{trans('message.Normal')}}',
                                            backgroundColor: 'blue',
                                            pointRadius: 0,
                                            data: gline1,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Low')}}',
                                            backgroundColor: 'green',
                                            pointRadius: 0,
                                            data: gline2,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Moderate')}}',
                                            backgroundColor: 'yellow',
                                            pointRadius: 0,
                                            data: gline3,
                                            fill: true
                                        },{
                                            label: '{{trans('message.High')}}',
                                            backgroundColor: 'orange',
                                            pointRadius: 0,
                                            data: gline4,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Very High')}}',
                                            backgroundColor: 'red',
                                            pointRadius: 0,
                                            data: gline5,
                                            fill: true
                                        }]
                                    };
                                    var ctx = $("#mycanvas");
                                    var myLineChart = new Chart(ctx, {
                                        type: 'line',
                                        data: chartdata,
                                        
                                    });
                                },
                                error: function(data) {
                                }
                            });
                        });}
                        //**********************************************************

                        //**** 7 Days  *********************************************
                        function chartDustDTEC7days(){
                        $(document).ready(function() {
                            $.ajax({
                                url: "checkchartDustDTEC7days",
                                method: "GET",
                                success: function(data) {
                                    var player = [];
                                    var score = [];
                                    var gline1 = [];
                                    var gline2 = [];
                                    var gline3 = [];
                                    var gline4 = [];
                                    var gline5 = [];
                                    for(var i = 0; i <= 120;i++){
                                        gline1.push(25);
                                        gline2.push(50);
                                        gline3.push(100);
                                        gline4.push(200);
                                        gline5.push(230);
                                    }
                                    for (var i in data) {
                                        player.push(data[i].Time);
                                        score.push(data[i].PM10);
                                    }
                                    var chartdata = {
                                        labels: player,
                                        datasets: [{
                                            label: '{{trans('message.PM10')}}',
                                            backgroundColor: 'black',
                                            borderColor: 'black',
                                            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                                            hoverBorderColor: 'rgba(200, 200, 200, 1)',
                                            fill: false,
                                            data: score,
                                             responsive: true
                                        },{
                                            label: '{{trans('message.Normal')}}',
                                            backgroundColor: 'blue',
                                            pointRadius: 0,
                                            data: gline1,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Low')}}',
                                            backgroundColor: 'green',
                                            pointRadius: 0,
                                            data: gline2,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Moderate')}}',
                                            backgroundColor: 'yellow',
                                            pointRadius: 0,
                                            data: gline3,
                                            fill: true
                                        },{
                                            label: '{{trans('message.High')}}',
                                            backgroundColor: 'orange',
                                            pointRadius: 0,
                                            data: gline4,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Very High')}}',
                                            backgroundColor: 'red',
                                            pointRadius: 0,
                                            data: gline5,
                                            fill: true
                                        }]
                                    };
                                    var ctx = $("#mycanvas");
                                    var myLineChart = new Chart(ctx, {
                                        type: 'line',
                                        data: chartdata
                                    });
                                },
                                error: function(data) {
                                }
                            });
                        });}
                        //*************************************************************************

                       
                    </script>
				</div>
			</div>
		</div>

		<!-- Tempurature -->
		<div class="w3-panel">
			<div class="w3-row-padding" style="margin:0 -16px">
				<div class="w3-third">

					<div class="w3-container w3-orange w3-text-white w3-padding-16 w3-round-xxlarge">
						<div class="w3-left"><i class="fas fa-temperature-low w3-xxxlarge"></i></div>
						<div class="w3-right">
                            <table>
                                <tr>
                                    <td><h3 id="msg3">--</h3></td>
                                    <td><h3>&nbsp;{{trans('message.°C')}}</h3></td>
                                </tr>
                            </table>
						</div>
						<div class="w3-clear"></div>
						<h4>{{trans('message.Temperature')}}</h4>
					</div>
				</div>
				<div class="w3-twothird">
                        <div class="w3-right">
                                <div class="w3-bar" aligh="Right">
                                    <button class="w3-bar-item w3-button w3-white w3-border  w3-tiny " onclick="chartTempuraturetoday()">{{trans('message.Today')}}</button>
                                    <button class="w3-bar-item w3-button w3-white w3-border  w3-tiny" onclick="chartTempurature7days()">{{trans('message.7 days')}}</button>
                                   
                                  </div>                  
                            </div>
					   <canvas id="mycanvas1" height="280" width="570"></canvas>
                    <script>
                        this.chartTempuraturetoday();
                        //****** Today  ****************************************
                        function chartTempuraturetoday(){
                        $(document).ready(function() {
                            $.ajax({
                                url: "checkchartAmbienttoday",
                                method: "GET",
                                success: function(data) {

                                    var player = [];
                                    var score = [];
                                    var gline1 = [];
                                    var gline2 = [];
                                    var gline3 = [];
                                    var gline4 = [];
                                    var gline5 = [];
                                    var gline6 = [];
                                    var gline7 = [];
                                   
                                    for(var i = 0; i <= 120;i++){
                                        gline1.push(7);
                                        gline2.push(15);
                                        gline3.push(17);
                                        gline4.push(22);
                                        gline5.push(34);
                                        gline6.push(40);
                                        gline7.push(45);
                                    }

                                    for (var i in data) {
                                        player.push(data[i].Time);
                                        score.push(data[i].Tempurature);
                                    }

                                    var chartdata = {
                                        labels: player,
                                        datasets: [{
                                            label: '{{trans('message.Tempurature')}}',
                                            backgroundColor: 'black',
                                            borderColor: 'black',
                                            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                                            hoverBorderColor: 'rgba(200, 200, 200, 1)',
                                            data: score,
                                            fill: false
                                        },{
                                            label: '{{trans('message.Very Cold')}}',
                                            backgroundColor: '#87CEFA',
                                            pointRadius: 0,
                                            data: gline1,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Cold')}}',
                                            backgroundColor: '#28E7FF',
                                            pointRadius: 0,
                                            data: gline2,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Moderately Cold')}}',
                                            backgroundColor: 'cyan',
                                            pointRadius: 0,
                                            data: gline3,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Cool')}}',
                                            backgroundColor: 'blue',
                                            pointRadius: 0,
                                            data: gline4,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Normal')}}',
                                            backgroundColor: 'green',
                                            pointRadius: 0,
                                            data: gline5,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Hot')}}',
                                            backgroundColor: 'orange',
                                            pointRadius: 0,
                                            data: gline6,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Very Hot')}}',
                                            backgroundColor: 'red',
                                            pointRadius: 0,
                                            data: gline7,
                                            fill: true
                                        }]
                                    };

                                    var ctx = $("#mycanvas1");

                                    var myLineChart = new Chart(ctx, {
                                        type: 'line',
                                        data: chartdata
                                    });
                                },
                                error: function(data) {

                                }
                            });
                        });}
                        //**************************************************************************
                        //********* 7 Days *********************************************************
                        function chartTempurature7days(){
                        $(document).ready(function() {
                            $.ajax({
                                url: "checkchartAmbient7days",
                                method: "GET",
                                success: function(data) {

                                    var player = [];
                                    var score = [];
                                    var gline1 = [];
                                    var gline2 = [];
                                    var gline3 = [];
                                    var gline4 = [];
                                    var gline5 = [];
                                    var gline6 = [];
                                    var gline7 = [];
                                   
                                    for(var i = 0; i <= 120;i++){
                                        gline1.push(7);
                                        gline2.push(15);
                                        gline3.push(17);
                                        gline4.push(22);
                                        gline5.push(34);
                                        gline6.push(40);
                                        gline7.push(45);
                                    }

                                    for (var i in data) {
                                        player.push(data[i].Time);
                                        score.push(data[i].Tempurature);
                                    }

                                    var chartdata = {
                                        labels: player,
                                        datasets: [{
                                            label: '{{trans('message.Tempurature')}}',
                                            backgroundColor: 'black',
                                            borderColor: 'black',
                                            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                                            hoverBorderColor: 'rgba(200, 200, 200, 1)',
                                            data: score,
                                            fill: false
                                        },{
                                            label: '{{trans('message.Very Cold')}}',
                                            backgroundColor: '#87CEFA',
                                            pointRadius: 0,
                                            data: gline1,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Cold')}}',
                                            backgroundColor: '#28E7FF',
                                            pointRadius: 0,
                                            data: gline2,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Moderately Cold')}}',
                                            backgroundColor: 'cyan',
                                            pointRadius: 0,
                                            data: gline3,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Cool')}}',
                                            backgroundColor: 'blue',
                                            pointRadius: 0,
                                            data: gline4,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Normal')}}',
                                            backgroundColor: 'green',
                                            pointRadius: 0,
                                            data: gline5,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Hot')}}',
                                            backgroundColor: 'orange',
                                            pointRadius: 0,
                                            data: gline6,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Very Hot')}}',
                                            backgroundColor: 'red',
                                            pointRadius: 0,
                                            data: gline7,
                                            fill: true
                                        }]
                                    };

                                    var ctx = $("#mycanvas1");

                                    var myLineChart = new Chart(ctx, {
                                        type: 'line',
                                        data: chartdata
                                    });
                                },
                                error: function(data) {

                                }
                            });
                        });}
                        //***************************************************************************
                        
                    </script>
				</div>
			</div>
		</div>

		<!-- Humidity -->
		<div class="w3-panel">
			<div class="w3-row-padding" style="margin:0 -16px">
				<div class="w3-third">
	
					<div class="w3-container w3-green  w3-text-white w3-padding-16 w3-round-xxlarge">
						<div class="w3-left"><i class="far fa-snowflake w3-xxxlarge"></i></div>
						<div class="w3-right">
                            <table>
                                <tr>
                                    <td><h3 id="msg4">--</h3></td>
                                    <td><h3>&nbsp;{{trans('message.%')}}</h3></td>
                                </tr>
                            </table>
                        
						</div>
						<div class="w3-clear"></div>
						<h4>{{trans('message.Humidity')}}</h4>
					</div>
				</div>
				<div class="w3-twothird">
                        <div class="w3-right">
                                <div class="w3-bar" aligh="Right">
                                    <button class="w3-bar-item w3-button w3-white w3-border  w3-tiny" onclick="chartHumiditytoday()">{{trans('message.Today')}}</button>
                                    <button class="w3-bar-item w3-button w3-white w3-border  w3-tiny" onclick="chartHumidity7days()">{{trans('message.7 days')}}</button>
                                    
                                  </div>                  
                            </div>
					<canvas id="mycanvas2" height="280" width="570"></canvas>
                    <script>
                        this.chartHumiditytoday();
                        //************** Today ***************************************************************
                        function chartHumiditytoday(){
                        $(document).ready(function() {
                            $.ajax({
                                url: "checkchartAmbienttoday",
                                method: "GET",
                                success: function(data) {

                                    var player = [];
                                    var score = [];

                                    for (var i in data) {
                                        player.push(data[i].Time);
                                        score.push(data[i].Humidity);
                                    }

                                    var chartdata = {
                                        labels: player,
                                        datasets: [{
                                            label: '{{trans('message.Humidity')}}',
                                            backgroundColor: 'Green',
                                            borderColor: 'Green',
                                            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                                            hoverBorderColor: 'rgba(200, 200, 200, 1)',
                                            data: score,
                                            fill: false
                                        }]
                                    };

                                    var ctx = $("#mycanvas2");

                                    var myLineChart = new Chart(ctx, {
                                        type: 'line',
                                        data: chartdata
                                    });
                                },
                                error: function(data) {

                                }
                            });
                        });}
                        //**************************************************************
                        //********* 7 Days *********************************************
                        function chartHumidity7days(){
                        $(document).ready(function() {
                            $.ajax({
                                url: "checkchartAmbient7days",
                                method: "GET",
                                success: function(data) {

                                    var player = [];
                                    var score = [];

                                    for (var i in data) {
                                        player.push(data[i].Time);
                                        score.push(data[i].Humidity);
                                    }

                                    var chartdata = {
                                        labels: player,
                                        datasets: [{
                                            label: '{{trans('message.Humidity')}}',
                                            backgroundColor: 'Green',
                                            borderColor: 'Green',
                                            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                                            hoverBorderColor: 'rgba(200, 200, 200, 1)',
                                            data: score,
                                            fill: false
                                        }]
                                    };

                                    var ctx = $("#mycanvas2");

                                    var myLineChart = new Chart(ctx, {
                                        type: 'line',
                                        data: chartdata
                                    });
                                },
                                error: function(data) {

                                }
                            });
                        });}
                        //*****************************************************************
                        
                    </script>
				</div>
			</div>
		</div>

		<!-- Wind -->
		<div class="w3-panel">
			<div class="w3-row-padding" style="margin:0 -16px">
				<div class="w3-third">
					<div class="w3-container w3-cyan  w3-text-white w3-padding-16 w3-round-xxlarge">
						<div class="w3-left"><i class="fas fa-wind w3-xxxlarge"></i></div>
						<div class="w3-right">
                            <table>
                                <tr>
                                    <td><h3 id="msg5">--</h3></td>
                                    <td><h3>&nbsp;{{trans('message.Km/h')}}</h3></td>
                                </tr>
                            </table>
							
						</div>
						<div class="w3-clear"></div>
						<h4>{{trans('message.Wind')}}</h4>
					</div>
				</div>
				<div class="w3-twothird">
                        <div class="w3-right">
                                <div class="w3-bar" aligh="Right">
                                    <button class="w3-bar-item w3-button w3-white w3-border  w3-tiny" onclick="chartWindtoday()">{{trans('message.Today')}}</button>
                                    <button class="w3-bar-item w3-button w3-white w3-border  w3-tiny" onclick="chartWind7days()">{{trans('message.7 days')}}</button>
                                  </div>                  
                            </div>
					<canvas id="mycanvas3" height="280" width="570"></canvas>
                    <script>
                        this.chartWindtoday();
                        //********** Today **********************************************************
                        function chartWindtoday(){
                        $(document).ready(function() {
                            $.ajax({
                                url: "checkchartAmbienttoday",
                                method: "GET",
                                success: function(data) {

                                    var player = [];
                                    var score = [];
                                    var gline1 = [];
                                    var gline2 = [];
                                    var gline3 = [];
                                    var gline4 = [];
                                    var gline5 = [];
                                    var gline6 = [];
                                    var gline7 = [];
                                    var gline8 = [];
                                    var gline9 = [];
                                    var gline10 = [];
                                    var gline11 = [];
                                    var gline12 = [];
                                    var gline13 = [];
                                   
                                    for(var i = 0; i <= 120;i++){
                                        gline1.push(1);
                                        gline2.push(5);
                                        gline3.push(11);
                                        gline4.push(19);
                                        gline5.push(28);
                                        gline6.push(38);
                                        gline7.push(49);
                                        gline8.push(61);
                                        gline9.push(74);
                                        gline10.push(88);
                                        gline11.push(102);
                                     
                                    }

                                    for (var i in data) {
                                        player.push(data[i].Time);
                                        score.push(data[i].Wind);
                                    }

                                    var chartdata = {
                                        labels: player,
                                        datasets: [{
                                            label: '{{trans('message.Wind')}}',
                                            backgroundColor: 'black',
                                            borderColor: 'black',
                                            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                                            hoverBorderColor: 'rgba(200, 200, 200, 1)',
                                            data: score,
                                            fill: false
                                        },{
                                            label: '{{trans('message.Calm')}}',
                                            backgroundColor: '#A2E9FF',
                                            pointRadius: 0,
                                            data: gline1,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Light Air')}}',
                                            backgroundColor: '#9DE4FF',
                                            pointRadius: 0,
                                            data: gline2,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Light Breeze')}}',
                                            backgroundColor: '#98DFFF',
                                            pointRadius: 0,
                                            data: gline3,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Gentle Breeze')}}',
                                            backgroundColor: '#00BFFF',
                                            pointRadius: 0,
                                            data: gline4,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Moderate Breeze')}}',
                                            backgroundColor: '#00A5FF',
                                            pointRadius: 0,
                                            data: gline5,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Fresh Breeze')}}',
                                            backgroundColor: '#64CD3C',
                                            pointRadius: 0,
                                            data: gline6,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Strong Breeze')}}',
                                            backgroundColor: '#FFD732',
                                            pointRadius: 0,
                                            data: gline7,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Near Gale')}}',
                                            backgroundColor: '#FF8200',
                                            pointRadius: 0,
                                            data: gline8,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Gale')}}',
                                            backgroundColor: '#FF0000',
                                            pointRadius: 0,
                                            data: gline9,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Strong Gale')}}',
                                            backgroundColor: '#EB0000',
                                            pointRadius: 0,
                                            data: gline10,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Storm')}}',
                                            backgroundColor: '#CD0000',
                                            pointRadius: 0,
                                            data: gline11,
                                            fill: true
                                        }]
                                    };

                                    var ctx = $("#mycanvas3");

                                    var myLineChart = new Chart(ctx, {
                                        type: 'line',
                                        data: chartdata
                                    });
                                },
                                error: function(data) {

                                }
                            });
                        });}
                        //********************************************************************************
                        //****** 7 Days ******************************************************************
                        function chartWind7days(){
                        $(document).ready(function() {
                            $.ajax({
                                url: "checkchartAmbient7days",
                                method: "GET",
                                success: function(data) {

                                    var player = [];
                                    var score = [];
                                    var gline1 = [];
                                    var gline2 = [];
                                    var gline3 = [];
                                    var gline4 = [];
                                    var gline5 = [];
                                    var gline6 = [];
                                    var gline7 = [];
                                    var gline8 = [];
                                    var gline9 = [];
                                    var gline10 = [];
                                    var gline11 = [];
                                    var gline12 = [];
                                    var gline13 = [];
                                   
                                    for(var i = 0; i <= 120;i++){
                                        gline1.push(1);
                                        gline2.push(5);
                                        gline3.push(11);
                                        gline4.push(19);
                                        gline5.push(28);
                                        gline6.push(38);
                                        gline7.push(49);
                                        gline8.push(61);
                                        gline9.push(74);
                                        gline10.push(88);
                                        gline11.push(102);
                                     
                                    }


                                    for (var i in data) {
                                        player.push(data[i].Time);
                                        score.push(data[i].Wind);
                                    }

                                    var chartdata = {
                                        labels: player,
                                        datasets: [{
                                            label: '{{trans('message.Wind')}}',
                                            backgroundColor: 'black',
                                            borderColor: 'black',
                                            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                                            hoverBorderColor: 'rgba(200, 200, 200, 1)',
                                            data: score,
                                            fill: false
                                        },{
                                            label: '{{trans('message.Calm')}}',
                                            backgroundColor: '#A2E9FF',
                                            pointRadius: 0,
                                            data: gline1,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Light Air')}}',
                                            backgroundColor: '#9DE4FF',
                                            pointRadius: 0,
                                            data: gline2,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Light Breeze')}}',
                                            backgroundColor: '#98DFFF',
                                            pointRadius: 0,
                                            data: gline3,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Gentle Breeze')}}',
                                            backgroundColor: '#00BFFF',
                                            pointRadius: 0,
                                            data: gline4,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Moderate Breeze')}}',
                                            backgroundColor: '#00A5FF',
                                            pointRadius: 0,
                                            data: gline5,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Fresh Breeze')}}',
                                            backgroundColor: '#64CD3C',
                                            pointRadius: 0,
                                            data: gline6,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Strong Breeze')}}',
                                            backgroundColor: '#FFD732',
                                            pointRadius: 0,
                                            data: gline7,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Near Gale')}}',
                                            backgroundColor: '#FF8200',
                                            pointRadius: 0,
                                            data: gline8,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Gale')}}',
                                            backgroundColor: '#FF0000',
                                            pointRadius: 0,
                                            data: gline9,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Strong Gale')}}',
                                            backgroundColor: '#EB0000',
                                            pointRadius: 0,
                                            data: gline10,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Storm')}}',
                                            backgroundColor: '#CD0000',
                                            pointRadius: 0,
                                            data: gline11,
                                            fill: true
                                        }]
                                    };

                                    var ctx = $("#mycanvas3");

                                    var myLineChart = new Chart(ctx, {
                                        type: 'line',
                                        data: chartdata
                                    });
                                },
                                error: function(data) {

                                }
                            });
                        });}
                        //*******************************************************************************
                        
                    </script>
				</div>
			</div>
		</div>


		<!-- Rain -->
		<div class="w3-panel">
			<div class="w3-row-padding" style="margin:0 -16px">
				<div class="w3-third">
	
					<div class="w3-container w3-blue  w3-text-white w3-padding-16 w3-round-xxlarge">
						<div class="w3-left"><i class="fas fa-cloud-rain w3-xxxlarge"></i></div>
						<div class="w3-right">
                            <table>
                                <tr>
                                    <td><h3 id="msg7">--</h3></td>
                                    <td><h3>&nbsp;{{trans('message.mm')}}</h3></td>
                                </tr>
                            </table>
							
						</div>
						<div class="w3-clear"></div>
						<h4>{{trans('message.Rain')}}</h4>
					</div>
				</div>
				<div class="w3-twothird">
                        <div class="w3-right">
                                <div class="w3-bar" aligh="Right">
                                    <button class="w3-bar-item w3-button w3-white w3-border  w3-tiny" onclick="chartRaintoday()">{{trans('message.Today')}}</button>
                                    <button class="w3-bar-item w3-button w3-white w3-border  w3-tiny" onclick="chartRain7days()">{{trans('message.7 days')}}</button>
                                   
                                  </div>                  
                            </div>
					<canvas id="mycanvas4" height="280" width="570"></canvas>
                    <script>
                        this.chartRaintoday();
                        //*** Today *************************************************************************
                        function chartRaintoday(){
                        $(document).ready(function() {
                            $.ajax({
                                url: "checkchartAmbienttoday",
                                method: "GET",
                                success: function(data) {

                                    var player = [];
                                    var score = [];
                                    var gline1 = [];
                                    var gline2 = [];
                                    var gline3 = [];
                                    var gline4 = [];
                                    var gline5 = [];
                                   
                                    for(var i = 0; i <= 120;i++){
                                        gline1.push(0.1);
                                        gline2.push(10);
                                        gline3.push(35);
                                        gline4.push(90);
                                        gline5.push(100);
                                    }

                                    for (var i in data) {
                                        player.push(data[i].Time);
                                        score.push(data[i].Rain);
                                    }

                                    var chartdata = {
                                        labels: player,
                                        datasets: [{
                                            label: '{{trans('message.Rain')}}',
                                            backgroundColor: 'black',
                                            borderColor: 'black',
                                            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                                            hoverBorderColor: 'rgba(200, 200, 200, 1)',
                                            data: score,
                                            fill: false
                                        },{
                                            label: '{{trans('message.No Rain')}}',
                                            backgroundColor: '#00A5FF',
                                            pointRadius: 0,
                                            data: gline1,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Light Rain')}}',
                                            backgroundColor: '#64CD3C',
                                            pointRadius: 0,
                                            data: gline2,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Moderate Rain')}}',
                                            backgroundColor: '#FFD732',
                                            pointRadius: 0,
                                            data: gline3,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Heavy Rain')}}',
                                            backgroundColor: '#FF8200',
                                            pointRadius: 0,
                                            data: gline4,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Very Heavy Rain')}}',
                                            backgroundColor: '#FF0000',
                                            pointRadius: 0,
                                            data: gline5,
                                            fill: true
                                        }]
                                    };

                                    var ctx = $("#mycanvas4");

                                    var myLineChart = new Chart(ctx, {
                                        type: 'line',
                                        data: chartdata
                                    });
                                },
                                error: function(data) {

                                }
                            });
                        });}
                        //*****************************************************************************
                        //**** 7 Days *****************************************************************
                        function chartRain7days(){
                        $(document).ready(function() {
                            $.ajax({
                                url: "checkchartAmbient7days",
                                method: "GET",
                                success: function(data) {

                                    var player = [];
                                    var score = [];
                                    var gline1 = [];
                                    var gline2 = [];
                                    var gline3 = [];
                                    var gline4 = [];
                                    var gline5 = [];
                                   
                                    for(var i = 0; i <= 120;i++){
                                        gline1.push(0.1);
                                        gline2.push(10);
                                        gline3.push(35);
                                        gline4.push(90);
                                        gline5.push(100);
                                    }

                                    for (var i in data) {
                                        player.push(data[i].Time);
                                        score.push(data[i].Rain);
                                    }

                                    var chartdata = {
                                        labels: player,
                                        datasets: [{
                                            label: '{{trans('message.Rain')}}',
                                            backgroundColor: 'black',
                                            borderColor: 'black',
                                            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                                            hoverBorderColor: 'rgba(200, 200, 200, 1)',
                                            data: score,
                                            fill: false
                                        },{
                                            label: '{{trans('message.No Rain')}}',
                                            backgroundColor: '#00A5FF',
                                            pointRadius: 0,
                                            data: gline1,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Light Rain')}}',
                                            backgroundColor: '#64CD3C',
                                            pointRadius: 0,
                                            data: gline2,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Moderate Rain')}}',
                                            backgroundColor: '#FFD732',
                                            pointRadius: 0,
                                            data: gline3,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Heavy Rain')}}',
                                            backgroundColor: '#FF8200',
                                            pointRadius: 0,
                                            data: gline4,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Very Heavy Rain')}}',
                                            backgroundColor: '#FF0000',
                                            pointRadius: 0,
                                            data: gline5,
                                            fill: true
                                        }]
                                    };

                                    var ctx = $("#mycanvas4");

                                    var myLineChart = new Chart(ctx, {
                                        type: 'line',
                                        data: chartdata
                                    });
                                },
                                error: function(data) {

                                }
                            });
                        });}
                        //************************************************************************************
                        
                    </script>
				</div>
			</div>
		</div>

		<!-- Pressure -->
		<div class="w3-panel">
			<div class="w3-row-padding" style="margin:0 -16px">
				<div class="w3-third">
		
					<div class="w3-container w3-indigo  w3-text-white w3-padding-16 w3-round-xxlarge">
						<div class="w3-left"><i class="fas fa-water w3-xxxlarge"></i></div>
						<div class="w3-right">
                            <table>
                                <tr>
                                    <td><h3 id="msg8">--</h3></td>
                                    <td><h3>&nbsp;{{trans('message.hPa')}}</h3></td>
                                </tr>
                            </table>
							
						</div>
						<div class="w3-clear"></div>
						<h4>{{trans('message.Pressure')}}</h4>
					</div>
				</div>
				<div class="w3-twothird">
                        <div class="w3-right">
                                <div class="w3-bar" aligh="Right">
                                    <button class="w3-bar-item w3-button w3-white w3-border  w3-tiny" onclick="chartPressuretoday()">{{trans('message.Today')}}</button>
                                    <button class="w3-bar-item w3-button w3-white w3-border  w3-tiny" onclick="chartPressure7days()">{{trans('message.7 days')}}</button>
                                   
                                  </div>                  
                            </div>
					<canvas id="mycanvas5" height="280" width="570"></canvas>
                    <script>
                        this.chartPressuretoday();
                        //******** Today  **********************************************************************
                        function chartPressuretoday(){
                        $(document).ready(function() {
                            $.ajax({
                                url: "checkchartAmbienttoday",
                                method: "GET",
                                success: function(data) {

                                    var player = [];
                                    var score = [];

                                    for (var i in data) {
                                        player.push(data[i].Time);
                                        score.push(data[i].Pressure);
                                    }

                                    var chartdata = {
                                        labels: player,
                                        datasets: [{
                                            label: '{{trans('message.Pressure')}}',
                                            backgroundColor: 'Indigo',
                                            borderColor: 'Indigo',
                                            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                                            hoverBorderColor: 'rgba(200, 200, 200, 1)',
                                            data: score,
                                            fill: false
                                        }]
                                    };

                                    var ctx = $("#mycanvas5");

                                    var myLineChart = new Chart(ctx, {
                                        type: 'line',
                                        data: chartdata
                                    });
                                },
                                error: function(data) {

                                }
                            });
                        });}
                        //*****************************************************************************
                        //******* 7 Days **************************************************************
                        function chartPressure7days(){
                        $(document).ready(function() {
                            $.ajax({
                                url: "checkchartAmbient7days",
                                method: "GET",
                                success: function(data) {

                                    var player = [];
                                    var score = [];

                                    for (var i in data) {
                                        player.push(data[i].Time);
                                        score.push(data[i].Pressure);
                                    }

                                    var chartdata = {
                                        labels: player,
                                        datasets: [{
                                            label: '{{trans('message.Pressure')}}',
                                            backgroundColor: 'Indigo',
                                            borderColor: 'Indigo',
                                            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                                            hoverBorderColor: 'rgba(200, 200, 200, 1)',
                                            data: score,
                                            fill: false
                                        }]
                                    };

                                    var ctx = $("#mycanvas5");

                                    var myLineChart = new Chart(ctx, {
                                        type: 'line',
                                        data: chartdata
                                    });
                                },
                                error: function(data) {

                                }
                            });
                        });}
                        //********************************************************************************
                        
                    </script>
				</div>
			</div>
		</div>

		<!-- Solar Radiation -->
		<div class="w3-panel">
			<div class="w3-row-padding" style="margin:0 -16px">
				<div class="w3-third">
		
					<div class="w3-container w3-amber  w3-text-white w3-padding-16 w3-round-xxlarge">
						<div class="w3-left"><i class="fas fa-cloud-sun w3-xxxlarge"></i></div>
						<div class="w3-right">
                            <table>
                                <tr>
                                    <td><h3 id="msg9">--</h3></td>
                                    <td><h3>&nbsp;{{trans('message.W/m')}}<sup>2</sup></h3></td>
                                </tr>
                            </table>
						</div>
						<div class="w3-clear"></div>
						<h4>{{trans('message.Solar Radiation')}}</h4>
					</div>
				</div>
				<div class="w3-twothird">
                        <div class="w3-right">
                                <div class="w3-bar" aligh="Right">
                                    <button class="w3-bar-item w3-button w3-white w3-border  w3-tiny" onclick="chartSolartoday()">{{trans('message.Today')}}</button>
                                    <button class="w3-bar-item w3-button w3-white w3-border  w3-tiny" onclick="chartSolar7days()">{{trans('message.7 days')}}</button>
                                    
                                  </div>                  
                            </div>
					<canvas id="mycanvas6" height="280" width="570"></canvas>
                    <script>
                        this.chartSolartoday();
                        //****** Today ******************************************************************
                        function chartSolartoday(){
                        $(document).ready(function() {
                            $.ajax({
                                url: "checkchartAmbienttoday",
                                method: "GET",
                                success: function(data) {

                                    var player = [];
                                    var score = [];
                                    var gline1 = [];
                                    var gline2 = [];
                                    var gline3 = [];
                                    var gline4 = [];
                                    var gline5 = [];
                                   
                                    for(var i = 0; i <= 120;i++){
                                        gline1.push(300);
                                        gline2.push(600);
                                        gline3.push(800);
                                        gline4.push(1100);
                                        gline5.push(1200);
                                    }
                                    for (var i in data) {
                                        player.push(data[i].Time);
                                        score.push(data[i].Solar);
                                    }

                                    var chartdata = {
                                        labels: player,
                                        datasets: [{
                                            label: '{{trans('message.Solar Radiation')}}',
                                            backgroundColor: 'black',
                                            borderColor: 'black',
                                            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                                            hoverBorderColor: 'rgba(200, 200, 200, 1)',
                                            data: score,
                                            fill: false
                                        },{
                                            label: '{{trans('message.Light sunshine')}}',
                                            backgroundColor: '#FAEB78',
                                            pointRadius: 0,
                                            data: gline1,
                                            fill: true
                                        },{
                                            label: '{{trans('message.little sunshine')}}',
                                            backgroundColor: '#FFDC3C',
                                            pointRadius: 0,
                                            data: gline2,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Moderate sun')}}',
                                            backgroundColor: '#FFC81E',
                                            pointRadius: 0,
                                            data: gline3,
                                            fill: true
                                        },{
                                            label: '{{trans('message.sunny')}}',
                                            backgroundColor: '#FF8200',
                                            pointRadius: 0,
                                            data: gline4,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Very sunny')}}',
                                            backgroundColor: '#FF0000',
                                            pointRadius: 0,
                                            data: gline5,
                                            fill: true
                                        }],

                                    };

                                    var ctx = $("#mycanvas6");

                                    var myLineChart = new Chart(ctx, {
                                        type: 'line',
                                        data: chartdata
                                    });
                                },
                                error: function(data) {

                                }
                            });
                        });}
                        //**************************************************************************
                        //**** 7 Days **************************************************************
                        function chartSolar7days(){
                        $(document).ready(function() {
                            $.ajax({
                                url: "checkchartAmbient7days",
                                method: "GET",
                                success: function(data) {

                                    var player = [];
                                    var score = [];
                                    var gline1 = [];
                                    var gline2 = [];
                                    var gline3 = [];
                                    var gline4 = [];
                                    var gline5 = [];
                                   
                                    for(var i = 0; i <= 120;i++){
                                        gline1.push(300);
                                        gline2.push(600);
                                        gline3.push(800);
                                        gline4.push(1100);
                                        gline5.push(1200);
                                    }
                                 
                                    for (var i in data) {
                                        player.push(data[i].Time);
                                        score.push(data[i].Solar);
                                    }
                                
                                    var chartdata = {
                                        labels: player,
                                        datasets: [{
                                            label: '{{trans('message.Solar Radiation')}}',
                                            backgroundColor: 'black',
                                            borderColor: 'black',
                                            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                                            hoverBorderColor: 'rgba(200, 200, 200, 1)',
                                            data: score,
                                            fill: false
                                        },{
                                            label: '{{trans('message.Light sunshine')}}',
                                            backgroundColor: '#FAEB78',
                                            borderColor: '#FAEB78',
                                            pointRadius: 0,
                                            data: gline1,
                                            fill: true
                                        },{
                                            label: '{{trans('message.little sunshine')}}',
                                            backgroundColor: '#FFDC3C',
                                            borderColor: '#FFDC3C',
                                            pointRadius: 0,
                                            data: gline2,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Moderate sun')}}',
                                            backgroundColor: '#FFC81E',
                                            borderColor: '#FFC81E',
                                            pointRadius: 0,
                                            data: gline3,
                                            fill: true
                                        },{
                                            label: '{{trans('message.sunny')}}',
                                            backgroundColor: '#FF8200',
                                            borderColor: '#FF8200',
                                            pointRadius: 0,
                                            data: gline4,
                                            fill: true
                                        },{
                                            label: '{{trans('message.Very sunny')}}',
                                            backgroundColor: '#FF0000',
                                            borderColor: '#FF0000',
                                            pointRadius: 0,
                                            data: gline5,
                                            fill: true
                                        }],

                                    };

                                    var ctx = $("#mycanvas6");

                                    var myLineChart = new Chart(ctx, {
                                        type: 'line',
                                        data: chartdata,
                                    });
                                },
                                error: function(data) {

                                }
                            });
                        });}
                        //*****************************************************************************
                        
                    </script>
				</div>
			</div>
		</div>

@endsection
@section('ajax')
{{-- <script src="{{asset('js/grapg')}}"></script> --}}
<script>
function getDataFromDb() {

$.ajax({
        url: 'datadustdtec',
        type: "GET",
        data: ''
    })
    .success(function(result) {
        var obj = jQuery.parseJSON(JSON.stringify(result));
        if (obj != '') {
            $("#myBody").empty();
            $.each(obj, function(key, val) {
                document.getElementById("msg1").innerHTML = val["PM10"];
            });
        }
    });
}
setInterval(getDataFromDb, 1000);

function getDataFromAm() {
$.ajax({
        url: 'dataambient',
        type: 'GET',
        data: ''
    })
    .success(function(result) {
        var obj1 = jQuery.parseJSON(JSON.stringify(result));
        if (obj1 != '') {
            $("#myBody").empty();
            $.each(obj1, function(key, val) {
                document.getElementById("msg3").innerHTML = val["Tempurature"];
                document.getElementById("msg4").innerHTML = val["Humidity"];
                document.getElementById("msg5").innerHTML = val["Wind"];
                document.getElementById("msg7").innerHTML = val["Rain"];
                document.getElementById("msg8").innerHTML = val["Pressure"] ;
                document.getElementById("msg9").innerHTML = val["Solar"];
            });
        }
    });
}
setInterval(getDataFromAm, 1000);
</script>

@endsection