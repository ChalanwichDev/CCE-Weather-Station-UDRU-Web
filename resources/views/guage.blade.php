@extends('master')
@section('active_weather')
    active
@endsection
@section('header')
<script src="//cdn.rawgit.com/Mikhus/canvas-gauges/gh-pages/download/2.1.5/all/gauge.min.js"></script>
<script src="https://cdn.zingchart.com/zingchart.min.js"></script>
<style>
    html,
    body {
        height: 100%;
        width: 100%;
    }

    #myChart {
        height: 100%;
        width: 100%;
        min-height: 150px;
    }

    .zc-ref {
        display: none;
    }

    zing-grid[loading] {
        height: 500px;
    }
</style>
@endsection
@section('content')
    <div class="container-fluid" style="margin-top:5px">
        <div class="row">
                <div class="input-group-prepend">
                <span class="input-group-text" style="background-color: powderblue">STATIONS</span>
                <select class="form-control" name="" id="" >
                    <option value="">South Bangkok Power Plant 1</option>
                    <option value="">South Bangkok Power Plant 2</option>
                    <option value="">South Bangkok Power Plant 3</option>
                    <option value="">South Bangkok Power Plant 4</option>
                </select>
            </div>
        </div>
        <div class="row  mt-3">
            <div class="col" align='center'>
                    <div class="d-inline-flex  p-3 text-white" style="background-color: powderblue;">  
                            <div class="p-2 bg-white text-dark"> 
                                <h3 align='center'>Today's air quality</h3>
                                <h5>24-hr PM2.5 reading (µg/m<sup>3</sup>)</h5>
                                <!-- Injecting radial gauge -->
                                <!--<canvas data-type="radial-gauge"
                                data-width="250"
                                data-height="300"
                                data-units="PM2.5(µg/m3)"
                                data-title="false"
                                data-value="[50,20,30,10]"
                                data-min-value="0"
                                data-max-value="270"
                                data-major-ticks="0,20,40,60,80,100,120,140,160,180,200,220,250,270"
                                data-minor-ticks="1"
                                data-stroke-ticks="false"
                                data-highlights='[
                                    { "from": 0, "to": 55, "color": "green" },
                                    { "from": 56, "to": 150, "color": "blue" },
                                    { "from": 151, "to": 250, "color": "orange" },
                                    { "from": 251, "to": 270,  "color": "red" }
                                ]'
                                data-color-plate="powderblue"
                                data-color-major-ticks="#f5f5f5"
                                data-color-minor-ticks="#ddd"
                                data-color-title="black"
                                data-color-units="black"
                                data-color-numbers="black"
                                data-color-needle-start="green"
                                data-color-needle-end="rgba(255, 160, 122, .9)"
                                data-value-box="true"
                                data-animation-rule="bounce"
                                data-animation-duration="500"
                                data-font-value="Led"
                                data-animated-value="true"
                                >
                                </canvas>-->
                                <!--<canvas data-type="linear-gauge"
                                data-width="400"
                                data-height="200"
                                data-units="PM2.5(µg/m3)"
                                data-title="PM2.5"
                                data-min-value="0"
                                data-max-value="270"
                                data-value="150"
                                data-major-ticks="&#91;0,20,40,60,80,100,120,140,160,180,200,220,250,270&#93;"
                                data-minor-ticks="2"
                                data-stroke-ticks="true"
                                data-ticks-width="15"
                                data-ticks-width-minor="7.5"
                                data-highlights='&#91; { "from": 0, "to": 55, "color": "green" },
                                { "from": 56, "to": 150, "color": "blue" },
                                { "from": 151, "to": 250, "color": "orange" },
                                { "from": 251, "to": 270,  "color": "red" }&#93;'
                                data-color-major-ticks="#ffe66a"
                                data-color-minor-ticks="#ffe66a"
                                data-color-title="black"
                                data-color-units="black"
                                data-color-numbers="black"
                                data-color-plate="powderblue"
                                data-color-plate-end="powderblue"
                                data-border-shadow-width="0"
                                data-borders="true"
                                data-border-radius="10"
                                data-needle-type="arrow"
                                data-needle-width="3"
                                data-animation-duration="1500"
                                data-animation-rule="linear"
                                data-color-needle="#222"
                                data-color-needle-end=""
                                data-color-bar-progress="#327ac0"
                                data-color-bar="#f5f5f5"
                                data-bar-stroke="0"
                                data-bar-width="8"
                                data-bar-begin-circle="false"
                            >
                            </canvas>-->
                           <div id='myChart'><a class="zc-ref" href="https://www.zingchart.com/">Charts by ZingChart</a></div>
                            <script>
                                ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "b55b025e438fa8a98e32482b5f768ff5"];
                                window.feed = function(callback) {
                                    var tick = {};
                                    tick.plot0 = Math.ceil(350 + (Math.random() * 500));
                                    callback(JSON.stringify(tick));
                                };
                         
                                var myConfig = {
                                    type: "gauge",
                                    globals: {
                                        fontSize: 12
                                    },
                                    plotarea: {
                                        marginTop: 10
                                    },
                                    plot: {
                                        size: '100%',
                                        valueBox: {
                                            placement: 'center',
                                            text: '%v', //default
                                            fontSize: 20,
                                            rules: [{
                                                    rule: '%v >= 0 && %v <= 55.9',
                                                    text: '%v<br>Normal'
                                                },
                                                {
                                                    rule: '%v >= 56 && %v <= 150.9',
                                                    text: '%v<br>Elevated'
                                                },
                                                {
                                                    rule: '%v >= 151 && %v <= 249.9',
                                                    text: '%v<br>High'
                                                },
                                                {
                                                    rule: '%v >= 250',
                                                    text: '%v<br>Very High'
                                                }
                                            ]
                                        }
                                    },
                                    tooltip: {
                                        borderRadius: 5
                                    },
                                    scaleR: {
                                        aperture: 320,
                                        minValue: 0,
                                        maxValue: 270,
                                        step: 10,
                                        center: {
                                            visible: true
                                        },
                                        tick: {
                                            visible: true
                                        },
                                        item: {
                                            offsetR: 0,
                                            rules: [{
                                                rule: '%i == 9',
                                                offsetX: 15
                                            }]
                                        },
                                        labels: ["0","20","40","60","80","100","120","140","160","180","200","220","250","270"],
                                        ring: {
                                            size: 20,
                                            rules: [{
                                                    rule: '%v >= 0 && %v <= 55.9',
                                                    backgroundColor: 'green'
                                                },
                                                {
                                                    rule: '%v >= 56 && %v <= 150.9',
                                                    backgroundColor: 'blue'
                                                },
                                                {
                                                    rule: '%v >= 151 && %v <= 249.9',
                                                    backgroundColor: 'orange'
                                                },
                                                {
                                                    rule: '%v >= 250',
                                                    backgroundColor: 'red'
                                                }
                                            ]
                                        }
                                    },
                                    refresh: {
                                        type: "json",
                                        transport: "js",
                                        url: "datadustdtec",
                                        interval: 1000,
                                        resetTimeout: 1000
                                    },
                                    series: [{
                                        values: [90], // starting value
                                        backgroundColor: 'black',
                                        indicator: [10, 10, 10, 10, 0.75],
                                        animation: {
                                            effect: 2,
                                            method: 1,
                                            sequence: 4,
                                            speed: 900
                                        },
                                    }]
                                };
                         
                                zingchart.render({
                                    id: 'myChart',
                                    data: myConfig,
                                    height: 300,
                                    width: '100%'
                                });
                            </script>
                            </div>
                            
                    </div>
                    
            </div>         
        </div>
    </div>
    <!--<script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/test.js')}}" type="text/javascript"></script>-->
@endsection