@extends('master')
@section('title')
    - Weather
@endsection
@section('header')
     <h5><b><i class="fas fa-tachometer-alt"></i> Insert Data My Station</b></h5>
@endsection
@section('ajax')
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
                            document.getElementById("msg1").innerHTML = val["PM10"] + " ug/m^3";
                        });
                    }
                });
        }
        setInterval(getDataFromDb, 1000);
    </script>

    <script>
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
                            document.getElementById("msg3").innerHTML = val["Tempurature"] + " °c";
                            document.getElementById("msg4").innerHTML = val["Humidity"] + " %";
                            document.getElementById("msg5").innerHTML = val["Wind"] + " Km/h";
                            document.getElementById("msg6").innerHTML = val["Wind_Direction"];
                            document.getElementById("msg7").innerHTML = val["Rain"] + " mm";
                            document.getElementById("msg8").innerHTML = val["Pressure"] + " hPa";
                            document.getElementById("msg9").innerHTML = val["Solar"] + " W/m^2";
                            document.getElementById("msg10").innerHTML = val["UV"];
                        });
                    }
                });
        }
        setInterval(getDataFromAm, 1000);
    </script>

    <script>
        function insertdataAmbient(){
            $.ajax({
                  url: 'Am',
                    type: 'GET',
                    data: ''
            });
        }
        setInterval(insertdataAmbient, 60000);
    </script>

<script>
    function insertdatasummary(){
        $.ajax({
              url: 'savedata',
                type: 'GET',
                data: ''
        });
    }
    setInterval(insertdatasummary, 60000);
</script>

@endsection
@section('sidebar-index')
    w3-blue
@endsection
@section('content')
    <div class="w3-row-padding w3-margin-bottom">
            <div class="w3-third">
                    <div class="w3-container w3-red  w3-text-white w3-padding-16 w3-round-xxlarge">
                    <div class="w3-left"><i class="fa fa-leaf w3-xxxlarge"></i></div>
                    <div class="w3-right">
                        <h3 id="msg1">-- ug/m^3</h3>
                    </div>
                    <div class="w3-clear"></div>
                    <h4>PM10</h4>
                </div>
            </div>
            <div class="w3-third">
                <div class="w3-container w3-orange w3-text-white w3-padding-16 w3-round-xxlarge">
                    <div class="w3-left"><i class="	fas fa-temperature-low w3-xxxlarge"></i></div>
                    <div class="w3-right">
                        <h3 id="msg3">-- °c</h3>
                    </div>
                    <div class="w3-clear"></div>
                    <h4>Temperature</h4>
                </div>
            </div>
            <div class="w3-third">
                <div class="w3-container w3-green  w3-text-white w3-padding-16 w3-round-xxlarge">
                    <div class="w3-left"><i class="far fa-snowflake w3-xxxlarge"></i></div>
                    <div class="w3-right">
                        <h3 id="msg4">-- %</h3>
                    </div>
                    <div class="w3-clear"></div>
                    <h4>Humidity</h4>
                </div>
            </div>

        </div>
        <div class="w3-row-padding w3-margin-bottom">
            <div class="w3-third">
                <div class="w3-container w3-dark-gray  w3-text-white w3-padding-16 w3-round-xxlarge">
                    <div class="w3-left"><i class="fa fa-compass w3-xxxlarge"></i></div>
                    <div class="w3-right">
                        <h3 id="msg6">--</h3>
                    </div>
                    <div class="w3-clear"></div>
                    <h4>Wind Direction</h4>
                </div>
            </div>

            <div class="w3-third">
                <div class="w3-container w3-cyan  w3-text-white w3-padding-16 w3-round-xxlarge">
                    <div class="w3-left"><i class="fas fa-wind w3-xxxlarge"></i></div>
                    <div class="w3-right">
                        <h3 id="msg5">-- Km/h</h3>
                    </div>
                    <div class="w3-clear"></div>
                    <h4>Wind</h4>
                </div>
            </div>
            <div class="w3-third">
                <div class="w3-container w3-blue  w3-text-white w3-padding-16 w3-round-xxlarge">
                    <div class="w3-left"><i class="	fas fa-cloud-rain w3-xxxlarge"></i></div>
                    <div class="w3-right">
                        <h3 id="msg7">-- mm</h3>
                    </div>
                    <div class="w3-clear"></div>
                    <h4>Rain</h4>
                </div>
            </div>


        </div>
        <div class="w3-row-padding w3-margin-bottom">
            <div class="w3-third">
                <div class="w3-container w3-indigo  w3-text-white w3-padding-16 w3-round-xxlarge">
                    <div class="w3-left"><i class="fas fa-water w3-xxxlarge"></i></div>
                    <div class="w3-right">
                        <h3 id="msg8">-- hPa</h3>
                    </div>
                    <div class="w3-clear"></div>
                    <h4>Pressure</h4>
                </div>
            </div>
            <div class="w3-third">
                <div class="w3-container w3-deep-orange  w3-text-white w3-padding-16 w3-round-xxlarge">
                    <div class="w3-left"><i class="	fas fa-sun w3-xxxlarge"></i></div>
                    <div class="w3-right">
                        <h3 id="msg10">--</h3>
                    </div>
                    <div class="w3-clear"></div>
                    <h4>UV Index</h4>
                </div>
            </div>

            <div class="w3-third">
                <div class="w3-container w3-amber  w3-text-white w3-padding-16 w3-round-xxlarge">
                    <div class="w3-left"><i class="fas fa-cloud-sun w3-xxxlarge"></i></div>
                    <div class="w3-right">
                        <h3 id="msg9">-- W/m^2</h3>
                    </div>
                    <div class="w3-clear"></div>
                    <h4>Solar Radiation</h4>
                </div>
            </div>

        </div>

        <div class="w3-container w3-light-grey w3-padding-32">
            <div class="w3-row">
                <div class="w3-container w3-half">
                    <h5>Regions</h5>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4559.110774476737!2d102.92795881935372!3d17.452105351929404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31237a685b4f4bc9%3A0x131e6bb055f12cfb!2z4Lih4Lir4Liy4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4Lij4Liy4LiK4Lig4Lix4LiP4Lit4Li44LiU4Lij4LiY4Liy4LiZ4Li1ICjguKjguLnguJnguKLguYzguKrguLLguKHguJ7guKPguYnguLLguKcp!5e0!3m2!1sth!2sth!4v1551636653738" width="500" height="300" frameborder="" style="border:1" allowfullscreen></iframe>

                    <h5>UV Index Range</h5>
                    <table class="w3-table w3-striped w3-white w3-border">
                        <tr>
                            <td><i class="fas fa-sun w3-text-green w3-large"></i></td>
                            <td>Low</td>
                            <td><i>0-2 </i></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-sun w3-text-yellow w3-large"></i></td>
                            <td>Moderate</td>
                            <td><i>3-5 </i></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-sun w3-text-orange w3-large"></i></td>
                            <td> High</td>
                            <td><i>6-7</i></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-sun w3-text-red w3-large"></i></td>
                            <td>Very High</td>
                            <td><i>8-10</i></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-sun w3-deep-purple w3-large"></i></td>
                            <td>Extreme</td>
                            <td><i>above 11</i></td>
                        </tr>
                    </table>

                </div>
                <div class="w3-container w3-half">
                    <h5>PM10 Range (µg/m3)</h5>
                    <table class="w3-table w3-striped w3-white w3-border">
                        <tr>
                            <td><i class="fa fa-leaf w3-text-green w3-large"></i></td>
                            <td>Normal</td>
                            <td><i>0-55 </i></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-leaf w3-text-blue w3-large"></i></td>
                            <td>Elevated</td>
                            <td><i>56-150 </i></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-leaf w3-text-yellow w3-large"></i></td>
                            <td> High</td>
                            <td><i>151-250</i></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-leaf w3-text-red w3-large"></i></td>
                            <td>Very High</td>
                            <td><i>Above 250</i></td>
                        </tr>
                    </table>
                    <h5>Temperature Range (°c)</h5>
                    <table class="w3-table w3-striped w3-white w3-border">
                        <tr>
                            <td><i class="fas fa-temperature-low w3-text-green w3-large"></i></td>
                            <td>Normal</td>
                            <td><i>27-31 </i></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-temperature-low w3-text-yellow w3-large"></i></td>
                            <td>Elevated</td>
                            <td><i>32-40 </i></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-temperature-low w3-text-orange w3-large"></i></td>
                            <td> High</td>
                            <td><i>41-54</i></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-temperature-low w3-text-red w3-large"></i></td>
                            <td>Very High</td>
                            <td><i>Above 54</i></td>
                        </tr>
                    </table>
                    <h5>Wind Range (Km/hr)</h5>
                    <table class="w3-table w3-striped w3-white w3-border">
                        <tr>
                            <td><i class="fas fa-wind w3-text-green w3-large"></i></td>
                            <td>Tropical depression</td>
                            <td><i>0-63 </i> </td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-wind w3-text-orange w3-large"></i></td>
                            <td>Tropical storm</td>
                            <td><i>64-117 </i></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-wind w3-text-red w3-large"></i></td>
                            <td> Typhoon or Hurricane</td>
                            <td><i>above 118</i></td>
                        </tr>

                    </table>
                </div>

            </div>
        </div>
@endsection
