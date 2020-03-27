<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Response;
use Carbon\CarbonInterval;
use Illuminate\Console\Scheduling\Schedule;

class dustdetecController extends Controller
{
    public function dataDustDTEC(){
        $users = DB::table('dustdtec')->select('PM10')->whereRaw('id = (SELECT MAX(id) FROM dustdtec)')->first();
        return response()->json($users);
        // return Response::json([$users]);
    }

    public function dataDustDTECgauge()
    {
        $users = DB::table('dustdtec')->select('PM10')->whereRaw('id = (SELECT MAX(id) FROM dustdtec)')->get();
        $resultArray = array();
        foreach ($users as $result) {
            array_unshift($resultArray, $result);
        }
        return Response::json($resultArray);
    }

    public function minmaxDustDTEC(){
        date_default_timezone_set('Asia/Bangkok');
        $today_date = date('Y-m-d');
        $users = DB::table('dustdtec')->select( DB::raw( 'round(MIN(PM10),2)'),DB::raw( 'round(MAX(PM10),2)'))->whereRaw("'$today_date'=Date")->get();
        return Response::json($users);
    }

    public function chartjsDusDTECtoday(){
        date_default_timezone_set('Asia/Bangkok');
        $today_date = date('Y-m-d');
        $result = DB::table('dustdtec')->select('Date','Time','PM10')->whereRaw("Date ='$today_date'")->get();
        $data = array();
            foreach ($result as $row) {
                $data[] = $row;
            }
            return Response::json($data);
    }

    public function chartjsDusDTEC7days(){
        date_default_timezone_set('Asia/Bangkok');
        $today_date = date('Y-m-d');
        $date_7 = date('Y-m-d', strtotime("-7 days"));
        $result = DB::table('dustdtec')->select('Date','Time','PM10')->whereRaw("Date  BETWEEN '$date_7' AND '$today_date' ")->get();
        $data = array();
            foreach ($result as $row) {
                $data[] = $row;
            }
            return Response::json($data);
    }

    public function chartjsDusDTECall(){
        date_default_timezone_set('Asia/Bangkok');
        $result = DB::table('dustdtec')->select('Date','Time','PM10')->get();
        $data = array();
            foreach ($result as $row) {
                $data[] = $row;
            }
            return Response::json($data);
    }

    public function getremote(){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "http://localhost/ChalanwichProject/ApiRemote.php");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

        $response = curl_exec($ch);
        curl_close($ch);
        $DATA = json_decode($response, true);
        echo $response;
        print_r($DATA);
       // echo "<hr>";
        $Date = $DATA['Date'];
        //echo $Date;
       // echo "<br>";
        $Time =  $DATA['Time'];
        //echo "<br>";
        $PM10 =  $DATA['PM10'];
        //echo "<br>";
        DB::table('dustdtec')->insert(['Date'=>$Date,'Time'=>$Time,'PM10'=>$PM10]);
        //echo "<meta http-equiv=\"refresh\" content=\"60; URL= DustDTEC\">";
    }
}
