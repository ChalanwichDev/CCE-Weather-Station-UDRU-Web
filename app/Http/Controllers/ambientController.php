<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Response;
use Carbon\CarbonInterval;
use Illuminate\Console\Scheduling\Schedule;


class ambientController extends Controller
{
    public function dataAmbient(){
        $users = DB::table('ambient')->select('Tempurature', 'Humidity', 'Wind', 'Wind_Direction', 'Rain', 'Pressure', 'Solar', 'UV')->whereRaw('id = (SELECT MAX(id) FROM ambient)')->first();
        return Response::json($users);
    }
    public function dataAmbientgauge()
    {
        $users = DB::table('ambient')->select('Tempurature', 'Humidity', 'Wind', 'Wind_Direction', 'Rain', 'Pressure', 'Solar', 'UV')->whereRaw('id = (SELECT MAX(id) FROM ambient)')->get();
        $resultArray = array();
        foreach($users as $result){
            array_unshift($resultArray,$result);
        }
        return Response::json( $resultArray);
    }

    public function minmaxAmbient()
    {
        date_default_timezone_set('Asia/Bangkok');
        $today_date = date('Y-m-d');
        $users = DB::table('ambient')->select(DB::raw('round(MIN(Tempurature),2)'), DB::raw( 'round(MIN(Humidity),2)'), DB::raw( 'round(MIN(Wind),2)'), DB::raw( 'round(MIN(Rain),2)'), DB::raw( 'round(MIN(Pressure),2)'), DB::raw( 'round(MIN(Solar),2)'), DB::raw('round(MAX(Tempurature),2)'), DB::raw('round(MAX(Humidity),2)'), DB::raw('round(MAX(Wind),2)'), DB::raw('round(MAX(Rain),2)'), DB::raw('round(MAX(Pressure),2)'), DB::raw('round(MAX(Solar),2)'))->whereRaw("'$today_date'=Date")->get();
         return Response::json($users);
    }

    public function Am(){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://api.ambientweather.net/v1/devices?applicationKey=c138f4cd57ed45ad877db7a3ed26f5803a402e066a9c4d1cbdc67d271fb217c1&apiKey=809c75ac0dd3433da6e8515150d049460326228858ce40cf8ee0e4a1d65e39e8");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

        $response = curl_exec($ch);

        curl_close($ch);
        $DATA = json_decode($response, true);
        echo $response;                             // Show All Data From Get Api //
        foreach ($DATA as $row) {
            $tempf = $row['lastData']["tempf"];     //Tempurature
            $ctemp = round(($tempf - 32) / 1.8, 1);            //Convert °F to °C
            $humidity = $row['lastData']["humidity"];    //Humidity
            $chumidity = round($humidity, 1);
            $windspeedmph = $row['lastData']["windspeedmph"];      //Wind Speed
            $cwind = round($windspeedmph * 1.6093, 1);        //Convert 1mph = 1.6093 kph
            $winddir = $row['lastData']['winddir'];     //Wind Direction °C
            $cdirection = "";
            if ($winddir >= 351) {
                $cdirection = "N";
            } else if ($winddir <= 10) {
                $cdirection = "N";
            } else if (($winddir >= 11) && ($winddir <= 35)) {
                $cdirection = "NNE";
            } else if (($winddir >= 36) && ($winddir <= 55)) {
                $cdirection = "NE";
            } else if (($winddir >= 56) && ($winddir <= 80)) {
                $cdirection = "ENE";
            } else if (($winddir >= 81) && ($winddir <= 100)) {
                $cdirection = "E";
            } else if (($winddir >= 101) && ($winddir <= 125)) {
                $cdirection = "ESE";
            } else if (($winddir >= 126) && ($winddir <= 145)) {
                $cdirection = "SE";
            } else if (($winddir >= 146) && ($winddir <= 170)) {
                $cdirection = "SSE";
            }else if (($winddir >= 171) && ($winddir <= 190)) {
                $cdirection = "S";
            }else if (($winddir >= 191) && ($winddir <= 215)) {
                $cdirection = "SSW";
            }else if (($winddir >= 216) && ($winddir <= 235)) {
                $cdirection = "SW";
            }else if (($winddir >= 236) && ($winddir <= 260)) {
                $cdirection = "WSW";
            }else if (($winddir >= 261) && ($winddir <= 280)) {
                $cdirection = "W";
            }else if (($winddir >= 281) && ($winddir <= 305)) {
                $cdirection = "WNW";
            }else if (($winddir >= 306) && ($winddir <= 325)) {
                $cdirection = "NW";
            }else if (($winddir >= 326) && ($winddir <= 350)) {
                $cdirection = "NNW";
            }
            
            //echo " $cdirection<br>";
            $checkrainin = $row['lastData']['hourlyrainin'];
            $dailyrainin = round(($checkrainin / 0.039370)/6,2);    //Rain per Day
            $todayrainin = $row['lastData']['dailyrainin'];
            $rainday = round(($todayrainin / 0.039370),2);
            $baromrelin   = $row['lastData']['baromrelin'];     //Pressure
            $cpressure = round($baromrelin * 33.86389, 1);
            //echo "$cpressure";
            $solarradiation = $row['lastData']['solarradiation'];   //Solar
            $csolar = round($solarradiation, 1);
            $uv = $row['lastData']['uv'];       //UV index
            $cuv = "";
            if ($uv <= 2) {
                $cuv = "Low";
            } else if (($uv >= 3) && ($uv <= 5)) {
                $cuv = "Moderate";
            } else if (($uv >= 6) && ($uv <= 7)) {
                $cuv = "High";
            } else if (($uv >= 8) && ($uv <= 10)) {
                $cuv = "Very High";
            } else if ($uv >= 11) {
                $cuv = "Extreme";
            }
            //**************************/
            date_default_timezone_set('Asia/Bangkok');
            $Date = date('Y-m-d');
            $Time = date('H:i:s');
            $id_station = 1;

            DB::table('ambient')->insert(['station_id'=>$id_station,'Date'=>$Date,'Time'=>$Time,'Tempurature'=> $ctemp,'Humidity'=> $chumidity,'Wind'=> $cwind,'Wind_Direction'=> $cdirection,'Rain'=> $dailyrainin,'Rainfall'=>$rainday,'Pressure'=> $cpressure,'Solar'=> $csolar,'UV'=> $cuv]);
    }
        //echo "<meta http-equiv=\"refresh\" content=\"60; URL= Am\">";
}



public function chartjsAmbienttoday(){
    date_default_timezone_set('Asia/Bangkok');
    $today_date = date('Y-m-d');
    $result = DB::table('ambient')->select('Date','Time', 'Tempurature', 'Humidity', 'Wind', 'Rain', 'Pressure', 'Solar')->whereRaw("Date = '$today_date'")->get();
        $data = array();
        foreach ($result as $row) {
            $data[] = $row;
        }
        return Response::json($data);
}

public function chartjsAmbient7days(){
    date_default_timezone_set('Asia/Bangkok');
    $today_date = date('Y-m-d');
    $date_7 = date('Y-m-d', strtotime("-7 days"));
    $result = DB::table('ambient')->select('Date','Time', 'Tempurature', 'Humidity', 'Wind', 'Rain', 'Pressure', 'Solar')->whereRaw("Date  BETWEEN '$date_7' AND '$today_date' ")->get();
        $data = array();
        foreach ($result as $row) {
            $data[] = $row;
        }
        return Response::json($data);
}
public function chartjsAmbientall(){
    $result = DB::table('ambient')->select('Date','Time', 'Tempurature', 'Humidity', 'Wind', 'Rain', 'Pressure', 'Solar')->get();
        $data = array();
        foreach ($result as $row) {
            $data[] = $row;
        }
        return Response::json($data);
}

public function savedata(){
    date_default_timezone_set('Asia/Bangkok');
    $today_date = date('Y-m-d');
    $today_time = date('H:i');
    $lastdate = date('Y-m-d', strtotime("-1 days"));
    //dd($today_time);
    if($today_time == '00:00'){
        //echo($lastdate);
        $pm10min =  DB::table('dustdtec')->where('Date' ,'=', $lastdate)->min('PM10');
        $pm10max =  DB::table('dustdtec')->where('Date' ,'=', $lastdate)->max('PM10');
        $tempuraturemin = DB::table('ambient')->where('Date' ,'=', $lastdate)->min('Tempurature');
        $tempuraturemax = DB::table('ambient')->where('Date' ,'=', $lastdate)->max('Tempurature');
        $humiditymin = DB::table('ambient')->where('Date' ,'=', $lastdate)->min('Humidity');
        $humiditymax = DB::table('ambient')->where('Date' ,'=', $lastdate)->max('Humidity');
        $windmin = DB::table('ambient')->where('Date' ,'=', $lastdate)->min('Wind');
        $windmax = DB::table('ambient')->where('Date' ,'=', $lastdate)->max('Wind');
        $rainmin = DB::table('ambient')->where('Date' ,'=', $lastdate)->min('Rain');
        $rainmax = DB::table('ambient')->where('Date' ,'=', $lastdate)->max('Rain');
        $rainfall = DB::table('ambient')->where('Date','=',$lastdate)->max('Rainfall');
        $pressuremin = DB::table('ambient')->where('Date' ,'=', $lastdate)->min('Pressure');
        $pressuremax = DB::table('ambient')->where('Date' ,'=', $lastdate)->max('Pressure');
        $solarmin = DB::table('ambient')->where('Date' ,'=', $lastdate)->min('Solar');
        $solarmax = DB::table('ambient')->where('Date' ,'=', $lastdate)->max('Solar');
        //echo($solarmax);

       DB::table('data_summary')->insert(['Date'=>$lastdate,'PM10_Low'=> $pm10min, 'PM10_High'=>$pm10max, 'Tempurature_Low'=>$tempuraturemin,'Tempurature_High'=>$tempuraturemax, 'Humidity_Low'=>$humiditymin, 'Humidity_High'=>$humiditymax, 'Wind_Low'=>$windmin, 'Wind_High'=>$windmax,'Rain_Low'=>$rainmin, 'Rain_High'=>$rainmax, 'rainfall'=>$rainfall,'Pressure_Low'=>$pressuremin, 'Pressure_High'=>$pressuremax, 'Solar_Low'=>$solarmin,'Solar_High'=>$solarmax]);
    }

}
}
