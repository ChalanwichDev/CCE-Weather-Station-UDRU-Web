@extends('master')
@section('title')
    - Monitoring
@endsection
@section('header')
     
@endsection
@section('sidebar-Monitoring')
    w3-blue
@endsection
@section('head')
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
@endsection
@section('ajax')
    <script>
        function getDataFromDb() {
            $.ajax({
                    url: 'minmaxdustdtec',
                    type: "GET",
                    data: ''
                })
                .success(function(result) {
                    var obj = jQuery.parseJSON(JSON.stringify(result));
                    if (obj != '') {
                        $("#myBody").empty();
                        $.each(obj, function(key, val) {
                            document.getElementById("msg11").innerHTML = " " + val["round(MIN(PM10),2)"] + " ug/m<sup>3</sup>";
                            document.getElementById("msg12").innerHTML = " " + val["round(MAX(PM10),2)"] + " ug/m<sup>3</sup>";
                        });
                    }
                });
        }
        setInterval(getDataFromDb, 1000);
    </script>

    <script>
        function getDataMaxAm() {
            $.ajax({
                    url:'minmaxambient',
                    data:''
                })
                .success(function(result) {
                    var obj = jQuery.parseJSON(JSON.stringify(result));
                    if (obj != '') {
                        $("#myBody").empty();
                        $.each(obj, function(key, val) {
                            document.getElementById("msg13").innerHTML = " " + val["round(MIN(Tempurature),2)"] + "°C";
                            document.getElementById("msg14").innerHTML = " " + val["round(MAX(Tempurature),2)"] + "°C";
                            document.getElementById("msg15").innerHTML = " " + val["round(MIN(Humidity),2)"] + "%";
                            document.getElementById("msg16").innerHTML = " " + val["round(MAX(Humidity),2)"] + "%";
                            document.getElementById("msg17").innerHTML = " " + val["round(MIN(Wind),2)"] + " Km/h";
                            document.getElementById("msg18").innerHTML = " " + val["round(MAX(Wind),2)"] + " Km/h";
                            document.getElementById("msg19").innerHTML = " " + val["round(MIN(Rain),2)"] + " mm";
                            document.getElementById("msg20").innerHTML = " " + val["round(MAX(Rain),2)"] + " mm";
                            document.getElementById("msg21").innerHTML = " " + val["round(MIN(Pressure),2)"] + " hPa";
                            document.getElementById("msg22").innerHTML = " " + val["round(MAX(Pressure),2)"] + " hPa";
                            document.getElementById("msg23").innerHTML = " " + val["round(MIN(Solar),2)"] + " W/m<sup>2</sup>";
                            document.getElementById("msg24").innerHTML = " " + val["round(MAX(Solar),2)"] + " W/m<sup>2</sup>";
                        });
                    }
                });
        }
        setInterval(getDataMaxAm, 1000);
    </script>

     <!-- Start gauge PM10 -->
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['gauge']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Label', 'PM10'],
                ['{{trans('message.PM10')}}', 0]

            ]);
            var options = {
                width: 250,
                height: 250,
                redFrom: 240,
                redTo: 250,
                yellowFrom: 151,
                yellowTo: 240,
                minorTicks: 10,
                greenFrom: 56,
                greenTo: 151,
                max: 250
            };
            var chart = new google.visualization.Gauge(document.getElementById('PM10'));
            chart.draw(data, options);
            setInterval(function() {
                var JSON = $.ajax({
                    url: 'datadustdtecgauge',
                    dataType: 'json',
                    async: false
                }).responseText;
                var Respuesta = jQuery.parseJSON(JSON);

                data.setValue(0, 1, Respuesta[0].PM10);
                chart.draw(data, options);
            }, 1300);
        }
    </script>
    <!--End guage PM10 -->

    <!--Start guage Tempuratue -->
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['gauge']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Label', 'Tempurature'],
                ['{{trans('message.Temperature')}}', 0]

            ]);
            var options = {
                width: 250,
                height: 250,
                redFrom: 41,
                redTo: 60,
                yellowFrom: 32,
                yellowTo: 41,
                minorTicks: 10,
                greenFrom: 27,
                greenTo: 32,

                max: 60
            };
            var chart = new google.visualization.Gauge(document.getElementById('Tempurature'));
            chart.draw(data, options);
            setInterval(function() {
                var JSON = $.ajax({
                    url: "dataambientgauge",
                    dataType: 'json',
                    async: false
                }).responseText;
                var Respuesta = jQuery.parseJSON(JSON);

                data.setValue(0, 1, Respuesta[0].Tempurature);
                chart.draw(data, options);
            }, 1300);

        }
    </script>
    <!--end guage Tempurature -->

    <!--Start guage Humidity -->
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['gauge']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Label', 'Humidity'],
                ['{{trans('message.Humidity')}}', 0]

            ]);
            var options = {
                width: 250,
                height: 250,
                redFrom: 70,
                redTo: 80,
                yellowFrom: 60,
                yellowTo: 70,
                minorTicks: 10,
                greenFrom: 50,
                greenTo: 60,

                max: 80
            };
            var chart = new google.visualization.Gauge(document.getElementById('Humidity'));
            chart.draw(data, options);
            setInterval(function() {
                var JSON = $.ajax({
                    url: "dataambientgauge",
                    dataType: 'json',
                    async: false
                }).responseText;
                var Respuesta = jQuery.parseJSON(JSON);

                data.setValue(0, 1, Respuesta[0].Humidity);
                chart.draw(data, options);
            }, 1300);

        }
    </script>
    <!--end guage Humidity -->

    <!--Start guage Wind -->
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['gauge']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Label', 'Wind'],
                ['{{trans('message.Wind')}}', 0]

            ]);
            var options = {
                width: 250,
                height: 250,
                redFrom: 117,
                redTo: 140,
                yellowFrom: 63,
                yellowTo: 117,
                minorTicks: 10,
                greenFrom: 20,
                greenTo: 63,

                max: 140
            };
            var chart = new google.visualization.Gauge(document.getElementById('Wind'));
            chart.draw(data, options);
            setInterval(function() {
                var JSON = $.ajax({
                    url: "dataambientgauge",
                    dataType: 'json',
                    async: false
                }).responseText;
                var Respuesta = jQuery.parseJSON(JSON);

                data.setValue(0, 1, Respuesta[0].Wind);
                chart.draw(data, options);
            }, 1300);

        }
    </script>
    <!--end guage Wind -->

    <!--Start guage Rain -->
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['gauge']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Label', 'Rain'],
                ['{{trans('message.Rain')}}', 0]

            ]);
            var options = {
                width: 250,
                height: 250,
                redFrom: 240,
                redTo: 250,
                yellowFrom: 150,
                yellowTo: 240,
                minorTicks: 10,
                greenFrom: 20,
                greenTo: 150,

                max: 250
            };
            var chart = new google.visualization.Gauge(document.getElementById('Rain'));
            chart.draw(data, options);
            setInterval(function() {
                var JSON = $.ajax({
                    url: "dataambientgauge",
                    dataType: 'json',
                    async: false
                }).responseText;
                var Respuesta = jQuery.parseJSON(JSON);

                data.setValue(0, 1, Respuesta[0].Rain);
                chart.draw(data, options);
            }, 1300);

        }
    </script>
    <!--end guage Rain -->

    <!--Start guage Pressure -->
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['gauge']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Label', 'Pressure'],
                ['{{trans('message.Pressure')}}', 0]

            ]);
            var options = {
                width: 250,
                height: 250,
                minorTicks: 10,
                min: 1000,
                max: 1020
            };
            var chart = new google.visualization.Gauge(document.getElementById('Pressure'));
            chart.draw(data, options);
            setInterval(function() {
                var JSON = $.ajax({
                    url: "dataambientgauge",
                    dataType: 'json',
                    async: false
                }).responseText;
                var Respuesta = jQuery.parseJSON(JSON);

                data.setValue(0, 1, Respuesta[0].Pressure);
                chart.draw(data, options);
            }, 1300);

        }
    </script>
    <!--end guage Pressure -->

    <!--Start guage Solar Radiation -->
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['gauge']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Label', 'Solar'],
                ['{{trans('message.Solar Radiation')}}', 0]

            ]);
            var options = {
                width: 250,
                height: 250,
                redFrom: 200,
                redTo: 250,
                yellowFrom: 120,
                yellowTo: 200,
                minorTicks: 10,
                greenFrom: 0,
                greenTo: 120,
                max: 250
            };
            var chart = new google.visualization.Gauge(document.getElementById('Solar'));
            chart.draw(data, options);
            setInterval(function() {
                var JSON = $.ajax({
                    url: "dataambientgauge",
                    dataType: 'json',
                    async: false
                }).responseText;
                var Respuesta = jQuery.parseJSON(JSON);

                data.setValue(0, 1, Respuesta[0].Solar);
                chart.draw(data, options);
            }, 1300);

        }
    </script>
    <!--end guage Pressure -->
@endsection

@section('content')
           <div class="w3-panel">
            <div class="w3-row-padding" style="margin:0 -16px">
                <div class="w3-quarter">
                    <div id="PM10"></div> <!-- guage PM10 -->
                    <div class="w3-container w3-grey w3-round-xxlarge w3-cell">
                        <p id="msg11" class="fas fa-sort-down" style='font-size:16px;color:greenyellow;'></p>
                    </div>
                    <div class="w3-container w3-grey w3-round-xxlarge w3-cell">
                        <p id="msg12" class="fas fa-sort-up" style=' font-size:16px;color:red;'></p>
                    </div>
                </div>
                <div class="w3-quarter">
                    <div id="Tempurature"></div> <!-- guage Tempurature -->
                    <div class="w3-container w3-grey w3-round-xxlarge w3-cell ">
                        <p id="msg13" class="fas fa-sort-down" style='font-size:16px;color:greenyellow;'></p>
                    </div>
                    <div class="w3-container w3-grey w3-round-xxlarge w3-cell ">
                        <p id="msg14" class="fas fa-sort-up" style=' font-size:16px;color:red;'></p>
                    </div>
                </div>
                <div class="w3-quarter">
                    <div id="Humidity"></div> <!-- guage Humidity -->
                    <div class="w3-container w3-grey w3-round-xxlarge w3-cell ">
                        <p id="msg15" class="fas fa-sort-down" style='font-size:16px;color:greenyellow;'></p>
                    </div>
                    <div class="w3-container w3-grey w3-round-xxlarge w3-cell ">
                        <p id="msg16" class="fas fa-sort-up" style=' font-size:16px;color:red;'></p>
                    </div>
                </div>
                <div class="w3-quarter">
                    <div id="Wind"></div> <!-- guage Humidity -->
                    <div class="w3-container w3-grey w3-round-xxlarge w3-cell ">
                        <p id="msg17" class="fas fa-sort-down" style='font-size:16px;color:greenyellow;'></p>
                    </div>
                    <div class="w3-container w3-grey w3-round-xxlarge w3-cell ">
                        <p id="msg18" class="fas fa-sort-up" style=' font-size:16px;color:red;'></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w3-panel">
            <div class="w3-row-padding" style="margin:0 -16px">
                <div class="w3-quarter">
                    <div id="Rain"></div> <!-- guage Humidity -->
                    <div class="w3-container w3-grey w3-round-xxlarge w3-cell ">
                        <p id="msg19" class="fas fa-sort-down" style='font-size:16px;color:greenyellow;'></p>
                    </div>
                    <div class="w3-container w3-grey w3-round-xxlarge w3-cell ">
                        <p id="msg20" class="fas fa-sort-up" style=' font-size:16px;color:red;'></p>
                    </div>
                </div>
                <div class="w3-quarter">
                    <div id="Pressure"></div> <!-- guage Humidity -->
                    <div class="w3-container w3-grey w3-round-xxlarge w3-cell ">
                        <p id="msg21" class="fas fa-sort-down" style='font-size:16px;color:greenyellow;'></p>
                    </div>
                    <div class="w3-container w3-grey w3-round-xxlarge w3-cell ">
                        <p id="msg22" class="fas fa-sort-up" style=' font-size:16px;color:red;'></p>
                    </div>
                </div>
                <div class="w3-quarter">
                    <div id="Solar"></div> <!-- guage Humidity -->
                    <div class="w3-container w3-grey w3-round-xxlarge w3-cell ">
                        <p id="msg23" class="fas fa-sort-down" style='font-size:16px;color:greenyellow;'></p>
                    </div>
                    <div class="w3-container w3-grey w3-round-xxlarge w3-cell ">
                        <p id="msg24" class="fas fa-sort-up" style=' font-size:16px;color:red;'></p>
                    </div>
                </div>


                <div class="w3-row-padding" style="margin:0 -16px">

                </div>
            </div>
        </div>
@endsection
