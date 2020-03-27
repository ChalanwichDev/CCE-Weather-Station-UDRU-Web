@extends('master')
@section('title')
    - Forecast
@endsection
@section('header')
   
@endsection
@section('sidebar-Forecast')
    w3-blue
@endsection
@section('head')
<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://api.weather.com/v3/wx/forecast/daily/5day?geocode=33.74,-84.39&format=json&units=e&language=en-US&apiKey=3f7af7f913d34afebaf7f913d36afe7b");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

$response = curl_exec($ch);
curl_close($ch);
$DATA = json_decode($response);
//echo $response;
//print_r($DATA);
//echo $DATA->dayOfWeek[1];
?>
@endsection
@section('content')
     <div class="w3-row-padding">
            <!-- day 1-->
            <div class="w3-col l2 m6 w3-margin-bottom w3-border w3-border-blue w3-hover-border-green  w3-round-xxlarge" align="CENTER">
                <h3 align="CENTER"><?php echo $DATA->daypart[0]->daypartName[0]; ?></h3>
                <p class="w3-opacity" align="LEFT">{{trans('message.Temperature daily')}} <span>
                        <p class="fas fa-sort-down" style='font-size:16px;color:green;'><span><?php $temp1 = $DATA->temperatureMin[0];
                                                                                                $ctemp1 = round(($temp1 - 32) / 1.8, 1);
                                                                                                echo "$ctemp1";
                                                                                                ?>&nbsp;{{trans('message.°C')}}</p>
                        <p class="fas fa-sort-up" style=' font-size:16px;color:red;'><?php $temp =  $DATA->temperatureMax[0];
                                                                                        $ctemp = round(($temp - 32) / 1.8, 1);
                                                                                        echo "$ctemp" ?>
                    </span>&nbsp;{{trans('message.°C')}}</p>
                </p>

                <?php $icon = $DATA->daypart[0]->iconCode[0];
                if ($icon == 00) { ?>
                    <img src="{{url('images/00.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 1) { ?>
                    <img src="{{url('images/01.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 2) { ?>
                    <img src="{{url('images/02.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 3) { ?>
                    <img src="{{url('PNGs/03.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 4) { ?>
                    <img src="{{url('images/04.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 5) { ?>
                    <img src="{{url('images/05.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 6) { ?>
                    <img src="{{url('images/06.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 7) { ?>
                    <img src="{{url('images/07.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 8) { ?>
                    <img src="{{url('PNGs/08.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 9) { ?>
                    <img src="{{url('images/09.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 10) { ?>
                    <img src="{{url('images/10.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 11) { ?>
                    <img src="{{url('images/11.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 12) { ?>
                    <img src="{{url('images/12.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 13) { ?>
                    <img src="{{url('images/13.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 14) { ?>
                    <img src="{{url('images/14.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 15) { ?>
                    <img src="{{url('images/15.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 16) { ?>
                    <img src="{{url('images/16.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 17) { ?>
                    <img src="{{url('images/17.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 18) { ?>
                    <img src="{{url('images/18.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 19) { ?>
                    <img src="{{url('images/19.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 20) { ?>
                    <img src="{{url('images/20.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 21) { ?>
                    <img src="{{url('images/21.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 22) { ?>
                    <img src="{{url('images/22.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 23) { ?>
                    <img src="{{url('images/23.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 24) { ?>
                    <img src="{{url('images/24.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 25) { ?>
                    <img src="{{url('images/25.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 26) { ?>
                    <img src="{{url('images/26.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 27) { ?>
                    <img src="{{url('images/27.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 28) { ?>
                    <img src="{{url('images/28.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 29) { ?>
                    <img src="{{url('images/29.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 30) { ?>
                    <img src="{{url('images/30.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 31) { ?>
                    <img src="{{url('images/31.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 32) { ?>
                    <img src="{{url('images/32.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 33) { ?>
                    <img src="{{url('images/33.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 34) { ?>
                    <img src="{{url('images/34.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 35) { ?>
                    <img src="{{url('images/35.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 36) { ?>
                    <img src="{{url('images/36.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 37) { ?>
                    <img src="{{url('images/37.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 38) { ?>
                    <img src="{{url('images/38.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 39) { ?>
                    <img src="{{url('images/39.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 40) { ?>
                    <img src="{{url('images/40.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 41) { ?>
                    <img src="{{url('images/41.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 42) { ?>
                    <img src="{{url('images/42.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 43) { ?>
                    <img src="{{url('images/43.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 44) { ?>
                    <img src="{{url('images/44.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 45) { ?>
                    <img src="{{url('images/45.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 46) { ?>
                    <img src="{{url('images/46.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 47) { ?>
                    <img src="{{url('images/47.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 'null') { ?>
                    <img src="{{(images/na.png)}}" alt="John" style="width:30%">
                <?php } ?>
                <br>
                <p class="w3-opacity" align="LEFT">{{trans('message.Temperature daytime')}}<span>
                        <p class="fas fa-sort-down" style='font-size:16px;color:green;'><span><?php $temp1 = $DATA->daypart[0]->temperatureWindChill[0];
                                                                                                $ctemp1 = round(($temp1 - 32) / 1.8, 1);
                                                                                                echo "$ctemp1";
                                                                                                ?>&nbsp;{{trans('message.°C')}}</p>
                        <p class="fas fa-sort-up" style=' font-size:16px;color:red;'><?php $temp =  $DATA->daypart[0]->temperatureHeatIndex[0];
                                                                                        $ctemp = round(($temp - 32) / 1.8, 1);
                                                                                        echo "$ctemp"?>
                    </span>&nbsp;{{trans('message.°C')}}</p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.Humidity daytime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $Humidity = $DATA->daypart[0]->relativeHumidity[0];

                                                                                echo "$Humidity" . " %";
                                                                                ?></p>
                </p>
                <?php $uv = $DATA->daypart[0]->uvDescription[0];
                if ($uv == "Low") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index daytime')}}<span>
                            <p class="" style='font-size:16px;color:green;'><span><?php $uv = $DATA->daypart[0]->uvDescription[0];
                                                                                   // echo "$uv";
                            ?>{{trans('message.Low')}}</p>
                    </p>
                <?php } elseif ($uv == "Moderate") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index daytime')}}<span>
                            <p class="" style='font-size:16px;color:yellow;'><span><?php $uv = $DATA->daypart[0]->uvDescription[0];
                                                                                    //echo "$uv";
                                                                                    ?>{{trans('message.Moderate')}}</p>
                    </p>
                <?php  } elseif ($uv == "High") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index daytime')}}<span>
                            <p class="" style='font-size:16px;color:orange;'><span><?php $uv = $DATA->daypart[0]->uvDescription[0];
                                                                                    //echo "$uv";
                                                                                    ?>{{trans('message.High')}}</p>
                    </p>
                <?php } elseif ($uv == "Very High") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index daytime')}}<span>
                            <p class="" style='font-size:16px;color:orangered;'><span><?php $uv = $DATA->daypart[0]->uvDescription[0];
                                                                                        //echo "$uv";
                                                                                        ?>{{trans('message.Very High')}}</p>
                    </p>
                <?php } elseif ($uv == "Extreme") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index daytime')}}<span>
                            <p class="" style='font-size:16px;color:red;'><span><?php $uv = $DATA->daypart[0]->uvDescription[0];
                                                                                //echo "$uv";
                                                                                ?>{{trans('message.Extreme')}}</p>
                    </p>
                <?php } ?>
                <p class="w3-opacity" align="LEFT">{{trans('message.WindDirection daytime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $winddirec = $DATA->daypart[0]->windDirectionCardinal[0];
                                                                                if($winddirec=='N'){
                                                                                    
                                                                                }
                                                                                echo "$winddirec";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.WindSpeed daytime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $windspeed = $DATA->daypart[0]->windSpeed[0];
                                                                                $calwindspeed = round($windspeed * 1.6093, 1);
                                                                                echo "$calwindspeed" . "&nbsp;{{trans('message.Km/h')}}";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.CloudCover daytime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $cloud = $DATA->daypart[0]->cloudCover[0];

                                                                                echo "$cloud" . " %";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.Sensible weather phrase daytime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $weather = $DATA->daypart[0]->wxPhraseLong[0];

                                                                                echo "$weather";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.Probability thunderstorm daytime')}} <span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $thunder = $DATA->daypart[0]->thunderCategory[0];

                                                                                echo "$thunder";
                                                                                ?></p>
                </p>



                <h3 align="CENTER"><?php echo $DATA->daypart[0]->daypartName[1]; ?></h3>
                <?php $icon = $DATA->daypart[0]->iconCode[1];
                if ($icon == 0) { ?>
                    <img src="{{url('images/00.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 1) { ?>
                    <img src="{{url('images/01.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 2) { ?>
                    <img src="{{url('images/02.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 3) { ?>
                    <img src="{{url('images/03.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 4) { ?>
                    <img src="{{url('images/04.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 5) { ?>
                    <img src="{{url('images/05.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 6) { ?>
                    <img src="{{url('images/06.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 7) { ?>
                    <img src="{{url('images/07.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 8) { ?>
                    <img src="{{url('PNGs/08.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 9) { ?>
                    <img src="{{url('images/09.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 10) { ?>
                    <img src="{{url('images/10.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 11) { ?>
                    <img src="{{url('images/11.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 12) { ?>
                    <img src="{{url('images/12.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 13) { ?>
                    <img src="{{url('images/13.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 14) { ?>
                    <img src="{{url('images/14.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 15) { ?>
                    <img src="{{url('images/15.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 16) { ?>
                    <img src="{{url('images/16.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 17) { ?>
                    <img src="{{url('images/17.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 18) { ?>
                    <img src="{{url('images/18.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 19) { ?>
                    <img src="{{url('images/19.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 20) { ?>
                    <img src="{{url('images/20.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 21) { ?>
                    <img src="{{url('images/21.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 22) { ?>
                    <img src="{{url('images/22.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 23) { ?>
                    <img src="{{url('images/23.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 24) { ?>
                    <img src="{{url('images/24.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 25) { ?>
                    <img src="{{url('images/25.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 26) { ?>
                    <img src="{{url('images/26.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 27) { ?>
                    <img src="{{url('images/27.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 28) { ?>
                    <img src="{{url('images/28.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 29) { ?>
                    <img src="{{url('images/29.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 30) { ?>
                    <img src="{{url('images/30.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 31) { ?>
                    <img src="{{url('images/31.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 32) { ?>
                    <img src="{{url('images/32.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 33) { ?>
                    <img src="{{url('images/33.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 34) { ?>
                    <img src="{{url('images/34.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 35) { ?>
                    <img src="{{url('images/35.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 36) { ?>
                    <img src="{{url('images/36.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 37) { ?>
                    <img src="{{url('images/37.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 38) { ?>
                    <img src="{{url('images/38.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 39) { ?>
                    <img src="{{url('images/39.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 40) { ?>
                    <img src="{{url('images/40.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 41) { ?>
                    <img src="{{url('images/41.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 42) { ?>
                    <img src="{{url('images/42.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 43) { ?>
                    <img src="{{url('images/43.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 44) { ?>
                    <img src="{{url('images/44.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 45) { ?>
                    <img src="{{url('images/45.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 46) { ?>
                    <img src="{{url('images/46.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 47) { ?>
                    <img src="{{url('images/47.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 'null') { ?>
                    <img src="{{(images/na.png)}}" alt="John" style="width:30%">
                <?php } ?>
                <br>
                <p class="w3-opacity" align="LEFT">{{trans('message.Temperature nighttime')}} <span>
                        <p class="fas fa-sort-down" style='font-size:16px;color:green;'><span><?php $temp1 = $DATA->daypart[0]->temperatureWindChill[1];
                                                                                                $ctemp1 = round(($temp1 - 32) / 1.8, 1);
                                                                                                echo "$ctemp1" . "&nbsp;{{trans('message.°C')}}";
                                                                                                ?></p>
                        <p class="fas fa-sort-up" style=' font-size:16px;color:red;'><?php $temp =  $DATA->daypart[0]->temperatureHeatIndex[1];
                                                                                        $ctemp = round(($temp - 32) / 1.8, 1);
                                                                                        echo "$ctemp" . "&nbsp;{{trans('message.°C')}}";    ?>
                    </span></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.Humidity nighttime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $Humidity = $DATA->daypart[0]->relativeHumidity[1];

                                                                                echo "$Humidity" . " %";
                                                                                ?></p>

                </p>
                <?php $uv = $DATA->daypart[0]->uvDescription[1];
                if ($uv == "Low") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index nighttime')}}<span>
                            <p class="" style='font-size:16px;color:green;'><span><?php $uv = $DATA->daypart[0]->uvDescription[1];

                                                                                    echo "$uv";
                                                                                    ?></p>
                    </p>
                <?php } elseif ($uv == "Moderate") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index nighttime')}}<span>
                            <p class="" style='font-size:16px;color:yellow;'><span><?php $uv = $DATA->daypart[0]->uvDescription[1];

                                                                                    echo "$uv";
                                                                                    ?></p>
                    </p>
                <?php  } elseif ($uv == "High") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index nighttime')}}<span>
                            <p class="" style='font-size:16px;color:orange;'><span><?php $uv = $DATA->daypart[0]->uvDescription[1];

                                                                                    echo "$uv";
                                                                                    ?></p>
                    </p>
                <?php } elseif ($uv == "Very High") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index nighttime')}}<span>
                            <p class="" style='font-size:16px;color:red;'><span><?php $uv = $DATA->daypart[0]->uvDescription[1];

                                                                                echo "$uv";
                                                                                ?></p>
                    </p>
                <?php } elseif ($uv == "Extreme") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index nighttime')}}<span>
                            <p class="" style='font-size:16px;color:red;'><span><?php $uv = $DATA->daypart[0]->uvDescription[1];

                                                                                echo "$uv";
                                                                                ?></p>
                    </p>
                <?php } ?>
                <p class="w3-opacity" align="LEFT">{{trans('message.WindDirection nighttime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $winddirec = $DATA->daypart[0]->windDirectionCardinal[1];

                                                                                echo "$winddirec";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.WindSpeed nighttime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $windspeed = $DATA->daypart[0]->windSpeed[1];
                                                                                $calwindspeed = round($windspeed * 1.6093, 1);
                                                                                echo "$calwindspeed" . " km/h";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.CloudCover nighttime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $cloud = $DATA->daypart[0]->cloudCover[1];

                                                                                echo "$cloud" . " %";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.Sensible weather phrase nighttime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $weather = $DATA->daypart[0]->wxPhraseLong[1];

                                                                                echo "$weather";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.Probability thunderstorm nighttime')}} <span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $thunder = $DATA->daypart[0]->thunderCategory[1];

                                                                                echo "$thunder";
                                                                                ?></p>
                </p>
            </div>

            <!--day2 -->
            <div class="w3-col l2 m6 w3-margin-bottom w3-border w3-border-blue w3-hover-border-green w3-round-xxlarge" align="CENTER">
                <h3 align="CENTER"><?php echo $DATA->daypart[0]->daypartName[2]; ?></h3>
                <p class="w3-opacity" align="LEFT">{{trans('message.Temperature daily')}} <span>
                        <p class="fas fa-sort-down" style='font-size:16px;color:green;'><span><?php $temp1 = $DATA->temperatureMin[1];
                                                                                                $ctemp1 = round(($temp1 - 32) / 1.8, 1);
                                                                                                echo "$ctemp1" . "&nbsp;{{trans('message.°C')}}";
                                                                                                ?></p>
                        <p class="fas fa-sort-up" style=' font-size:16px;color:red;'><?php $temp =  $DATA->temperatureMax[1];
                                                                                        $ctemp = round(($temp - 32) / 1.8, 1);
                                                                                        echo "$ctemp" . "&nbsp;{{trans('message.°C')}}";    ?>
                    </span></p>
                </p>

                <?php $icon = $DATA->daypart[0]->iconCode[2];
                if ($icon == 00) { ?>
                    <img src="{{url('images/00.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 1) { ?>
                    <img src="{{url('images/01.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 2) { ?>
                    <img src="{{url('images/02.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 3) { ?>
                    <img src="{{url('images/03.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 4) { ?>
                    <img src="{{url('images/04.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 5) { ?>
                    <img src="{{url('images/05.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 6) { ?>
                    <img src="{{url('images/06.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 7) { ?>
                    <img src="{{url('images/07.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 8) { ?>
                    <img src="{{url('PNGs/08.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 9) { ?>
                    <img src="{{url('images/09.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 10) { ?>
                    <img src="{{url('images/10.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 11) { ?>
                    <img src="{{url('images/11.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 12) { ?>
                    <img src="{{url('images/12.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 13) { ?>
                    <img src="{{url('images/13.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 14) { ?>
                    <img src="{{url('images/14.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 15) { ?>
                    <img src="{{url('images/15.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 16) { ?>
                    <img src="{{url('images/16.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 17) { ?>
                    <img src="{{url('images/17.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 18) { ?>
                    <img src="{{url('images/18.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 19) { ?>
                    <img src="{{url('images/19.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 20) { ?>
                    <img src="{{url('images/20.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 21) { ?>
                    <img src="{{url('images/21.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 22) { ?>
                    <img src="{{url('images/22.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 23) { ?>
                    <img src="{{url('images/23.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 24) { ?>
                    <img src="{{url('images/24.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 25) { ?>
                    <img src="{{url('images/25.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 26) { ?>
                    <img src="{{url('images/26.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 27) { ?>
                    <img src="{{url('images/27.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 28) { ?>
                    <img src="{{url('images/28.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 29) { ?>
                    <img src="{{url('images/29.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 30) { ?>
                    <img src="{{url('images/30.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 31) { ?>
                    <img src="{{url('images/31.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 32) { ?>
                    <img src="{{url('images/32.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 33) { ?>
                    <img src="{{url('images/33.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 34) { ?>
                    <img src="{{url('images/34.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 35) { ?>
                    <img src="{{url('images/35.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 36) { ?>
                    <img src="{{url('images/36.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 37) { ?>
                    <img src="{{url('images/37.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 38) { ?>
                    <img src="{{url('images/38.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 39) { ?>
                    <img src="{{url('images/39.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 40) { ?>
                    <img src="{{url('images/40.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 41) { ?>
                    <img src="{{url('images/41.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 42) { ?>
                    <img src="{{url('images/42.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 43) { ?>
                    <img src="{{url('images/43.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 44) { ?>
                    <img src="{{url('images/44.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 45) { ?>
                    <img src="{{url('images/45.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 46) { ?>
                    <img src="{{url('images/46.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 47) { ?>
                    <img src="{{url('images/47.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 'null') { ?>
                    <img src="{{(images/na.png)}}" alt="John" style="width:30%">
                <?php } ?>
                <br>
                <p class="w3-opacity" align="LEFT">{{trans('message.Temperature daytime')}} <span>
                        <p class="fas fa-sort-down" style='font-size:16px;color:green;'><span><?php $temp1 = $DATA->daypart[0]->temperatureWindChill[2];
                                                                                                $ctemp1 = round(($temp1 - 32) / 1.8, 1);
                                                                                                echo "$ctemp1" . "&nbsp;{{trans('message.°C')}}";
                                                                                                ?></p>
                        <p class="fas fa-sort-up" style=' font-size:16px;color:red;'><?php $temp =  $DATA->daypart[0]->temperatureHeatIndex[2];
                                                                                        $ctemp = round(($temp - 32) / 1.8, 1);
                                                                                        echo "$ctemp" . "&nbsp;{{trans('message.°C')}}";    ?>
                    </span></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.Humidity daytime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $Humidity = $DATA->daypart[0]->relativeHumidity[2];

                                                                                echo "$Humidity" . " %";
                                                                                ?></p>
                </p>
                <?php $uv = $DATA->daypart[0]->uvDescription[2];
                if ($uv == "Low") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index daytime')}}<span>
                            <p class="" style='font-size:16px;color:green;'><span><?php $uv = $DATA->daypart[0]->uvDescription[2];

                                                                                    echo "$uv";
                                                                                    ?></p>
                    </p>
                <?php } elseif ($uv == "Moderate") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index daytime')}}<span>
                            <p class="" style='font-size:16px;color:yellow;'><span><?php $uv = $DATA->daypart[0]->uvDescription[2];

                                                                                    echo "$uv";
                                                                                    ?></p>
                    </p>
                <?php  } elseif ($uv == "High") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index daytime')}}<span>
                            <p class="" style='font-size:16px;color:orange;'><span><?php $uv = $DATA->daypart[0]->uvDescription[2];

                                                                                    echo "$uv";
                                                                                    ?></p>
                    </p>
                <?php } elseif ($uv == "Very High") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index daytime')}}<span>
                            <p class="" style='font-size:16px;color:orangered;'><span><?php $uv = $DATA->daypart[0]->uvDescription[2];

                                                                                        echo "$uv";
                                                                                        ?></p>
                    </p>
                <?php } elseif ($uv == "Extreme") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index daytime')}}<span>
                            <p class="" style='font-size:16px;color:red;'><span><?php $uv = $DATA->daypart[0]->uvDescription[2];

                                                                                echo "$uv";
                                                                                ?></p>
                    </p>
                <?php } ?>
                <p class="w3-opacity" align="LEFT">{{trans('message.WindDirection daytime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $winddirec = $DATA->daypart[0]->windDirectionCardinal[2];

                                                                                echo "$winddirec";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.WindSpeed daytime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $windspeed = $DATA->daypart[0]->windSpeed[2];
                                                                                $calwindspeed = round($windspeed * 1.6093, 1);
                                                                                echo "$calwindspeed" . " km/h";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.CloudCover daytime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $cloud = $DATA->daypart[0]->cloudCover[2];

                                                                                echo "$cloud" . " %";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.Sensible weather phrase daytime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $weather = $DATA->daypart[0]->wxPhraseLong[2];

                                                                                echo "$weather";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.Probability thunderstorm daytime')}} <span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $thunder = $DATA->daypart[0]->thunderCategory[2];

                                                                                echo "$thunder";
                                                                                ?></p>
                </p>



                <h3 align="CENTER"><?php echo $DATA->daypart[0]->daypartName[3]; ?></h3>
                <?php $icon = $DATA->daypart[0]->iconCode[3];
                if ($icon == 0) { ?>
                    <img src="{{url('images/00.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 1) { ?>
                    <img src="{{url('images/01.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 2) { ?>
                    <img src="{{url('images/02.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 3) { ?>
                    <img src="{{url('images/03.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 4) { ?>
                    <img src="{{url('images/04.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 5) { ?>
                    <img src="{{url('images/05.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 6) { ?>
                    <img src="{{url('images/06.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 7) { ?>
                    <img src="{{url('images/07.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 8) { ?>
                    <img src="{{url('PNGs/08.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 9) { ?>
                    <img src="{{url('images/09.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 10) { ?>
                    <img src="{{url('images/10.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 11) { ?>
                    <img src="{{url('images/11.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 12) { ?>
                    <img src="{{url('images/12.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 13) { ?>
                    <img src="{{url('images/13.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 14) { ?>
                    <img src="{{url('images/14.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 15) { ?>
                    <img src="{{url('images/15.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 16) { ?>
                    <img src="{{url('images/16.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 17) { ?>
                    <img src="{{url('images/17.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 18) { ?>
                    <img src="{{url('images/18.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 19) { ?>
                    <img src="{{url('images/19.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 20) { ?>
                    <img src="{{url('images/20.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 21) { ?>
                    <img src="{{url('images/21.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 22) { ?>
                    <img src="{{url('images/22.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 23) { ?>
                    <img src="{{url('images/23.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 24) { ?>
                    <img src="{{url('images/24.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 25) { ?>
                    <img src="{{url('images/25.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 26) { ?>
                    <img src="{{url('images/26.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 27) { ?>
                    <img src="{{url('images/27.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 28) { ?>
                    <img src="{{url('images/28.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 29) { ?>
                    <img src="{{url('images/29.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 30) { ?>
                    <img src="{{url('images/30.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 31) { ?>
                    <img src="{{url('images/31.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 32) { ?>
                    <img src="{{url('images/32.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 33) { ?>
                    <img src="{{url('images/33.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 34) { ?>
                    <img src="{{url('images/34.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 35) { ?>
                    <img src="{{url('images/35.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 36) { ?>
                    <img src="{{url('images/36.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 37) { ?>
                    <img src="{{url('images/37.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 38) { ?>
                    <img src="{{url('images/38.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 39) { ?>
                    <img src="{{url('images/39.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 40) { ?>
                    <img src="{{url('images/40.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 41) { ?>
                    <img src="{{url('images/41.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 42) { ?>
                    <img src="{{url('images/42.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 43) { ?>
                    <img src="{{url('images/43.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 44) { ?>
                    <img src="{{url('images/44.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 45) { ?>
                    <img src="{{url('images/45.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 46) { ?>
                    <img src="{{url('images/46.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 47) { ?>
                    <img src="{{url('images/47.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 'null') { ?>
                    <img src="{{(images/na.png)}}" alt="John" style="width:30%">
                <?php } ?>
                <br>
                <p class="w3-opacity" align="LEFT">{{trans('message.Temperature nighttime')}} <span>
                        <p class="fas fa-sort-down" style='font-size:16px;color:green;'><span><?php $temp1 = $DATA->daypart[0]->temperatureWindChill[3];
                                                                                                $ctemp1 = round(($temp1 - 32) / 1.8, 1);
                                                                                                echo "$ctemp1" . "&nbsp;{{trans('message.°C')}}";
                                                                                                ?></p>
                        <p class="fas fa-sort-up" style=' font-size:16px;color:red;'><?php $temp =  $DATA->daypart[0]->temperatureHeatIndex[3];
                                                                                        $ctemp = round(($temp - 32) / 1.8, 1);
                                                                                        echo "$ctemp" . "&nbsp;{{trans('message.°C')}}";    ?>
                    </span></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.Humidity nighttime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $Humidity = $DATA->daypart[0]->relativeHumidity[3];

                                                                                echo "$Humidity" . " %";
                                                                                ?></p>

                </p>
                <?php $uv = $DATA->daypart[0]->uvDescription[3];
                if ($uv == "Low") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index nighttime')}}<span>
                            <p class="" style='font-size:16px;color:green;'><span><?php $uv = $DATA->daypart[0]->uvDescription[3];

                                                                                    echo "$uv";
                                                                                    ?></p>
                    </p>
                <?php } elseif ($uv == "Moderate") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index nighttime')}}<span>
                            <p class="" style='font-size:16px;color:yellow;'><span><?php $uv = $DATA->daypart[0]->uvDescription[3];

                                                                                    echo "$uv";
                                                                                    ?></p>
                    </p>
                <?php  } elseif ($uv == "High") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index nighttime')}}<span>
                            <p class="" style='font-size:16px;color:orange;'><span><?php $uv = $DATA->daypart[0]->uvDescription[3];

                                                                                    echo "$uv";
                                                                                    ?></p>
                    </p>
                <?php } elseif ($uv == "Very High") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index nighttime')}}<span>
                            <p class="" style='font-size:16px;color:red;'><span><?php $uv = $DATA->daypart[0]->uvDescription[3];

                                                                                echo "$uv";
                                                                                ?></p>
                    </p>
                <?php } elseif ($uv == "Extreme") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index nighttime')}}<span>
                            <p class="" style='font-size:16px;color:red;'><span><?php $uv = $DATA->daypart[0]->uvDescription[3];

                                                                                echo "$uv";
                                                                                ?></p>
                    </p>
                <?php } ?>
                <p class="w3-opacity" align="LEFT">{{trans('message.WindDirection nighttime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $winddirec = $DATA->daypart[0]->windDirectionCardinal[3];

                                                                                echo "$winddirec";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.WindSpeed nighttime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $windspeed = $DATA->daypart[0]->windSpeed[3];
                                                                                $calwindspeed = round($windspeed * 1.6093, 1);
                                                                                echo "$calwindspeed" . " km/h";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.CloudCover nighttime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $cloud = $DATA->daypart[0]->cloudCover[3];

                                                                                echo "$cloud" . " %";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.Sensible weather phrase nighttime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $weather = $DATA->daypart[0]->wxPhraseLong[3];

                                                                                echo "$weather";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.Probability thunderstorm nighttime')}} <span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $thunder = $DATA->daypart[0]->thunderCategory[3];

                                                                                echo "$thunder";
                                                                                ?></p>
                </p>
            </div>
            <!-- day3 -->
            <div class="w3-col l2 m6 w3-margin-bottom w3-border w3-border-blue w3-hover-border-green w3-round-xxlarge" align="CENTER">
                <h3 align="CENTER"><?php echo $DATA->daypart[0]->daypartName[4]; ?></h3>
                <p class="w3-opacity" align="LEFT">{{trans('message.Temperature daily')}} <span>
                        <p class="fas fa-sort-down" style='font-size:16px;color:green;'><span><?php $temp1 = $DATA->temperatureMin[2];
                                                                                                $ctemp1 = round(($temp1 - 32) / 1.8, 1);
                                                                                                echo "$ctemp1" . "&nbsp;{{trans('message.°C')}}";
                                                                                                ?></p>
                        <p class="fas fa-sort-up" style=' font-size:16px;color:red;'><?php $temp =  $DATA->temperatureMax[2];
                                                                                        $ctemp = round(($temp - 32) / 1.8, 1);
                                                                                        echo "$ctemp" . "&nbsp;{{trans('message.°C')}}";    ?>
                    </span></p>
                </p>

                <?php $icon = $DATA->daypart[0]->iconCode[4];
                if ($icon == 00) { ?>
                    <img src="{{url('images/00.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 1) { ?>
                    <img src="{{url('images/01.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 2) { ?>
                    <img src="{{url('images/02.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 3) { ?>
                    <img src="{{url('images/03.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 4) { ?>
                    <img src="{{url('images/04.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 5) { ?>
                    <img src="{{url('images/05.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 6) { ?>
                    <img src="{{url('images/06.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 7) { ?>
                    <img src="{{url('images/07.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 8) { ?>
                    <img src="{{url('PNGs/08.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 9) { ?>
                    <img src="{{url('images/09.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 10) { ?>
                    <img src="{{url('images/10.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 11) { ?>
                    <img src="{{url('images/11.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 12) { ?>
                    <img src="{{url('images/12.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 13) { ?>
                    <img src="{{url('images/13.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 14) { ?>
                    <img src="{{url('images/14.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 15) { ?>
                    <img src="{{url('images/15.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 16) { ?>
                    <img src="{{url('images/16.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 17) { ?>
                    <img src="{{url('images/17.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 18) { ?>
                    <img src="{{url('images/18.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 19) { ?>
                    <img src="{{url('images/19.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 20) { ?>
                    <img src="{{url('images/20.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 21) { ?>
                    <img src="{{url('images/21.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 22) { ?>
                    <img src="{{url('images/22.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 23) { ?>
                    <img src="{{url('images/23.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 24) { ?>
                    <img src="{{url('images/24.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 25) { ?>
                    <img src="{{url('images/25.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 26) { ?>
                    <img src="{{url('images/26.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 27) { ?>
                    <img src="{{url('images/27.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 28) { ?>
                    <img src="{{url('images/28.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 29) { ?>
                    <img src="{{url('images/29.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 30) { ?>
                    <img src="{{url('images/30.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 31) { ?>
                    <img src="{{url('images/31.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 32) { ?>
                    <img src="{{url('images/32.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 33) { ?>
                    <img src="{{url('images/33.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 34) { ?>
                    <img src="{{url('images/34.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 35) { ?>
                    <img src="{{url('images/35.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 36) { ?>
                    <img src="{{url('images/36.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 37) { ?>
                    <img src="{{url('images/37.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 38) { ?>
                    <img src="{{url('images/38.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 39) { ?>
                    <img src="{{url('images/39.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 40) { ?>
                    <img src="{{url('images/40.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 41) { ?>
                    <img src="{{url('images/41.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 42) { ?>
                    <img src="{{url('images/42.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 43) { ?>
                    <img src="{{url('images/43.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 44) { ?>
                    <img src="{{url('images/44.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 45) { ?>
                    <img src="{{url('images/45.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 46) { ?>
                    <img src="{{url('images/46.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 47) { ?>
                    <img src="{{url('images/47.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 'null') { ?>
                    <img src="{{(images/na.png)}}" alt="John" style="width:30%">
                <?php } ?>
                <br>
                <p class="w3-opacity" align="LEFT">{{trans('message.Temperature daytime')}} <span>
                        <p class="fas fa-sort-down" style='font-size:16px;color:green;'><span><?php $temp1 = $DATA->daypart[0]->temperatureWindChill[4];
                                                                                                $ctemp1 = round(($temp1 - 32) / 1.8, 1);
                                                                                                echo "$ctemp1" . "&nbsp;{{trans('message.°C')}}";
                                                                                                ?></p>
                        <p class="fas fa-sort-up" style=' font-size:16px;color:red;'><?php $temp =  $DATA->daypart[0]->temperatureHeatIndex[4];
                                                                                        $ctemp = round(($temp - 32) / 1.8, 1);
                                                                                        echo "$ctemp" . "&nbsp;{{trans('message.°C')}}";    ?>
                    </span></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.Humidity daytime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $Humidity = $DATA->daypart[0]->relativeHumidity[4];

                                                                                echo "$Humidity" . " %";
                                                                                ?></p>
                </p>
                <?php $uv = $DATA->daypart[0]->uvDescription[4];
                if ($uv == "Low") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index daytime')}}<span>
                            <p class="" style='font-size:16px;color:green;'><span><?php $uv = $DATA->daypart[0]->uvDescription[4];

                                                                                    echo "$uv";
                                                                                    ?></p>
                    </p>
                <?php } elseif ($uv == "Moderate") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index daytime')}}<span>
                            <p class="" style='font-size:16px;color:yellow;'><span><?php $uv = $DATA->daypart[0]->uvDescription[4];

                                                                                    echo "$uv";
                                                                                    ?></p>
                    </p>
                <?php  } elseif ($uv == "High") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index daytime')}}<span>
                            <p class="" style='font-size:16px;color:orange;'><span><?php $uv = $DATA->daypart[0]->uvDescription[4];

                                                                                    echo "$uv";
                                                                                    ?></p>
                    </p>
                <?php } elseif ($uv == "Very High") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index daytime')}}<span>
                            <p class="" style='font-size:16px;color:orangered;'><span><?php $uv = $DATA->daypart[0]->uvDescription[4];

                                                                                        echo "$uv";
                                                                                        ?></p>
                    </p>
                <?php } elseif ($uv == "Extreme") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index daytime')}}<span>
                            <p class="" style='font-size:16px;color:red;'><span><?php $uv = $DATA->daypart[0]->uvDescription[4];

                                                                                echo "$uv";
                                                                                ?></p>
                    </p>
                <?php } ?>
                <p class="w3-opacity" align="LEFT">{{trans('message.WindDirection daytime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $winddirec = $DATA->daypart[0]->windDirectionCardinal[4];

                                                                                echo "$winddirec";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.WindSpeed daytime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $windspeed = $DATA->daypart[0]->windSpeed[4];
                                                                                $calwindspeed = round($windspeed * 1.6093, 1);
                                                                                echo "$calwindspeed" . " km/h";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.CloudCover daytime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $cloud = $DATA->daypart[0]->cloudCover[4];

                                                                                echo "$cloud" . " %";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.Sensible weather phrase daytime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $weather = $DATA->daypart[0]->wxPhraseLong[4];

                                                                                echo "$weather";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.Probability thunderstorm daytime')}} <span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $thunder = $DATA->daypart[0]->thunderCategory[4];

                                                                                echo "$thunder";
                                                                                ?></p>
                </p>



                <h3 align="CENTER"><?php echo $DATA->daypart[0]->daypartName[5]; ?></h3>
                <?php $icon = $DATA->daypart[0]->iconCode[5];
                if ($icon == 0) { ?>
                    <img src="{{url('images/00.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 1) { ?>
                    <img src="{{url('images/01.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 2) { ?>
                    <img src="{{url('images/02.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 3) { ?>
                    <img src="{{url('images/03.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 4) { ?>
                    <img src="{{url('images/04.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 5) { ?>
                    <img src="{{url('images/05.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 6) { ?>
                    <img src="{{url('images/06.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 7) { ?>
                    <img src="{{url('images/07.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 8) { ?>
                    <img src="{{url('PNGs/08.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 9) { ?>
                    <img src="{{url('images/09.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 10) { ?>
                    <img src="{{url('images/10.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 11) { ?>
                    <img src="{{url('images/11.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 12) { ?>
                    <img src="{{url('images/12.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 13) { ?>
                    <img src="{{url('images/13.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 14) { ?>
                    <img src="{{url('images/14.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 15) { ?>
                    <img src="{{url('images/15.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 16) { ?>
                    <img src="{{url('images/16.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 17) { ?>
                    <img src="{{url('images/17.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 18) { ?>
                    <img src="{{url('images/18.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 19) { ?>
                    <img src="{{url('images/19.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 20) { ?>
                    <img src="{{url('images/20.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 21) { ?>
                    <img src="{{url('images/21.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 22) { ?>
                    <img src="{{url('images/22.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 23) { ?>
                    <img src="{{url('images/23.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 24) { ?>
                    <img src="{{url('images/24.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 25) { ?>
                    <img src="{{url('images/25.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 26) { ?>
                    <img src="{{url('images/26.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 27) { ?>
                    <img src="{{url('images/27.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 28) { ?>
                    <img src="{{url('images/28.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 29) { ?>
                    <img src="{{url('images/29.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 30) { ?>
                    <img src="{{url('images/30.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 31) { ?>
                    <img src="{{url('images/31.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 32) { ?>
                    <img src="{{url('images/32.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 33) { ?>
                    <img src="{{url('images/33.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 34) { ?>
                    <img src="{{url('images/34.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 35) { ?>
                    <img src="{{url('images/35.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 36) { ?>
                    <img src="{{url('images/36.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 37) { ?>
                    <img src="{{url('images/37.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 38) { ?>
                    <img src="{{url('images/38.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 39) { ?>
                    <img src="{{url('images/39.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 40) { ?>
                    <img src="{{url('images/40.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 41) { ?>
                    <img src="{{url('images/41.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 42) { ?>
                    <img src="{{url('images/42.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 43) { ?>
                    <img src="{{url('images/43.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 44) { ?>
                    <img src="{{url('images/44.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 45) { ?>
                    <img src="{{url('images/45.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 46) { ?>
                    <img src="{{url('images/46.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 47) { ?>
                    <img src="{{url('images/47.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 'null') { ?>
                    <img src="{{(images/na.png)}}" alt="John" style="width:30%">
                <?php } ?>
                <br>
                <p class="w3-opacity" align="LEFT">{{trans('message.Temperature nighttime')}} <span>
                        <p class="fas fa-sort-down" style='font-size:16px;color:green;'><span><?php $temp1 = $DATA->daypart[0]->temperatureWindChill[5];
                                                                                                $ctemp1 = round(($temp1 - 32) / 1.8, 1);
                                                                                                echo "$ctemp1" . "&nbsp;{{trans('message.°C')}}";
                                                                                                ?></p>
                        <p class="fas fa-sort-up" style=' font-size:16px;color:red;'><?php $temp =  $DATA->daypart[0]->temperatureHeatIndex[5];
                                                                                        $ctemp = round(($temp - 32) / 1.8, 1);
                                                                                        echo "$ctemp" . "&nbsp;{{trans('message.°C')}}";    ?>
                    </span></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.Humidity nighttime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $Humidity = $DATA->daypart[0]->relativeHumidity[5];

                                                                                echo "$Humidity" . " %";
                                                                                ?></p>

                </p>
                <?php $uv = $DATA->daypart[0]->uvDescription[5];
                if ($uv == "Low") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index nighttime')}}<span>
                            <p class="" style='font-size:16px;color:green;'><span><?php $uv = $DATA->daypart[0]->uvDescription[5];

                                                                                    echo "$uv";
                                                                                    ?></p>
                    </p>
                <?php } elseif ($uv == "Moderate") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index nighttime')}}<span>
                            <p class="" style='font-size:16px;color:yellow;'><span><?php $uv = $DATA->daypart[0]->uvDescription[5];

                                                                                    echo "$uv";
                                                                                    ?></p>
                    </p>
                <?php  } elseif ($uv == "High") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index nighttime')}}<span>
                            <p class="" style='font-size:16px;color:orange;'><span><?php $uv = $DATA->daypart[0]->uvDescription[5];

                                                                                    echo "$uv";
                                                                                    ?></p>
                    </p>
                <?php } elseif ($uv == "Very High") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index nighttime')}}<span>
                            <p class="" style='font-size:16px;color:red;'><span><?php $uv = $DATA->daypart[0]->uvDescription[5];

                                                                                echo "$uv";
                                                                                ?></p>
                    </p>
                <?php } elseif ($uv == "Extreme") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index nighttime')}}<span>
                            <p class="" style='font-size:16px;color:red;'><span><?php $uv = $DATA->daypart[0]->uvDescription[5];

                                                                                echo "$uv";
                                                                                ?></p>
                    </p>
                <?php } ?>
                <p class="w3-opacity" align="LEFT">{{trans('message.WindDirection nighttime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $winddirec = $DATA->daypart[0]->windDirectionCardinal[5];

                                                                                echo "$winddirec";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.WindSpeed nighttime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $windspeed = $DATA->daypart[0]->windSpeed[5];
                                                                                $calwindspeed = round($windspeed * 1.6093, 1);
                                                                                echo "$calwindspeed" . " km/h";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.CloudCover nighttime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $cloud = $DATA->daypart[0]->cloudCover[5];

                                                                                echo "$cloud" . " %";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.Sensible weather phrase nighttime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $weather = $DATA->daypart[0]->wxPhraseLong[5];

                                                                                echo "$weather";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.Probability thunderstorm nighttime')}} <span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $thunder = $DATA->daypart[0]->thunderCategory[5];

                                                                                echo "$thunder";
                                                                                ?></p>
                </p>
            </div>
            <!-- day4 -->
            <div class="w3-col l2 m6 w3-margin-bottom w3-border w3-border-blue w3-hover-border-green w3-round-xxlarge" align="CENTER">
                <h3 align="CENTER"><?php echo $DATA->daypart[0]->daypartName[6]; ?></h3>
                <p class="w3-opacity" align="LEFT">{{trans('message.Temperature daily')}} <span>
                        <p class="fas fa-sort-down" style='font-size:16px;color:green;'><span><?php $temp1 = $DATA->temperatureMin[3];
                                                                                                $ctemp1 = round(($temp1 - 32) / 1.8, 1);
                                                                                                echo "$ctemp1" . "&nbsp;{{trans('message.°C')}}";
                                                                                                ?></p>
                        <p class="fas fa-sort-up" style=' font-size:16px;color:red;'><?php $temp =  $DATA->temperatureMax[3];
                                                                                        $ctemp = round(($temp - 32) / 1.8, 1);
                                                                                        echo "$ctemp" . "&nbsp;{{trans('message.°C')}}";    ?>
                    </span></p>
                </p>

                <?php $icon = $DATA->daypart[0]->iconCode[6];
                if ($icon == 00) { ?>
                    <img src="{{url('images/00.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 1) { ?>
                    <img src="{{url('images/01.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 2) { ?>
                    <img src="{{url('images/02.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 3) { ?>
                    <img src="{{url('images/03.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 4) { ?>
                    <img src="{{url('images/04.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 5) { ?>
                    <img src="{{url('images/05.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 6) { ?>
                    <img src="{{url('images/06.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 7) { ?>
                    <img src="{{url('images/07.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 8) { ?>
                    <img src="{{url('PNGs/08.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 9) { ?>
                    <img src="{{url('images/09.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 10) { ?>
                    <img src="{{url('images/10.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 11) { ?>
                    <img src="{{url('images/11.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 12) { ?>
                    <img src="{{url('images/12.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 13) { ?>
                    <img src="{{url('images/13.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 14) { ?>
                    <img src="{{url('images/14.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 15) { ?>
                    <img src="{{url('images/15.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 16) { ?>
                    <img src="{{url('images/16.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 17) { ?>
                    <img src="{{url('images/17.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 18) { ?>
                    <img src="{{url('images/18.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 19) { ?>
                    <img src="{{url('images/19.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 20) { ?>
                    <img src="{{url('images/20.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 21) { ?>
                    <img src="{{url('images/21.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 22) { ?>
                    <img src="{{url('images/22.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 23) { ?>
                    <img src="{{url('images/23.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 24) { ?>
                    <img src="{{url('images/24.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 25) { ?>
                    <img src="{{url('images/25.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 26) { ?>
                    <img src="{{url('images/26.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 27) { ?>
                    <img src="{{url('images/27.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 28) { ?>
                    <img src="{{url('images/28.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 29) { ?>
                    <img src="{{url('images/29.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 30) { ?>
                    <img src="{{url('images/30.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 31) { ?>
                    <img src="{{url('images/31.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 32) { ?>
                    <img src="{{url('images/32.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 33) { ?>
                    <img src="{{url('images/33.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 34) { ?>
                    <img src="{{url('images/34.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 35) { ?>
                    <img src="{{url('images/35.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 36) { ?>
                    <img src="{{url('images/36.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 37) { ?>
                    <img src="{{url('images/37.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 38) { ?>
                    <img src="{{url('images/38.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 39) { ?>
                    <img src="{{url('images/39.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 40) { ?>
                    <img src="{{url('images/40.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 41) { ?>
                    <img src="{{url('images/41.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 42) { ?>
                    <img src="{{url('images/42.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 43) { ?>
                    <img src="{{url('images/43.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 44) { ?>
                    <img src="{{url('images/44.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 45) { ?>
                    <img src="{{url('images/45.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 46) { ?>
                    <img src="{{url('images/46.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 47) { ?>
                    <img src="{{url('images/47.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 'null') { ?>
                    <img src="{{(images/na.png)}}" alt="John" style="width:30%">
                <?php } ?>
                <br>
                <p class="w3-opacity" align="LEFT">{{trans('message.Temperature daytime')}} <span>
                        <p class="fas fa-sort-down" style='font-size:16px;color:green;'><span><?php $temp1 = $DATA->daypart[0]->temperatureWindChill[6];
                                                                                                $ctemp1 = round(($temp1 - 32) / 1.8, 1);
                                                                                                echo "$ctemp1" . "&nbsp;{{trans('message.°C')}}";
                                                                                                ?></p>
                        <p class="fas fa-sort-up" style=' font-size:16px;color:red;'><?php $temp =  $DATA->daypart[0]->temperatureHeatIndex[6];
                                                                                        $ctemp = round(($temp - 32) / 1.8, 1);
                                                                                        echo "$ctemp" . "&nbsp;{{trans('message.°C')}}";    ?>
                    </span></p>
                </p>
                <p class="w3-opacity" align="LEFT">Humidity daytime<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $Humidity = $DATA->daypart[0]->relativeHumidity[6];

                                                                                echo "$Humidity" . " %";
                                                                                ?></p>
                </p>
                <?php $uv = $DATA->daypart[0]->uvDescription[6];
                if ($uv == "Low") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index daytime')}}<span>
                            <p class="" style='font-size:16px;color:green;'><span><?php $uv = $DATA->daypart[0]->uvDescription[6];

                                                                                    echo "$uv";
                                                                                    ?></p>
                    </p>
                <?php } elseif ($uv == "Moderate") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index daytime')}}<span>
                            <p class="" style='font-size:16px;color:yellow;'><span><?php $uv = $DATA->daypart[0]->uvDescription[6];

                                                                                    echo "$uv";
                                                                                    ?></p>
                    </p>
                <?php  } elseif ($uv == "High") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index daytime')}}<span>
                            <p class="" style='font-size:16px;color:orange;'><span><?php $uv = $DATA->daypart[0]->uvDescription[6];

                                                                                    echo "$uv";
                                                                                    ?></p>
                    </p>
                <?php } elseif ($uv == "Very High") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index daytime')}}<span>
                            <p class="" style='font-size:16px;color:orangered;'><span><?php $uv = $DATA->daypart[0]->uvDescription[6];

                                                                                        echo "$uv";
                                                                                        ?></p>
                    </p>
                <?php } elseif ($uv == "Extreme") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index daytime')}}<span>
                            <p class="" style='font-size:16px;color:red;'><span><?php $uv = $DATA->daypart[0]->uvDescription[6];

                                                                                echo "$uv";
                                                                                ?></p>
                    </p>
                <?php } ?>
                <p class="w3-opacity" align="LEFT">{{trans('message.WindDirection daytime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $winddirec = $DATA->daypart[0]->windDirectionCardinal[6];

                                                                                echo "$winddirec";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.WindSpeed daytime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $windspeed = $DATA->daypart[0]->windSpeed[6];
                                                                                $calwindspeed = round($windspeed * 1.6093, 1);
                                                                                echo "$calwindspeed" . " km/h";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.CloudCover daytime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $cloud = $DATA->daypart[0]->cloudCover[6];

                                                                                echo "$cloud" . " %";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.Sensible weather phrase daytime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $weather = $DATA->daypart[0]->wxPhraseLong[6];

                                                                                echo "$weather";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.Probability thunderstorm daytime')}} <span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $thunder = $DATA->daypart[0]->thunderCategory[6];

                                                                                echo "$thunder";
                                                                                ?></p>
                </p>



                <h3 align="CENTER"><?php echo $DATA->daypart[0]->daypartName[7]; ?></h3>
                <?php $icon = $DATA->daypart[0]->iconCode[7];
                if ($icon == 0) { ?>
                    <img src="{{url('images/00.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 1) { ?>
                    <img src="{{url('images/01.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 2) { ?>
                    <img src="{{url('images/02.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 3) { ?>
                    <img src="{{url('images/03.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 4) { ?>
                    <img src="{{url('images/04.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 5) { ?>
                    <img src="{{url('images/05.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 6) { ?>
                    <img src="{{url('images/06.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 7) { ?>
                    <img src="{{url('images/07.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 8) { ?>
                    <img src="{{url('PNGs/08.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 9) { ?>
                    <img src="{{url('images/09.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 10) { ?>
                    <img src="{{url('images/10.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 11) { ?>
                    <img src="{{url('images/11.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 12) { ?>
                    <img src="{{url('images/12.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 13) { ?>
                    <img src="{{url('images/13.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 14) { ?>
                    <img src="{{url('images/14.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 15) { ?>
                    <img src="{{url('images/15.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 16) { ?>
                    <img src="{{url('images/16.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 17) { ?>
                    <img src="{{url('images/17.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 18) { ?>
                    <img src="{{url('images/18.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 19) { ?>
                    <img src="{{url('images/19.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 20) { ?>
                    <img src="{{url('images/20.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 21) { ?>
                    <img src="{{url('images/21.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 22) { ?>
                    <img src="{{url('images/22.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 23) { ?>
                    <img src="{{url('images/23.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 24) { ?>
                    <img src="{{url('images/24.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 25) { ?>
                    <img src="{{url('images/25.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 26) { ?>
                    <img src="{{url('images/26.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 27) { ?>
                    <img src="{{url('images/27.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 28) { ?>
                    <img src="{{url('images/28.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 29) { ?>
                    <img src="{{url('images/29.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 30) { ?>
                    <img src="{{url('images/30.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 31) { ?>
                    <img src="{{url('images/31.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 32) { ?>
                    <img src="{{url('images/32.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 33) { ?>
                    <img src="{{url('images/33.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 34) { ?>
                    <img src="{{url('images/34.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 35) { ?>
                    <img src="{{url('images/35.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 36) { ?>
                    <img src="{{url('images/36.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 37) { ?>
                    <img src="{{url('images/37.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 38) { ?>
                    <img src="{{url('images/38.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 39) { ?>
                    <img src="{{url('images/39.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 40) { ?>
                    <img src="{{url('images/40.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 41) { ?>
                    <img src="{{url('images/41.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 42) { ?>
                    <img src="{{url('images/42.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 43) { ?>
                    <img src="{{url('images/43.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 44) { ?>
                    <img src="{{url('images/44.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 45) { ?>
                    <img src="{{url('images/45.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 46) { ?>
                    <img src="{{url('images/46.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 47) { ?>
                    <img src="{{url('images/47.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 'null') { ?>
                    <img src="{{(images/na.png)}}" alt="John" style="width:30%">
                <?php } ?>
                <br>
                <p class="w3-opacity" align="LEFT">{{trans('message.Temperature nighttime')}} <span>
                        <p class="fas fa-sort-down" style='font-size:16px;color:green;'><span><?php $temp1 = $DATA->daypart[0]->temperatureWindChill[7];
                                                                                                $ctemp1 = round(($temp1 - 32) / 1.8, 1);
                                                                                                echo "$ctemp1" . "&nbsp;{{trans('message.°C')}}";
                                                                                                ?></p>
                        <p class="fas fa-sort-up" style=' font-size:16px;color:red;'><?php $temp =  $DATA->daypart[0]->temperatureHeatIndex[7];
                                                                                        $ctemp = round(($temp - 32) / 1.8, 1);
                                                                                        echo "$ctemp" . "&nbsp;{{trans('message.°C')}}";    ?>
                    </span></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.Humidity nighttime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $Humidity = $DATA->daypart[0]->relativeHumidity[7];

                                                                                echo "$Humidity" . " %";
                                                                                ?></p>

                </p>
                <?php $uv = $DATA->daypart[0]->uvDescription[7];
                if ($uv == "Low") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index nighttime')}}<span>
                            <p class="" style='font-size:16px;color:green;'><span><?php $uv = $DATA->daypart[0]->uvDescription[7];

                                                                                    echo "$uv";
                                                                                    ?></p>
                    </p>
                <?php } elseif ($uv == "Moderate") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index nighttime')}}<span>
                            <p class="" style='font-size:16px;color:yellow;'><span><?php $uv = $DATA->daypart[0]->uvDescription[7];

                                                                                    echo "$uv";
                                                                                    ?></p>
                    </p>
                <?php  } elseif ($uv == "High") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index nighttime')}}<span>
                            <p class="" style='font-size:16px;color:orange;'><span><?php $uv = $DATA->daypart[0]->uvDescription[7];

                                                                                    echo "$uv";
                                                                                    ?></p>
                    </p>
                <?php } elseif ($uv == "Very High") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index nighttime')}}<span>
                            <p class="" style='font-size:16px;color:red;'><span><?php $uv = $DATA->daypart[0]->uvDescription[7];

                                                                                echo "$uv";
                                                                                ?></p>
                    </p>
                <?php } elseif ($uv == "Extreme") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index nighttime')}}<span>
                            <p class="" style='font-size:16px;color:red;'><span><?php $uv = $DATA->daypart[0]->uvDescription[7];

                                                                                echo "$uv";
                                                                                ?></p>
                    </p>
                <?php } ?>
                <p class="w3-opacity" align="LEFT">{{trans('message.WindDirection nighttime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $winddirec = $DATA->daypart[0]->windDirectionCardinal[7];

                                                                                echo "$winddirec";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.WindSpeed nighttime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $windspeed = $DATA->daypart[0]->windSpeed[7];
                                                                                $calwindspeed = round($windspeed * 1.6093, 1);
                                                                                echo "$calwindspeed" . " km/h";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.CloudCover nighttime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $cloud = $DATA->daypart[0]->cloudCover[7];

                                                                                echo "$cloud" . " %";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.Sensible weather phrase nighttime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $weather = $DATA->daypart[0]->wxPhraseLong[7];

                                                                                echo "$weather";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.Probability thunderstorm nighttime')}} <span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $thunder = $DATA->daypart[0]->thunderCategory[7];

                                                                                echo "$thunder";
                                                                                ?></p>
                </p>
            </div>
            <!--day5 -->
            <div class="w3-col l2 m6 w3-margin-bottom w3-border w3-border-blue w3-hover-border-green w3-round-xxlarge" align="CENTER">
                <h3 align="CENTER"><?php echo $DATA->daypart[0]->daypartName[8]; ?></h3>
                <p class="w3-opacity" align="LEFT">{{trans('message.Temperature daily')}} <span>
                        <p class="fas fa-sort-down" style='font-size:16px;color:green;'><span><?php $temp1 = $DATA->temperatureMin[4];
                                                                                                $ctemp1 = round(($temp1 - 32) / 1.8, 1);
                                                                                                echo "$ctemp1" . "&nbsp;{{trans('message.°C')}}";
                                                                                                ?></p>
                        <p class="fas fa-sort-up" style=' font-size:16px;color:red;'><?php $temp =  $DATA->temperatureMax[4];
                                                                                        $ctemp = round(($temp - 32) / 1.8, 1);
                                                                                        echo "$ctemp" . "&nbsp;{{trans('message.°C')}}";    ?>
                    </span></p>
                </p>

                <?php $icon = $DATA->daypart[0]->iconCode[8];
                if ($icon == 00) { ?>
                    <img src="{{url('images/00.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 1) { ?>
                    <img src="{{url('images/01.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 2) { ?>
                    <img src="{{url('images/02.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 3) { ?>
                    <img src="{{url('images/03.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 4) { ?>
                    <img src="{{url('images/04.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 5) { ?>
                    <img src="{{url('images/05.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 6) { ?>
                    <img src="{{url('images/06.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 7) { ?>
                    <img src="{{url('images/07.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 8) { ?>
                    <img src="{{url('PNGs/08.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 9) { ?>
                    <img src="{{url('images/09.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 10) { ?>
                    <img src="{{url('images/10.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 11) { ?>
                    <img src="{{url('images/11.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 12) { ?>
                    <img src="{{url('images/12.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 13) { ?>
                    <img src="{{url('images/13.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 14) { ?>
                    <img src="{{url('images/14.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 15) { ?>
                    <img src="{{url('images/15.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 16) { ?>
                    <img src="{{url('images/16.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 17) { ?>
                    <img src="{{url('images/17.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 18) { ?>
                    <img src="{{url('images/18.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 19) { ?>
                    <img src="{{url('images/19.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 20) { ?>
                    <img src="{{url('images/20.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 21) { ?>
                    <img src="{{url('images/21.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 22) { ?>
                    <img src="{{url('images/22.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 23) { ?>
                    <img src="{{url('images/23.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 24) { ?>
                    <img src="{{url('images/24.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 25) { ?>
                    <img src="{{url('images/25.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 26) { ?>
                    <img src="{{url('images/26.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 27) { ?>
                    <img src="{{url('images/27.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 28) { ?>
                    <img src="{{url('images/28.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 29) { ?>
                    <img src="{{url('images/29.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 30) { ?>
                    <img src="{{url('images/30.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 31) { ?>
                    <img src="{{url('images/31.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 32) { ?>
                    <img src="{{url('images/32.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 33) { ?>
                    <img src="{{url('images/33.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 34) { ?>
                    <img src="{{url('images/34.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 35) { ?>
                    <img src="{{url('images/35.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 36) { ?>
                    <img src="{{url('images/36.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 37) { ?>
                    <img src="{{url('images/37.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 38) { ?>
                    <img src="{{url('images/38.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 39) { ?>
                    <img src="{{url('images/39.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 40) { ?>
                    <img src="{{url('images/40.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 41) { ?>
                    <img src="{{url('images/41.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 42) { ?>
                    <img src="{{url('images/42.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 43) { ?>
                    <img src="{{url('images/43.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 44) { ?>
                    <img src="{{url('images/44.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 45) { ?>
                    <img src="{{url('images/45.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 46) { ?>
                    <img src="{{url('images/46.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 47) { ?>
                    <img src="{{url('images/47.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 'null') { ?>
                    <img src="{{(images/na.png)}}" alt="John" style="width:30%">
                <?php } ?>
                <br>
                <p class="w3-opacity" align="LEFT">{{trans('message.Temperature daytime')}} <span>
                        <p class="fas fa-sort-down" style='font-size:16px;color:green;'><span><?php $temp1 = $DATA->daypart[0]->temperatureWindChill[8];
                                                                                                $ctemp1 = round(($temp1 - 32) / 1.8, 1);
                                                                                                echo "$ctemp1" . "&nbsp;{{trans('message.°C')}}";
                                                                                                ?></p>
                        <p class="fas fa-sort-up" style=' font-size:16px;color:red;'><?php $temp =  $DATA->daypart[0]->temperatureHeatIndex[8];
                                                                                        $ctemp = round(($temp - 32) / 1.8, 1);
                                                                                        echo "$ctemp" . "&nbsp;{{trans('message.°C')}}";    ?>
                    </span></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.Humidity daytime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $Humidity = $DATA->daypart[0]->relativeHumidity[8];

                                                                                echo "$Humidity" . " %";
                                                                                ?></p>
                </p>
                <?php $uv = $DATA->daypart[0]->uvDescription[8];
                if ($uv == "Low") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index daytime')}}<span>
                            <p class="" style='font-size:16px;color:green;'><span><?php $uv = $DATA->daypart[0]->uvDescription[8];

                                                                                    echo "$uv";
                                                                                    ?></p>
                    </p>
                <?php } elseif ($uv == "Moderate") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index daytime')}}<span>
                            <p class="" style='font-size:16px;color:yellow;'><span><?php $uv = $DATA->daypart[0]->uvDescription[8];

                                                                                    echo "$uv";
                                                                                    ?></p>
                    </p>
                <?php  } elseif ($uv == "High") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index daytime')}}<span>
                            <p class="" style='font-size:16px;color:orange;'><span><?php $uv = $DATA->daypart[0]->uvDescription[8];

                                                                                    echo "$uv";
                                                                                    ?></p>
                    </p>
                <?php } elseif ($uv == "Very High") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index daytime')}}<span>
                            <p class="" style='font-size:16px;color:orangered;'><span><?php $uv = $DATA->daypart[0]->uvDescription[8];

                                                                                        echo "$uv";
                                                                                        ?></p>
                    </p>
                <?php } elseif ($uv == "Extreme") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index daytime')}}<span>
                            <p class="" style='font-size:16px;color:red;'><span><?php $uv = $DATA->daypart[0]->uvDescription[8];

                                                                                echo "$uv";
                                                                                ?></p>
                    </p>
                <?php } ?>
                <p class="w3-opacity" align="LEFT">{{trans('message.WindDirection daytime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $winddirec = $DATA->daypart[0]->windDirectionCardinal[8];

                                                                                echo "$winddirec";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.WindSpeed daytime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $windspeed = $DATA->daypart[0]->windSpeed[8];
                                                                                $calwindspeed = round($windspeed * 1.6093, 1);
                                                                                echo "$calwindspeed" . " km/h";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.CloudCover daytime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $cloud = $DATA->daypart[0]->cloudCover[8];

                                                                                echo "$cloud" . " %";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.Sensible weather phrase daytime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $weather = $DATA->daypart[0]->wxPhraseLong[8];

                                                                                echo "$weather";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.Probability thunderstorm daytime')}} <span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $thunder = $DATA->daypart[0]->thunderCategory[8];

                                                                                echo "$thunder";
                                                                                ?></p>
                </p>



                <h3 align="CENTER"><?php echo $DATA->daypart[0]->daypartName[9]; ?></h3>
                <?php $icon = $DATA->daypart[0]->iconCode[9];
                if ($icon == 0) { ?>
                    <img src="{{url('images/00.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 1) { ?>
                    <img src="{{url('images/01.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 2) { ?>
                    <img src="{{url('images/02.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 3) { ?>
                    <img src="{{url('images/03.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 4) { ?>
                    <img src="{{url('images/04.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 5) { ?>
                    <img src="{{url('images/05.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 6) { ?>
                    <img src="{{url('images/06.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 7) { ?>
                    <img src="{{url('images/07.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 8) { ?>
                    <img src="{{url('PNGs/08.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 9) { ?>
                    <img src="{{url('images/09.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 10) { ?>
                    <img src="{{url('images/10.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 11) { ?>
                    <img src="{{url('images/11.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 12) { ?>
                    <img src="{{url('images/12.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 13) { ?>
                    <img src="{{url('images/13.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 14) { ?>
                    <img src="{{url('images/14.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 15) { ?>
                    <img src="{{url('images/15.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 16) { ?>
                    <img src="{{url('images/16.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 17) { ?>
                    <img src="{{url('images/17.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 18) { ?>
                    <img src="{{url('images/18.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 19) { ?>
                    <img src="{{url('images/19.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 20) { ?>
                    <img src="{{url('images/20.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 21) { ?>
                    <img src="{{url('images/21.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 22) { ?>
                    <img src="{{url('images/22.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 23) { ?>
                    <img src="{{url('images/23.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 24) { ?>
                    <img src="{{url('images/24.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 25) { ?>
                    <img src="{{url('images/25.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 26) { ?>
                    <img src="{{url('images/26.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 27) { ?>
                    <img src="{{url('images/27.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 28) { ?>
                    <img src="{{url('images/28.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 29) { ?>
                    <img src="{{url('images/29.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 30) { ?>
                    <img src="{{url('images/30.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 31) { ?>
                    <img src="{{url('images/31.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 32) { ?>
                    <img src="{{url('images/32.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 33) { ?>
                    <img src="{{url('images/33.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 34) { ?>
                    <img src="{{url('images/34.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 35) { ?>
                    <img src="{{url('images/35.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 36) { ?>
                    <img src="{{url('images/36.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 37) { ?>
                    <img src="{{url('images/37.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 38) { ?>
                    <img src="{{url('images/38.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 39) { ?>
                    <img src="{{url('images/39.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 40) { ?>
                    <img src="{{url('images/40.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 41) { ?>
                    <img src="{{url('images/41.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 42) { ?>
                    <img src="{{url('images/42.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 43) { ?>
                    <img src="{{url('images/43.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 44) { ?>
                    <img src="{{url('images/44.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 45) { ?>
                    <img src="{{url('images/45.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 46) { ?>
                    <img src="{{url('images/46.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 47) { ?>
                    <img src="{{url('images/47.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 'null') { ?>
                    <img src="{{(images/na.png)}}" alt="John" style="width:30%">
                <?php } ?>
                <br>
                <p class="w3-opacity" align="LEFT">{{trans('message.Temperature nighttime')}} <span>
                        <p class="fas fa-sort-down" style='font-size:16px;color:green;'><span><?php $temp1 = $DATA->daypart[0]->temperatureWindChill[9];
                                                                                                $ctemp1 = round(($temp1 - 32) / 1.8, 1);
                                                                                                echo "$ctemp1" . "&nbsp;{{trans('message.°C')}}";
                                                                                                ?></p>
                        <p class="fas fa-sort-up" style=' font-size:16px;color:red;'><?php $temp =  $DATA->daypart[0]->temperatureHeatIndex[9];
                                                                                        $ctemp = round(($temp - 32) / 1.8, 1);
                                                                                        echo "$ctemp" . "&nbsp;{{trans('message.°C')}}";    ?>
                    </span></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.Humidity nighttime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $Humidity = $DATA->daypart[0]->relativeHumidity[9];

                                                                                echo "$Humidity" . " %";
                                                                                ?></p>

                </p>
                <?php $uv = $DATA->daypart[0]->uvDescription[9];
                if ($uv == "Low") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index nighttime')}}<span>
                            <p class="" style='font-size:16px;color:green;'><span><?php $uv = $DATA->daypart[0]->uvDescription[9];

                                                                                    echo "$uv";
                                                                                    ?></p>
                    </p>
                <?php } elseif ($uv == "Moderate") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index nighttime')}}<span>
                            <p class="" style='font-size:16px;color:yellow;'><span><?php $uv = $DATA->daypart[0]->uvDescription[9];

                                                                                    echo "$uv";
                                                                                    ?></p>
                    </p>
                <?php  } elseif ($uv == "High") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index nighttime')}}<span>
                            <p class="" style='font-size:16px;color:orange;'><span><?php $uv = $DATA->daypart[0]->uvDescription[9];

                                                                                    echo "$uv";
                                                                                    ?></p>
                    </p>
                <?php } elseif ($uv == "Very High") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index nighttime')}}<span>
                            <p class="" style='font-size:16px;color:red;'><span><?php $uv = $DATA->daypart[0]->uvDescription[9];

                                                                                echo "$uv";
                                                                                ?></p>
                    </p>
                <?php } elseif ($uv == "Extreme") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index nighttime')}}<span>
                            <p class="" style='font-size:16px;color:red;'><span><?php $uv = $DATA->daypart[0]->uvDescription[9];

                                                                                echo "$uv";
                                                                                ?></p>
                    </p>
                <?php } ?>
                <p class="w3-opacity" align="LEFT">{{trans('message.WindDirection nighttime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $winddirec = $DATA->daypart[0]->windDirectionCardinal[9];

                                                                                echo "$winddirec";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.WindSpeed nighttime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $windspeed = $DATA->daypart[0]->windSpeed[9];
                                                                                $calwindspeed = round($windspeed * 1.6093, 1);
                                                                                echo "$calwindspeed" . " km/h";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.CloudCover nighttime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $cloud = $DATA->daypart[0]->cloudCover[9];

                                                                                echo "$cloud" . " %";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.Sensible weather phrase nighttime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $weather = $DATA->daypart[0]->wxPhraseLong[9];

                                                                                echo "$weather";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.Probability thunderstorm nighttime')}} <span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $thunder = $DATA->daypart[0]->thunderCategory[9];

                                                                                echo "$thunder";
                                                                                ?></p>
                </p>
            </div>
            <!--day6-->
            <div class="w3-col l2 m6 w3-margin-bottom w3-border w3-border-blue w3-hover-border-green w3-round-xxlarge" align="CENTER">
                <h3 align="CENTER"><?php echo $DATA->daypart[0]->daypartName[10]; ?></h3>
                <p class="w3-opacity" align="LEFT">{{trans('message.Temperature daily')}} <span>
                        <p class="fas fa-sort-down" style='font-size:16px;color:green;'><span><?php $temp1 = $DATA->temperatureMin[5];
                                                                                                $ctemp1 = round(($temp1 - 32) / 1.8, 1);
                                                                                                echo "$ctemp1" . "&nbsp;{{trans('message.°C')}}";
                                                                                                ?></p>
                        <p class="fas fa-sort-up" style=' font-size:16px;color:red;'><?php $temp =  $DATA->temperatureMax[5];
                                                                                        $ctemp = round(($temp - 32) / 1.8, 1);
                                                                                        echo "$ctemp" . "&nbsp;{{trans('message.°C')}}";    ?>
                    </span></p>
                </p>

                <?php $icon = $DATA->daypart[0]->iconCode[10];
                if ($icon == 00) { ?>
                    <img src="{{url('images/00.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 1) { ?>
                    <img src="{{url('images/01.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 2) { ?>
                    <img src="{{url('images/02.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 3) { ?>
                    <img src="{{url('images/03.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 4) { ?>
                    <img src="{{url('images/04.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 5) { ?>
                    <img src="{{url('images/05.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 6) { ?>
                    <img src="{{url('images/06.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 7) { ?>
                    <img src="{{url('images/07.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 8) { ?>
                    <img src="{{url('PNGs/08.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 9) { ?>
                    <img src="{{url('images/09.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 10) { ?>
                    <img src="{{url('images/10.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 11) { ?>
                    <img src="{{url('images/11.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 12) { ?>
                    <img src="{{url('images/12.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 13) { ?>
                    <img src="{{url('images/13.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 14) { ?>
                    <img src="{{url('images/14.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 15) { ?>
                    <img src="{{url('images/15.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 16) { ?>
                    <img src="{{url('images/16.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 17) { ?>
                    <img src="{{url('images/17.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 18) { ?>
                    <img src="{{url('images/18.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 19) { ?>
                    <img src="{{url('images/19.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 20) { ?>
                    <img src="{{url('images/20.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 21) { ?>
                    <img src="{{url('images/21.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 22) { ?>
                    <img src="{{url('images/22.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 23) { ?>
                    <img src="{{url('images/23.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 24) { ?>
                    <img src="{{url('images/24.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 25) { ?>
                    <img src="{{url('images/25.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 26) { ?>
                    <img src="{{url('images/26.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 27) { ?>
                    <img src="{{url('images/27.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 28) { ?>
                    <img src="{{url('images/28.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 29) { ?>
                    <img src="{{url('images/29.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 30) { ?>
                    <img src="{{url('images/30.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 31) { ?>
                    <img src="{{url('images/31.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 32) { ?>
                    <img src="{{url('images/32.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 33) { ?>
                    <img src="{{url('images/33.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 34) { ?>
                    <img src="{{url('images/34.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 35) { ?>
                    <img src="{{url('images/35.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 36) { ?>
                    <img src="{{url('images/36.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 37) { ?>
                    <img src="{{url('images/37.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 38) { ?>
                    <img src="{{url('images/38.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 39) { ?>
                    <img src="{{url('images/39.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 40) { ?>
                    <img src="{{url('images/40.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 41) { ?>
                    <img src="{{url('images/41.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 42) { ?>
                    <img src="{{url('images/42.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 43) { ?>
                    <img src="{{url('images/43.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 44) { ?>
                    <img src="{{url('images/44.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 45) { ?>
                    <img src="{{url('images/45.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 46) { ?>
                    <img src="{{url('images/46.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 47) { ?>
                    <img src="{{url('images/47.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 'null') { ?>
                    <img src="{{(images/na.png)}}" alt="John" style="width:30%">
                <?php } ?>
                <br>
                <p class="w3-opacity" align="LEFT">{{trans('message.Temperature daytime')}} <span>
                        <p class="fas fa-sort-down" style='font-size:16px;color:green;'><span><?php $temp1 = $DATA->daypart[0]->temperatureWindChill[10];
                                                                                                $ctemp1 = round(($temp1 - 32) / 1.8, 1);
                                                                                                echo "$ctemp1" . "&nbsp;{{trans('message.°C')}}";
                                                                                                ?></p>
                        <p class="fas fa-sort-up" style=' font-size:16px;color:red;'><?php $temp =  $DATA->daypart[0]->temperatureHeatIndex[10];
                                                                                        $ctemp = round(($temp - 32) / 1.8, 1);
                                                                                        echo "$ctemp" . "&nbsp;{{trans('message.°C')}}";    ?>
                    </span></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.Humidity daytime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $Humidity = $DATA->daypart[0]->relativeHumidity[10];

                                                                                echo "$Humidity" . " %";
                                                                                ?></p>
                </p>
                <?php $uv = $DATA->daypart[0]->uvDescription[10];
                if ($uv == "Low") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index daytime')}}<span>
                            <p class="" style='font-size:16px;color:green;'><span><?php $uv = $DATA->daypart[0]->uvDescription[10];

                                                                                    echo "$uv";
                                                                                    ?></p>
                    </p>
                <?php } elseif ($uv == "Moderate") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index daytime')}}<span>
                            <p class="" style='font-size:16px;color:yellow;'><span><?php $uv = $DATA->daypart[0]->uvDescription[10];

                                                                                    echo "$uv";
                                                                                    ?></p>
                    </p>
                <?php  } elseif ($uv == "High") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index daytime')}}<span>
                            <p class="" style='font-size:16px;color:orange;'><span><?php $uv = $DATA->daypart[0]->uvDescription[10];

                                                                                    echo "$uv";
                                                                                    ?></p>
                    </p>
                <?php } elseif ($uv == "Very High") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index daytime')}}<span>
                            <p class="" style='font-size:16px;color:orangered;'><span><?php $uv = $DATA->daypart[0]->uvDescription[10];

                                                                                        echo "$uv";
                                                                                        ?></p>
                    </p>
                <?php } elseif ($uv == "Extreme") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index daytime')}}<span>
                            <p class="" style='font-size:16px;color:red;'><span><?php $uv = $DATA->daypart[0]->uvDescription[10];

                                                                                echo "$uv";
                                                                                ?></p>
                    </p>
                <?php } ?>
                <p class="w3-opacity" align="LEFT">{{trans('message.WindDirection daytime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $winddirec = $DATA->daypart[0]->windDirectionCardinal[10];

                                                                                echo "$winddirec";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.WindSpeed daytime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $windspeed = $DATA->daypart[0]->windSpeed[10];
                                                                                $calwindspeed = round($windspeed * 1.6093, 1);
                                                                                echo "$calwindspeed" . " km/h";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.CloudCover daytime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $cloud = $DATA->daypart[0]->cloudCover[10];

                                                                                echo "$cloud" . " %";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.Sensible weather phrase daytime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $weather = $DATA->daypart[0]->wxPhraseLong[10];

                                                                                echo "$weather";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.Probability thunderstorm daytime')}} <span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $thunder = $DATA->daypart[0]->thunderCategory[10];

                                                                                echo "$thunder";
                                                                                ?></p>
                </p>



                <h3 align="CENTER"><?php echo $DATA->daypart[0]->daypartName[11]; ?></h3>
                <?php $icon = $DATA->daypart[0]->iconCode[11];
                if ($icon == 0) { ?>
                    <img src="images/00.png" alt="John" style="width:30%">
                <?php } elseif ($icon == 1) { ?>
                    <img src="{{url('images/01.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 2) { ?>
                    <img src="{{url('images/02.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 3) { ?>
                    <img src="{{url('images/03.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 4) { ?>
                    <img src="{{url('images/04.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 5) { ?>
                    <img src="{{url('images/05.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 6) { ?>
                    <img src="{{url('images/06.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 7) { ?>
                    <img src="{{url('images/07.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 8) { ?>
                    <img src="{{url('PNGs/08.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 9) { ?>
                    <img src="{{url('images/09.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 10) { ?>
                    <img src="{{url('images/10.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 11) { ?>
                    <img src="{{url('images/11.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 12) { ?>
                    <img src="{{url('images/12.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 13) { ?>
                    <img src="{{url('images/13.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 14) { ?>
                    <img src="{{url('images/14.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 15) { ?>
                    <img src="{{url('images/15.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 16) { ?>
                    <img src="{{url('images/16.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 17) { ?>
                    <img src="{{url('images/17.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 18) { ?>
                    <img src="{{url('images/18.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 19) { ?>
                    <img src="{{url('images/19.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 20) { ?>
                    <img src="{{url('images/20.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 21) { ?>
                    <img src="{{url('images/21.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 22) { ?>
                    <img src="{{url('images/22.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 23) { ?>
                    <img src="{{url('images/23.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 24) { ?>
                    <img src="{{url('images/24.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 25) { ?>
                    <img src="{{url('images/25.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 26) { ?>
                    <img src="{{url('images/26.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 27) { ?>
                    <img src="{{url('images/27.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 28) { ?>
                    <img src="{{url('images/28.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 29) { ?>
                    <img src="{{url('images/29.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 30) { ?>
                    <img src="{{url('images/30.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 31) { ?>
                    <img src="{{url('images/31.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 32) { ?>
                    <img src="{{url('images/32.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 33) { ?>
                    <img src="{{url('images/33.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 34) { ?>
                    <img src="{{url('images/34.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 35) { ?>
                    <img src="{{url('images/35.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 36) { ?>
                    <img src="{{url('images/36.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 37) { ?>
                    <img src="{{url('images/37.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 38) { ?>
                    <img src="{{url('images/38.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 39) { ?>
                    <img src="{{url('images/39.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 40) { ?>
                    <img src="{{url('images/40.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 41) { ?>
                    <img src="{{url('images/41.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 42) { ?>
                    <img src="{{url('images/42.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 43) { ?>
                    <img src="{{url('images/43.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 44) { ?>
                    <img src="{{url('images/44.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 45) { ?>
                    <img src="{{url('images/45.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 46) { ?>
                    <img src="{{url('images/46.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 47) { ?>
                    <img src="{{url('images/47.png')}}" alt="John" style="width:30%">
                <?php } elseif ($icon == 'null') { ?>
                    <img src="{{(images/na.png)}}" alt="John" style="width:30%">
                <?php } ?>
                <br>
                <p class="w3-opacity" align="LEFT">{{trans('message.Temperature nighttime')}} <span>
                        <p class="fas fa-sort-down" style='font-size:16px;color:green;'><span><?php $temp1 = $DATA->daypart[0]->temperatureWindChill[11];
                                                                                                $ctemp1 = round(($temp1 - 32) / 1.8, 1);
                                                                                                echo "$ctemp1" . "&nbsp;{{trans('message.°C')}}";
                                                                                                ?></p>
                        <p class="fas fa-sort-up" style=' font-size:16px;color:red;'><?php $temp =  $DATA->daypart[0]->temperatureHeatIndex[11];
                                                                                        $ctemp = round(($temp - 32) / 1.8, 1);
                                                                                        echo "$ctemp" . "&nbsp;{{trans('message.°C')}}";    ?>
                    </span></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.Humidity nighttime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $Humidity = $DATA->daypart[0]->relativeHumidity[11];

                                                                                echo "$Humidity" . " %";
                                                                                ?></p>

                </p>
                <?php $uv = $DATA->daypart[0]->uvDescription[11];
                if ($uv == "Low") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index nighttime')}}<span>
                            <p class="" style='font-size:16px;color:green;'><span><?php $uv = $DATA->daypart[0]->uvDescription[11];

                                                                                    echo "$uv";
                                                                                    ?></p>
                    </p>
                <?php } elseif ($uv == "Moderate") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index nighttime')}}<span>
                            <p class="" style='font-size:16px;color:yellow;'><span><?php $uv = $DATA->daypart[0]->uvDescription[11];

                                                                                    echo "$uv";
                                                                                    ?></p>
                    </p>
                <?php  } elseif ($uv == "High") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index nighttime')}}<span>
                            <p class="" style='font-size:16px;color:orange;'><span><?php $uv = $DATA->daypart[0]->uvDescription[11];

                                                                                    echo "$uv";
                                                                                    ?></p>
                    </p>
                <?php } elseif ($uv == "Very High") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index nighttime')}}<span>
                            <p class="" style='font-size:16px;color:red;'><span><?php $uv = $DATA->daypart[0]->uvDescription[11];

                                                                                echo "$uv";
                                                                                ?></p>
                    </p>
                <?php } elseif ($uv == "Extreme") { ?>
                    <p class="w3-opacity" align="LEFT">{{trans('message.UV index nighttime')}}<span>
                            <p class="" style='font-size:16px;color:red;'><span><?php $uv = $DATA->daypart[0]->uvDescription[11];

                                                                                echo "$uv";
                                                                                ?></p>
                    </p>
                <?php } ?>
                <p class="w3-opacity" align="LEFT">{{trans('message.WindDirection nighttime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $winddirec = $DATA->daypart[0]->windDirectionCardinal[11];

                                                                                echo "$winddirec";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.WindSpeed nighttime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $windspeed = $DATA->daypart[0]->windSpeed[11];
                                                                                $calwindspeed = round($windspeed * 1.6093, 1);
                                                                                echo "$calwindspeed" . " km/h";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.CloudCover nighttime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $cloud = $DATA->daypart[0]->cloudCover[11];

                                                                                echo "$cloud" . " %";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.Sensible weather phrase nighttime')}}<span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $weather = $DATA->daypart[0]->wxPhraseLong[11];

                                                                                echo "$weather";
                                                                                ?></p>
                </p>
                <p class="w3-opacity" align="LEFT">{{trans('message.Probability thunderstorm nighttime')}} <span>
                        <p class="" style='font-size:16px;color:green;'><span><?php $thunder = $DATA->daypart[0]->thunderCategory[11];

                                                                                echo "$thunder";
                                                                                ?></p>
                </p>
            </div>

        </div>
@endsection

