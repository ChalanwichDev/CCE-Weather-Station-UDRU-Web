@extends('master')
@section('title')
    - Weather
@endsection
@section('header')
@endsection

@section('sidebar-index')
    w3-blue
@endsection
@section('content')

    <div class="w3-row-padding w3-margin-bottom">
            <div class="w3-third">
                    <div class="w3-container w3-blue  w3-padding-16 w3-round-xxlarge" id="PM10" >
                    <div class="w3-left">  <i class="fa fa-leaf w3-xxxlarge"></i></div>
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
            <div class="w3-third">
                <div class="w3-container w3-blue w3-text w3-padding-16 w3-round-xxlarge" id="Tempurature">
                    <div class="w3-left"><i class="	fas fa-temperature-low w3-xxxlarge"></i></div>
                    <div class="w3-right">
                        <table>
                            <tr>
                                <td><h3 id="msg3">--</h3></td>
                                <td><h3>{{trans('message.°C')}}</h3></td>
                            </tr>
                        </table>
                    </div>
                    <div class="w3-clear"></div>
                    <h4>{{trans('message.Tempurature')}}</h4>
                </div>
            </div>
            <div class="w3-third">
                <div class="w3-container w3-blue  w3-text w3-padding-16 w3-round-xxlarge" id="Humidity">
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

        </div>
        <div class="w3-row-padding w3-margin-bottom">
            <div class="w3-third">
                <div class="w3-container w3-dark-gray  w3-text-white w3-padding-16 w3-round-xxlarge">
                    <div class="w3-left"><i class="fa fa-compass w3-xxxlarge"></i></div>
                    <div class="w3-right">
                        <h3 id="msg6">--</h3>
                    </div>
                    <div class="w3-clear"></div>
                    <h4>{{trans('message.Wind Direction')}}</h4>
                </div>
            </div>

            <div class="w3-third">
                <div class="w3-container w3-cyan  w3-text-white w3-padding-16 w3-round-xxlarge" id="Wind" >
                    <div class="w3-left"><i class="fas fa-wind w3-xxxlarge"></i></div>
                    <div class="w3-right">
                        <h3 id="msg5">--&nbsp;{{trans('message.Km/h')}}</h3>
                    </div>
                    <div class="w3-clear"></div>
                    <h4>{{trans('message.Wind')}}</h4>
                </div>
            </div>
            <div class="w3-third">
                <div class="w3-container w3-blue  w3-text w3-padding-16 w3-round-xxlarge" id="Rain">
                    <div class="w3-left"><i class="	fas fa-cloud-rain w3-xxxlarge"></i></div>
                    <div class="w3-right">
                        <h3 id="msg7">--&nbsp;{{trans('message.mm')}}</h3>
                    </div>
                    <div class="w3-clear"></div>
                    <h4>{{trans('message.Rain')}}</h4>
                </div>
            </div>


        </div>
        <div class="w3-row-padding w3-margin-bottom">
            <div class="w3-third">
                <div class="w3-container w3-indigo  w3-text-white w3-padding-16 w3-round-xxlarge">
                    <div class="w3-left"><i class="fas fa-water w3-xxxlarge"></i></div>
                    <div class="w3-right">
                        <h3 id="msg8">--&nbsp;{{trans('message.hPa')}}</h3>
                    </div>
                    <div class="w3-clear"></div>
                    <h4>{{trans('message.Pressure')}}</h4>
                </div>
            </div>
            <div class="w3-third">
                <div class="w3-container w3-green  w3-text-white w3-padding-16 w3-round-xxlarge" id="UV_index">
                    <div class="w3-left"><i class="	fas fa-sun w3-xxxlarge"></i></div>
                    <div class="w3-right">
                        <h3 id="msg10">--</h3>
                    </div>
                    <div class="w3-clear"></div>
                    <h4>{{trans('message.UV Index')}}</h4>
                </div>
            </div>

            <div class="w3-third">
                <div class="w3-container w3-amber  w3-text-white w3-padding-16 w3-round-xxlarge" id="Solar">
                    <div class="w3-left"><i class="fas fa-cloud-sun w3-xxxlarge"></i></div>
                    <div class="w3-right">
                        <h3 id="msg9">--&nbsp;{{trans('message.W/m')}}<sup>2</sup></h3>
                    </div>
                    <div class="w3-clear"></div>
                    <h4>{{trans('message.Solar Radiation')}}</h4>
                </div>
            </div>

        </div>

        <div class="w3-container w3-light-grey w3-padding-32">
            <div class="w3-row">
                <div class="w3-container w3-half">
                    <h5>{{trans('message.Regions')}}</h5>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4559.110774476737!2d102.92795881935372!3d17.452105351929404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31237a685b4f4bc9%3A0x131e6bb055f12cfb!2z4Lih4Lir4Liy4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4Lij4Liy4LiK4Lig4Lix4LiP4Lit4Li44LiU4Lij4LiY4Liy4LiZ4Li1ICjguKjguLnguJnguKLguYzguKrguLLguKHguJ7guKPguYnguLLguKcp!5e0!3m2!1sth!2sth!4v1551636653738" width="450" height="300" frameborder="" style="border:1" allowfullscreen></iframe>
                    <br>
                    <!--var positions = {lat: 17.4517878, lng: 102.9339000};-->
                    <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlFtmZCzKWIYGevwk4VQbwP9Z45-e3qGo&callback=initMap"-->
                    <table class="w3-table-all w3-hoverable">
                        <thead>
                          <tr class="w3-light-green">
                            <th>{{trans('message.1-min reading')}}</th>
                            <th></th>
                            <th>{{trans('message.Descriptor')}}</th>
                          </tr>
                        </thead>
                        <tr>
                          <td>{{trans('message.PM10')}}</td>
                          <td><i class="fa fa-circle w3-text-green w3-large" id="circle_PM10" ></td>
                          <td id="status_pm10"></td>  
                        </tr>
                        <tr>
                          <td>{{trans('message.Temperature')}}</td>
                          <td><i class="fa fa-circle w3-text-green w3-large" id="circle_Tem"></td>
                          <td id="status_tem"></td> 
                        </tr>
                        <tr>
                          <td>{{trans('message.Wind')}}</td>
                          <td><i class="fa fa-circle w3-text-green w3-large" id="circle_Wind"></td>
                          <td id="status_Wind"></td>
                        </tr>
                        <tr>
                            <td>{{trans('message.Rain')}}</td>
                            <td><i class="fa fa-circle w3-text-green w3-large" id="circle_Rain"></td>
                            <td id="status_Rain"></td>
                        </tr>
                        <tr>
                            <td>{{trans('message.UV Index')}}</td>
                            <td><i class="fa fa-circle w3-text-green w3-large" id="circle_UV"></td>
                            <td id="status_UV"></td>
                        </tr>
                      </table>
                    <br>
                    <table class="w3-table w3-striped w3-white w3-border">
                        <thead>
                            <tr class="w3-light-green">
                                <th></th>
                                <th>{{trans('message.Descriptor')}}</th>
                                <th>{{trans('message.PM10 Range')}} ({{trans('message.μg/m')}}<sup>3</sup>)</th>
                            </tr>
                        </thead>
                        <tr>
                            <td><i class="fa fa-leaf w3-text-blue w3-large"></i></td>
                            <td>{{trans('message.Very Low')}}</td>
                            <td><i>0-25 </i></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-leaf w3-text-green w3-large"></i></td>
                            <td>{{trans('message.Low')}}</td>
                            <td><i>26-50 </i></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-leaf w3-text-amber w3-large"></i></td>
                            <td>{{trans('message.Moderate')}}</td>
                            <td><i>51-100 </i></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-leaf w3-text-orange w3-large"></i></td>
                            <td> {{trans('message.High')}}</td>
                            <td><i>101-200</i></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-leaf w3-text-red w3-large"></i></td>
                            <td>{{trans('message.Very High')}}</td>
                            <td><i>{{trans('message.Above')}} 200</i></td>
                        </tr>
                    </table>
                    <br>
                    
                    <table class="w3-table w3-striped w3-white w3-border">
                        <thead>
                            <tr class="w3-light-green">
                                <th></th>
                                <th>{{trans('message.Descriptor')}}</th>
                                <th>{{trans('message.Temperature Range')}} ({{trans('message.°C')}})</th>
                            </tr>
                        </thead>
                        <tr>
                            <td><i class="fas fa-temperature-low w3-text-light-blue w3-large"></i></td>
                            <td>{{trans('message.Very Cold')}}</td>
                            <td><i>{{trans('message.Less')}} 7</i></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-temperature-low w3-text-aqua w3-large"></i></td>
                            <td>{{trans('message.Cold')}}</td>
                            <td><i>8-15 </i></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-temperature-low w3-text-cyan w3-large"></i></td>
                            <td>{{trans('message.Moderately Cold')}}</td>
                            <td><i>16-17 </i></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-temperature-low w3-text-blue w3-large"></i></td>
                            <td>{{trans('message.Cool')}}</td>
                            <td><i>18-22 </i></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-temperature-low w3-text-green w3-large"></i></td>
                            <td>{{trans('message.Normal')}}</td>
                            <td><i>23-34 </i></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-temperature-low w3-text-deep-orange w3-large"></i></td>
                            <td>{{trans('message.Hot')}}</td>
                            <td><i>35-40</i></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-temperature-low w3-text-red w3-large"></i></td>
                            <td>{{trans('message.Very Hot')}}</td>
                            <td><i>{{trans('message.Above')}} 40</i></td>
                        </tr>
                    </table>
                    <br>
                </div>
                <div class="w3-container w3-half"> 
                    
                    <table class="w3-table w3-striped w3-white w3-border">
                        <thead>
                            <tr class="w3-light-green">
                                <th></th>
                                <th>{{trans('message.Descriptor')}}</th>
                                <th>{{trans('message.Wind Range')}} ({{trans('message.Km/h')}})</th>
                            </tr>
                        </thead>
                        <tr>
                            <td><i class="fas fa-wind w3-text-light-blue w3-large"></i></td>
                            <td>{{trans('message.Calm')}}</td>
                            <td><i>{{trans('message.Less')}} 1 </i> </td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-wind w3-text-light-blue w3-large"></i></td>
                            <td>{{trans('message.Light Air')}}</td>
                            <td><i>1-5 </i></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-wind w3-text-aqua w3-large"></i></td>
                            <td>{{trans('message.Light Breeze')}}</td>
                            <td><i>6-11</i></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-wind w3-text-blue w3-large"></i></td>
                            <td>{{trans('message.Gentle Breeze')}}</td>
                            <td><i>12-19</i></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-wind w3-text-cyan w3-large"></i></td>
                            <td>{{trans('message.Moderate Breeze')}}</td>
                            <td><i>20-28</i></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-wind w3-text-green w3-large"></i></td>
                            <td>{{trans('message.Fresh Breeze')}}</td>
                            <td><i>29-38</i></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-wind w3-text-amber w3-large"></i></td>
                            <td>{{trans('message.Strong Breeze')}}</td>
                            <td><i>39-49</i></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-wind w3-text-deep-orange w3-large"></i></td>
                            <td>{{trans('message.Near Gale')}}</td>
                            <td><i>50-61</i></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-wind w3-text-red w3-large"></i></td>
                            <td>{{trans('message.Gale')}}</td>
                            <td><i>62-74</i></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-wind w3-text-red w3-large"></i></td>
                            <td>{{trans('message.Strong Gale')}}</td>
                            <td><i>75-88</i></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-wind w3-text-red w3-large"></i></td>
                            <td>{{trans('message.Storm')}}</td>
                            <td><i>89-102</i></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-wind w3-text-red w3-large"></i></td>
                            <td>{{trans('message.Violent Storm')}}</td>
                            <td><i>103-117</i></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-wind w3-text-red w3-large"></i></td>
                            <td>{{trans('message.Typhoon or Hurricane')}}</td>
                            <td><i>{{trans('message.Above')}} 117</i></td>
                        </tr>
                    </table>
                    <br>

                    <table class="w3-table w3-striped w3-white w3-border">
                            <thead>
                                <tr class="w3-light-green">
                                    <th></th>
                                    <th>{{trans('message.Descriptor')}}</th>
                                    <th>{{trans('message.Rain Range')}} ({{trans('message.mm')}})</th>
                                </tr>
                            </thead>
                        <tr>
                            <td><i class="fas fa-cloud-rain w3-text-blue w3-large"></i></td>
                            <td>{{trans('message.No Rain')}}</td>
                            <td><i>{{trans('message.Less')}} 0.1</i></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-cloud-rain w3-text-light-green w3-large"></i></td>
                            <td>{{trans('message.Light Rain')}}</td>
                            <td><i>0.1-10</i></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-cloud-rain w3-text-amber w3-large"></i></td>
                            <td>{{trans('message.Moderate Rain')}}</td>
                            <td><i>11-35</i></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-cloud-rain w3-text-deep-orange w3-large"></i></td>
                            <td>{{trans('message.Heavy Rain')}}</td>
                            <td><i>36-90</i></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-cloud-rain w3-text-red w3-large"></i></td>
                            <td>{{trans('message.Very Heavy Rain')}}</td>
                            <td><i>{{trans('message.Above')}} 90</i></td>
                        </tr>
                    </table>
                    <br>

                  
                    <table class="w3-table w3-striped w3-white w3-border">
                        <thead>
                            <tr class="w3-light-green">
                                <th></th>
                                <th>{{trans('message.Descriptor')}}</th>
                                <th>{{trans('message.UV Index Range')}}</th>
                            </tr>
                        </thead>
                        <tr>
                            <td><i class="fas fa-sun w3-text-green w3-large"></i></td>
                            <td>{{trans('message.Low')}}</td>
                            <td><i>0-2 </i></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-sun w3-text-yellow w3-large"></i></td>
                            <td>{{trans('message.Moderate')}}</td>
                            <td><i>3-5 </i></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-sun w3-text-orange w3-large"></i></td>
                            <td> {{trans('message.High')}}</td>
                            <td><i>6-7</i></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-sun w3-text-red w3-large"></i></td>
                            <td>{{trans('message.Very High')}}</td>
                            <td><i>8-10</i></td>
                        </tr>
                        <tr>
                            <td><i class="fas fa-sun w3-text-deep-purple w3-large"></i></td>
                            <td>{{trans('message.Extreme')}}</td>
                            <td><i>{{trans('message.Above')}} 11</i></td>
                        </tr>
                    </table>
                </div>

            </div>
            <iframe height="430" width="100%" src="https://bot.dialogflow.com/3870f7f6-119e-43e9-86ee-c75f5a6cb91b"></iframe>
        </div>
        
@endsection
@section('ajax')
{{-- <script src="{{asset('js/index.js')}}" type="text/javascript"></script> --}}
<script>
    function getDataFromDb() {
        $.ajax({
                url: 'api/datadustdtec',
                type: "GET",
                data: ''
            })
            .success(function(result) {
                var obj = jQuery.parseJSON(JSON.stringify(result));
                console.log(result);
                var PM10 = document.getElementById("msg1").innerHTML = obj.PM10;
                        if ((obj.PM10 >= 0) && (obj.PM10 <= 25.99)) {
                            document.getElementById('PM10').className = "w3-container w3-blue  w3-text-white w3-padding-16 w3-round-xxlarge";
                            document.getElementById('status_pm10').innerHTML = "{{trans('message.Very Low')}}";
                            document.getElementById('circle_PM10').className = "fa fa-circle w3-text-blue w3-large";
                        } else if ((obj.PM10 >= 26) && (obj.PM10 <= 50.99)) {
                            document.getElementById('PM10').className = "w3-container w3-green  w3-text-white w3-padding-16 w3-round-xxlarge";
                            document.getElementById('status_pm10').innerHTML = "{{trans('message.Low')}}";
                            document.getElementById('circle_PM10').className = "fa fa-circle w3-text-green w3-large";
                        } else if ((obj.PM10>= 51) && (obj.PM10 <= 100.99)) {
                            document.getElementById('PM10').className = "w3-container w3-amber  w3-text-white w3-padding-16 w3-round-xxlarge";
                            document.getElementById('status_pm10').innerHTML = "{{trans('message.Moderate')}}";
                            document.getElementById('circle_PM10').className = "fa fa-circle w3-text-amber w3-large";
                        } else if ((obj.PM10 >= 101) && (obj.PM10<= 199.99)) {
                            document.getElementById('PM10').className = "w3-container w3-orange  w3-text-white w3-padding-16 w3-round-xxlarge";
                            document.getElementById('status_pm10').innerHTML = "{{trans('message.High')}}";
                            document.getElementById('circle_PM10').className = "fa fa-circle w3-text-orange  w3-large";
                        } else if (obj.PM10 >= 200) {
                            document.getElementById('PM10').className = "w3-container w3-red  w3-text-white w3-padding-16 w3-round-xxlarge";
                            document.getElementById('status_pm10').innerHTML = "{{trans('message.Very High')}}";
                            document.getElementById('circle_PM10').className = "fa fa-circle w3-text-red w3-large";
                        }
                    });
                }
    setInterval(getDataFromDb, 1000);
    </script>
    <script>
        function getDataFromAm() {
    $.ajax({
            url: 'api/dataambient',
            type: 'GET',
            data: ''
        })
        .success(function(result) {
            var obj1 = jQuery.parseJSON(JSON.stringify(result));
            document.getElementById("msg3").innerHTML = obj1.Tempurature;
                    document.getElementById("msg4").innerHTML = obj1.Humidity;
                    document.getElementById("msg5").innerHTML = obj1.Wind + "&nbsp;{{trans('message.Km/h')}}";
                    document.getElementById("msg6").innerHTML = obj1.Wind_Direction;
                    document.getElementById("msg7").innerHTML = obj1.Rain + "&nbsp;{{trans('message.mm')}}";
                    document.getElementById("msg8").innerHTML = obj1.Pressure + "&nbsp;{{trans('message.hPa')}}";
                    document.getElementById("msg9").innerHTML = obj1.Solar + "&nbsp;{{trans('message.W/m')}}<sup>2</sup>";
                    document.getElementById("msg10").innerHTML = obj1.UV;

                    if (obj1.Tempurature <= 7.99) {
                        document.getElementById('Tempurature').className = "w3-container w3-pale-blue w3-text w3-padding-16 w3-round-xxlarge";
                        document.getElementById('status_tem').innerHTML = "{{trans('message.Very Cold')}}";
                        document.getElementById('circle_Tem').className = "fa fa-circle w3-text-pale-blue w3-large";
                    } else if ((obj1.Tempurature >= 8 && obj1.Tempurature <= 15.9)) {
                        document.getElementById('Tempurature').className = "w3-container w3-aqua w3-text w3-padding-16 w3-round-xxlarge";
                        document.getElementById('status_tem').innerHTML = "{{trans('message.Cold')}}";
                        document.getElementById('circle_Tem').className = "fa fa-circle w3-text-aqua w3-large";
                    } else if ((obj1.Tempurature >= 16 && obj1.Tempurature <= 17.9)) {
                        document.getElementById('Tempurature').className = "w3-container w3-cyan w3-text-white w3-padding-16 w3-round-xxlarge";
                        document.getElementById('status_tem').innerHTML = "{{trans('message.Moderately Cold')}}";
                        document.getElementById('circle_Tem').className = "fa fa-circle w3-text-cyan w3-large";
                    } else if ((obj1.Tempurature >= 18 && obj1.Tempurature <= 22.9)) {
                        document.getElementById('Tempurature').className = "w3-container w3-blue w3-text-white w3-padding-16 w3-round-xxlarge";
                        document.getElementById('status_tem').innerHTML = "{{trans('message.Cool')}}";
                        document.getElementById('circle_Tem').className = "fa fa-circle w3-text-blue w3-large";
                    } else if ((obj1.Tempurature >= 23 && obj1.Tempurature <= 34.9)) {
                        document.getElementById('Tempurature').className = "w3-container w3-green w3-text-white w3-padding-16 w3-round-xxlarge";
                        document.getElementById('status_tem').innerHTML = "{{trans('message.Normal')}}";
                        document.getElementById('circle_Tem').className = "fa fa-circle w3-text-green w3-large";
                    } else if ((obj1.Tempurature >= 35 && obj1.Tempurature <= 39.9)) {
                        document.getElementById('Tempurature').className = "w3-container w3-deep-orange w3-text-white w3-padding-16 w3-round-xxlarge";
                        document.getElementById('status_tem').innerHTML = "{{trans('message.Hot')}}";
                        document.getElementById('circle_Tem').className = "fa fa-circle w3-text-deep-orange w3-large";
                    } else if (obj1.Tempurature >= 40) {
                        document.getElementById('Tempurature').className = "w3-container w3-red w3-text-white w3-padding-16 w3-round-xxlarge";
                        document.getElementById('status_tem').innerHTML = "{{trans('message.Very Hot')}}";
                        document.getElementById('circle_Tem').className = "fa fa-circle w3-text-red  w3-large";
                    }
                    //ความชื้น
                    if ((obj1.Humidity >= 30 && obj1.Humidity <= 34.9) && (obj1.Tempurature >= 27 && obj1.Tempurature <= 28.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-blue w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 35 && obj1.Humidity <= 39.9) && (obj1.Tempurature >= 24 && obj1.Tempurature <= 27.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-blue w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 40 && obj1.Humidity <= 44.9) && (obj1.Tempurature >= 23 && obj1.Tempurature <= 27.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-blue w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 45 && obj1.Humidity <= 49.9) && (obj1.Tempurature >= 21 && obj1.Tempurature <= 26.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-blue w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 50 && obj1.Humidity <= 54.9) && (obj1.Tempurature >= 21 && obj1.Tempurature <= 25.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-blue w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 55 && obj1.Humidity <= 59.9) && (obj1.Tempurature >= 21 && obj1.Tempurature <= 25.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-blue w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 60 && obj1.Humidity <= 64.9) && (obj1.Tempurature >= 21 && obj1.Tempurature <= 24.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-blue w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 65 && obj1.Humidity <= 69.9) && (obj1.Tempurature >= 21 && obj1.Tempurature <= 24.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-blue w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 70 && obj1.Humidity <= 74.9) && (obj1.Tempurature >= 21 && obj1.Tempurature <= 23.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-blue w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 75 && obj1.Humidity <= 79.9) && (obj1.Tempurature >= 21 && obj1.Tempurature <= 23.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-blue w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 80 && obj1.Humidity <= 84.9) && (obj1.Tempurature >= 21 && obj1.Tempurature <= 22.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-blue w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 85 && obj1.Humidity <= 89.9) && (obj1.Tempurature >= 21 && obj1.Tempurature <= 22.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-blue w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 90 && obj1.Humidity <= 94.9) && (obj1.Tempurature >= 21 && obj1.Tempurature <= 21.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-blue w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 95 && obj1.Humidity <= 99.9) && (obj1.Tempurature >= 21 && obj1.Tempurature <= 21.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-blue w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity = 100) && (obj1.Tempurature >= 21 && obj1.Tempurature <= 21.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-blue w3-text-white w3-padding-16 w3-round-xxlarge";
                    }
                    //เขียว
                    else if ((obj1.Humidity >= 25 && obj1.Humidity <= 29.9) && (obj1.Tempurature >= 30 && obj1.Tempurature <= 35.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-green w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 30 && obj1.Humidity <= 34.9) && (obj1.Tempurature >= 29 && obj1.Tempurature <= 34.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-green w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 35 && obj1.Humidity <= 39.9) && (obj1.Tempurature >= 28 && obj1.Tempurature <= 33.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-green w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 40 && obj1.Humidity <= 44.9) && (obj1.Tempurature >= 28 && obj1.Tempurature <= 32.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-green w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 45 && obj1.Humidity <= 49.9) && (obj1.Tempurature >= 27 && obj1.Tempurature <= 32.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-green w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 50 && obj1.Humidity <= 54.9) && (obj1.Tempurature >= 26 && obj1.Tempurature <= 31.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-green w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 55 && obj1.Humidity <= 59.9) && (obj1.Tempurature >= 26 && obj1.Tempurature <= 30.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-green w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 60 && obj1.Humidity <= 64.9) && (obj1.Tempurature >= 25 && obj1.Tempurature <= 30.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-green w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 65 && obj1.Humidity <= 69.9) && (obj1.Tempurature >= 25 && obj1.Tempurature <= 29.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-green w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 70 && obj1.Humidity <= 74.9) && (obj1.Tempurature >= 24 && obj1.Tempurature <= 28.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-green w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 75 && obj1.Humidity <= 79.9) && (obj1.Tempurature >= 24 && obj1.Tempurature <= 28.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-green w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 80 && obj1.Humidity <= 84.9) && (obj1.Tempurature >= 23 && obj1.Tempurature <= 27.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-green w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 85 && obj1.Humidity <= 89.9) && (obj1.Tempurature >= 23 && obj1.Tempurature <= 27.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-green w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 90 && obj1.Humidity <= 94.9) && (obj1.Tempurature >= 22 && obj1.Tempurature <= 26.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-green w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 95 && obj1.Humidity <= 99.9) && (obj1.Tempurature >= 22 && obj1.Tempurature <= 26.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-green w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity = 100) && (obj1.Tempurature >= 22 && obj1.Tempurature <= 25.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-green w3-text-white w3-padding-16 w3-round-xxlarge";
                    }
                    //เหลือง
                    else if ((obj1.Humidity >= 20 && obj1.Humidity <= 24.9) && (obj1.Tempurature >= 38 && obj1.Tempurature <= 42.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-amber w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 25 && obj1.Humidity <= 29.9) && (obj1.Tempurature >= 36 && obj1.Tempurature <= 40.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-amber w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 30 && obj1.Humidity <= 34.9) && (obj1.Tempurature >= 35 && obj1.Tempurature <= 39.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-amber w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 35 && obj1.Humidity <= 39.9) && (obj1.Tempurature >= 34 && obj1.Tempurature <= 38.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-amber w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 40 && obj1.Humidity <= 44.9) && (obj1.Tempurature >= 33 && obj1.Tempurature <= 37.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-amber w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 45 && obj1.Humidity <= 49.9) && (obj1.Tempurature >= 33 && obj1.Tempurature <= 36.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-amber w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 50 && obj1.Humidity <= 54.9) && (obj1.Tempurature >= 32 && obj1.Tempurature <= 35.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-amber w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 55 && obj1.Humidity <= 59.9) && (obj1.Tempurature >= 31 && obj1.Tempurature <= 34.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-amber w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 60 && obj1.Humidity <= 64.9) && (obj1.Tempurature >= 31 && obj1.Tempurature <= 33.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-amber w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 65 && obj1.Humidity <= 69.9) && (obj1.Tempurature >= 30 && obj1.Tempurature <= 33.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-amber w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 70 && obj1.Humidity <= 74.9) && (obj1.Tempurature >= 29 && obj1.Tempurature <= 32.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-amber w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 75 && obj1.Humidity <= 79.9) && (obj1.Tempurature >= 29 && obj1.Tempurature <= 31.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-amber w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 80 && obj1.Humidity <= 84.9) && (obj1.Tempurature >= 28 && obj1.Tempurature <= 31.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-amber w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 85 && obj1.Humidity <= 89.9) && (obj1.Tempurature >= 28 && obj1.Tempurature <= 30.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-amber w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 90 && obj1.Humidity <= 94.9) && (obj1.Tempurature >= 27 && obj1.Tempurature <= 30.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-amber w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 95 && obj1.Humidity <= 99.9) && (obj1.Tempurature >= 27 && obj1.Tempurature <= 29.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-amber w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity = 100) && (obj1.Tempurature >= 26 && obj1.Tempurature <= 29.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-amber w3-text-white w3-padding-16 w3-round-xxlarge";
                    }
                    //ส้ม
                    else if ((obj1.Humidity >= 20 && obj1.Humidity <= 24.9) && (obj1.Tempurature >= 43 && obj1.Tempurature <= 43.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-orange w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 25 && obj1.Humidity <= 29.9) && (obj1.Tempurature >= 41 && obj1.Tempurature <= 43.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-orange w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 30 && obj1.Humidity <= 34.9) && (obj1.Tempurature >= 40 && obj1.Tempurature <= 43.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-orange w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 35 && obj1.Humidity <= 39.9) && (obj1.Tempurature >= 39 && obj1.Tempurature <= 43.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-orange w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 40 && obj1.Humidity <= 44.9) && (obj1.Tempurature >= 38 && obj1.Tempurature <= 42.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-orange w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 45 && obj1.Humidity <= 49.9) && (obj1.Tempurature >= 37 && obj1.Tempurature <= 40.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-orange w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 50 && obj1.Humidity <= 54.9) && (obj1.Tempurature >= 36 && obj1.Tempurature <= 39.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-orange w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 55 && obj1.Humidity <= 59.9) && (obj1.Tempurature >= 35 && obj1.Tempurature <= 38.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-orange w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 60 && obj1.Humidity <= 64.9) && (obj1.Tempurature >= 34 && obj1.Tempurature <= 38.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-orange w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 65 && obj1.Humidity <= 69.9) && (obj1.Tempurature >= 34 && obj1.Tempurature <= 37.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-orange w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 70 && obj1.Humidity <= 74.9) && (obj1.Tempurature >= 33 && obj1.Tempurature <= 36.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-orange w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 75 && obj1.Humidity <= 79.9) && (obj1.Tempurature >= 32 && obj1.Tempurature <= 35.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-orange w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 80 && obj1.Humidity <= 84.9) && (obj1.Tempurature >= 32 && obj1.Tempurature <= 35.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-orange w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 85 && obj1.Humidity <= 89.9) && (obj1.Tempurature >= 31 && obj1.Tempurature <= 34.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-orange w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 90 && obj1.Humidity <= 94.9) && (obj1.Tempurature >= 31 && obj1.Tempurature <= 33.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-orange w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 95 && obj1.Humidity <= 99.9) && (obj1.Tempurature >= 30 && obj1.Tempurature <= 33.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-orange w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity = 100) && (obj1.Tempurature >= 30 && obj1.Tempurature <= 32.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-orange w3-text-white w3-padding-16 w3-round-xxlarge";
                    }
                    //แดง
                    else if ((obj1.Humidity >= 40 && obj1.Humidity <= 44.9) && (obj1.Tempurature >= 43 && obj1.Tempurature <= 43.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-red w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 45 && obj1.Humidity <= 49.9) && (obj1.Tempurature >= 41 && obj1.Tempurature <= 42.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-red w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 50 && obj1.Humidity <= 54.9) && (obj1.Tempurature >= 40 && obj1.Tempurature <= 41.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-red w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 55 && obj1.Humidity <= 59.9) && (obj1.Tempurature >= 39 && obj1.Tempurature <= 40.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-red w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 60 && obj1.Humidity <= 64.9) && (obj1.Tempurature >= 39 && obj1.Tempurature <= 39.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-red w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 65 && obj1.Humidity <= 69.9) && (obj1.Tempurature >= 38 && obj1.Tempurature <= 38.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-red w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 70 && obj1.Humidity <= 74.9) && (obj1.Tempurature >= 37 && obj1.Tempurature <= 38.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-red w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 75 && obj1.Humidity <= 79.9) && (obj1.Tempurature >= 36 && obj1.Tempurature <= 37.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-red w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 80 && obj1.Humidity <= 84.9) && (obj1.Tempurature >= 36 && obj1.Tempurature <= 37.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-red w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 85 && obj1.Humidity <= 89.9) && (obj1.Tempurature >= 35 && obj1.Tempurature <= 36.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-red w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 90 && obj1.Humidity <= 94.9) && (obj1.Tempurature >= 34 && obj1.Tempurature <= 36.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-red w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity >= 95 && obj1.Humidity <= 99.9) && (obj1.Tempurature >= 34 && obj1.Tempurature <= 35.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-red w3-text-white w3-padding-16 w3-round-xxlarge";
                    } else if ((obj1.Humidity = 100) && (obj1.Tempurature >= 33 && obj1.Tempurature <= 34.9)) {
                        document.getElementById('Humidity').className = "w3-container w3-red w3-text-white w3-padding-16 w3-round-xxlarge";
                    }
                    
                    //Rain
                    if (obj1.Rain >= 0.1 && obj1.Rain <= 10.0) {
                        document.getElementById('Rain').className = "w3-container w3-light-green w3-text-white w3-padding-16 w3-round-xxlarge";
                        document.getElementById('status_Rain').innerHTML = "{{trans('message.Light Rain')}}";
                        document.getElementById('circle_Rain').className = "fa fa-circle w3-text-light-green w3-large";
                    } else if (obj1.Rain >= 10.1 && obj1.Rain <= 35.0) {
                        document.getElementById('Rain').className = "w3-container w3-amber w3-text-white w3-padding-16 w3-round-xxlarge";
                        document.getElementById('status_Rain').innerHTML = "{{trans('message.Moderate Rain')}}";
                        document.getElementById('circle_Rain').className = "fa fa-circle w3-text-amber w3-large";
                    } else if (obj1.Rain >= 35.1 && obj1.Rain <= 90.0) {
                        document.getElementById('Rain').className = "w3-container w3-deep-orange w3-text-white w3-padding-16 w3-round-xxlarge";
                        document.getElementById('status_Rain').innerHTML = "{{trans('message.Heavy Rain')}}";
                        document.getElementById('circle_Rain').className = "fa fa-circle w3-text-deep-orange  w3-large";
                    } else if (obj1.Rain > 90.1) {
                        document.getElementById('Rain').className = "w3-container w3-red w3-text-white w3-padding-16 w3-round-xxlarge";
                        document.getElementById('status_Rain').innerHTML = "{{trans('message.Very Heavy Rain')}}";
                        document.getElementById('circle_Rain').className = "fa fa-circle w3-text-red  w3-large";
                    } else if (obj1.Rain < 0.1) {
                        document.getElementById('Rain').className = "w3-container w3-blue w3-text-white w3-padding-16 w3-round-xxlarge";
                        document.getElementById('status_Rain').innerHTML = "{{trans('message.No Rain')}}";
                        document.getElementById('circle_Rain').className = "fa fa-circle w3-text-blue  w3-large";
                    }
                    
                    //Wind
                    if (obj1.Wind < 1) {
                        document.getElementById('Wind').className = "w3-container w3-pale-blue w3-text w3-padding-16 w3-round-xxlarge";
                        document.getElementById('status_Wind').innerHTML = "{{trans('message.Calm')}}";
                        document.getElementById('circle_Wind').className = "fa fa-circle w3-text-light-blue  w3-large";
                    } else if (obj1.Wind >= 1 && obj1.Wind <= 5.9) {
                        document.getElementById('Wind').className = "w3-container w3-light-blue w3-text w3-padding-16 w3-round-xxlarge";
                        document.getElementById('status_Wind').innerHTML = "{{trans('message.Light Air')}}";
                        document.getElementById('circle_Wind').className = "fa fa-circle w3-text-light-blue  w3-large";
                    } else if (obj1.Wind >= 6 && obj1.Wind <= 11.9) {
                        document.getElementById('Wind').className = "w3-container w3-aqua w3-text w3-padding-16 w3-round-xxlarge";
                        document.getElementById('status_Wind').innerHTML = "{{trans('message.Light Breeze')}}";
                        document.getElementById('circle_Wind').className = "fa fa-circle w3-text-aqua  w3-large";
                    } else if (obj1.Wind >= 12 && obj1.Wind <= 19.9) {
                        document.getElementById('Wind').className = "w3-container w3-blue w3-text w3-padding-16 w3-round-xxlarge";
                        document.getElementById('status_Wind').innerHTML = "{{trans('message.Gentle Breeze')}}";
                        document.getElementById('circle_Wind').className = "fa fa-circle w3-text-blue  w3-large";
                    } else if (obj1.Wind >= 20 && obj1.Wind <= 28.9) {
                        document.getElementById('Wind').className = "w3-container w3-cyan w3-text w3-padding-16 w3-round-xxlarge";
                        document.getElementById('status_Wind').innerHTML = "{{trans('message.Moderate Breeze')}}";
                        document.getElementById('circle_Wind').className = "fa fa-circle w3-text-cyan  w3-large";
                    } else if (obj1.Wind >= 29 && obj1.Wind <= 38.9) {
                        document.getElementById('Wind').className = "w3-container w3-green w3-text w3-padding-16 w3-round-xxlarge";
                        document.getElementById('status_Wind').innerHTML = "{{trans('message.Fresh Breeze')}}";
                        document.getElementById('circle_Wind').className = "fa fa-circle w3-text-green w3-large";
                    } else if (obj1.Wind >= 39 && obj1.Wind <= 49.9) {
                        document.getElementById('Wind').className = "w3-container w3-amber w3-text w3-padding-16 w3-round-xxlarge";
                        document.getElementById('status_Wind').innerHTML = "{{trans('message.Strong Breeze')}}";
                        document.getElementById('circle_Wind').className = "fa fa-circle w3-text-amber  w3-large";
                    } else if (obj1.Wind >= 50 && obj1.Wind <= 61.9) {
                        document.getElementById('Wind').className = "w3-container w3-deep-orange w3-text w3-padding-16 w3-round-xxlarge";
                        document.getElementById('status_Wind').innerHTML = "{{trans('message.Near Gale')}}";
                        document.getElementById('circle_Wind').className = "fa fa-circle w3-text-deep-orange  w3-large";
                    } else if (obj1.Wind >= 62 && obj1.Wind <= 74.9) {
                        document.getElementById('Wind').className = "w3-container w3-red w3-text w3-padding-16 w3-round-xxlarge";
                        document.getElementById('status_Wind').innerHTML = "{{trans('message.Gale')}}";
                        document.getElementById('circle_Wind').className = "fa fa-circle w3-text-red w3-large";
                    } else if (obj1.Wind >= 75 && obj1.Wind <= 88.9) {
                        document.getElementById('Wind').className = "w3-container w3-red w3-text w3-padding-16 w3-round-xxlarge";
                        document.getElementById('status_Wind').innerHTML = "{{trans('message.Strong Gale')}}";
                        document.getElementById('circle_Wind').className = "fa fa-circle w3-text-red  w3-large";
                    } else if (obj1.Wind >= 89 && obj1.Wind <= 102.9) {
                        document.getElementById('Wind').className = "w3-container w3-red w3-text w3-padding-16 w3-round-xxlarge";
                        document.getElementById('status_Wind').innerHTML = "{{trans('message.Storm')}}";
                        document.getElementById('circle_Wind').className = "fa fa-circle w3-text-red w3-large";
                    } else if (obj1.Wind >= 103 && obj1.Wind <= 117) {
                        document.getElementById('Wind').className = "w3-container w3-red w3-text w3-padding-16 w3-round-xxlarge";
                        document.getElementById('status_Wind').innerHTML = "{{trans('message.Violent Storm')}}";
                        document.getElementById('circle_Wind').className = "fa fa-circle w3-text-red  w3-large";
                    } else if (obj1.Wind > 117) {
                        document.getElementById('Wind').className = "w3-container w3-red w3-text w3-padding-16 w3-round-xxlarge";
                        document.getElementById('status_Wind').innerHTML = "{{trans('message.Typhoon or Hurricane')}}";
                        document.getElementById('circle_Wind').className = "fa fa-circle w3-text-red  w3-large";
                    }
                    
                    //uv_index
                    if(obj1.UV=="Low"){
                        document.getElementById('UV_index').className = "w3-container w3-green w3-text-white w3-padding-16 w3-round-xxlarge";  
                        document.getElementById('status_UV').innerHTML = "{{trans('message.Low')}}";
                        document.getElementById('circle_UV').className = "fa fa-circle w3-text-green  w3-large";
                    }else if(obj1.UV=="Moderate"){
                        document.getElementById('UV_index').className = "w3-container w3-yellow w3-text-white w3-padding-16 w3-round-xxlarge";
                        document.getElementById('status_UV').innerHTML = "{{trans('message.Moderate')}}";  
                        document.getElementById('circle_UV').className = "fa fa-circle w3-text-yellow  w3-large";
                    }else if(obj1.UV=="High"){
                        document.getElementById('UV_index').className = "w3-container w3-deep-orange w3-text-white w3-padding-16 w3-round-xxlarge";
                        document.getElementById('status_UV').innerHTML = "{{trans('message.High')}}";
                        document.getElementById('circle_UV').className = "fa fa-circle w3-text-deep-orange  w3-large";  
                    }else if(obj1.UV=="Very High"){
                        document.getElementById('UV_index').className = "w3-container w3-red w3-text-white w3-padding-16 w3-round-xxlarge";
                        document.getElementById('status_UV').innerHTML = "{{trans('message.Very High')}}";
                        document.getElementById('circle_UV').className = "fa fa-circle w3-text-red  w3-large";  
                    }else if(obj1.UV=="Extreme"){
                        document.getElementById('UV_index').className = "w3-container w3-purple w3-text-white w3-padding-16 w3-round-xxlarge";
                        document.getElementById('status_UV').innerHTML = "{{trans('message.Extreme')}}";
                        document.getElementById('circle_UV').className = "fa fa-circle w3-text-purple  w3-large";  
                    }

                    //solar
                    if(obj1.Solar==0){
                        document.getElementById('Solar').className = "w3-container w3-gray w3-text-white w3-padding-16 w3-round-xxlarge";
                    }else if(obj1.Solar>=0 && obj1.Solar<=299.99 ){
                        document.getElementById('Solar').className = "w3-container w3-khaki w3-text-white w3-padding-16 w3-round-xxlarge";
                    }else if(obj1.Solar>=300 && obj1.Solar<=599.99 ){
                        document.getElementById('Solar').className = "w3-container w3-yellow w3-text-white w3-padding-16 w3-round-xxlarge";
                    }else if(obj1.Solar>=600 && obj1.Solar<=799.99 ){
                        document.getElementById('Solar').className = "w3-container w3-orange w3-text-white w3-padding-16 w3-round-xxlarge";
                    }else if(obj1.Solar>=800 && obj1.Solar<=1099.99 ){
                        document.getElementById('Solar').className = "w3-container w3-deep-orange w3-text-white w3-padding-16 w3-round-xxlarge";
                    }else if(obj1.Solar>=1100){
                        document.getElementById('Solar').className = "w3-container w3-red w3-text-white w3-padding-16 w3-round-xxlarge";
                    }
                    
                    //winddirection
                    if(obj1.Wind_Direction=='N'){
                        document.getElementById("msg6").innerHTML = "{{trans('message.N')}}";
                    }else if(obj1.Wind_Direction=='NE'){
                        document.getElementById("msg6").innerHTML = "{{trans('message.NE')}}";
                    }else if(obj1.Wind_Direction=='E'){
                        document.getElementById("msg6").innerHTML = "{{trans('message.E')}}";
                    }else if(obj1.Wind_Direction=='SE'){
                        document.getElementById("msg6").innerHTML = "{{trans('message.SE')}}";
                    }else if(obj1.Wind_Direction=='S'){
                        document.getElementById("msg6").innerHTML = "{{trans('message.S')}}";
                    }else if(obj1.Wind_Direction=='SW'){
                        document.getElementById("msg6").innerHTML = "{{trans('message.SW')}}";
                    }else if(obj1.Wind_Direction=='W'){
                        document.getElementById("msg6").innerHTML = "{{trans('message.W')}}";
                    }else if(obj1.Wind_Direction=='NW'){
                        document.getElementById("msg6").innerHTML = "{{trans('message.NW')}}";
                    }

                    //UV
                    if(obj1.UV=='Low'){
                        document.getElementById("msg10").innerHTML = "{{trans('message.Low')}}";
                    }else if(obj1.UV=='Moderate'){
                        document.getElementById("msg10").innerHTML = "{{trans('message.Moderate')}}";
                    }else if(obj1.UV=='High'){
                        document.getElementById("msg10").innerHTML = "{{trans('message.High')}}";
                    }else if(obj1.UV=='Very High'){
                        document.getElementById("msg10").innerHTML = "{{trans('message.Very High')}}";
                    }else if(obj1.UV=='Extreme'){
                        document.getElementById("msg10").innerHTML = "{{trans('message.Extreme')}}";
                    }
        });
}
setInterval(getDataFromAm, 1000);
    </script>
 

@endsection
