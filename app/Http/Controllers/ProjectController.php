<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Response;
use Carbon\CarbonInterval;
use Illuminate\Console\Scheduling\Schedule;

class ProjectController extends Controller
{
    
public function ajaxreportall(){
    $call = DB::table('dustdtec')->join('ambient','dustdtec.id','=','ambient.id')->select('dustdtec.*','ambient.*')->get();
    $rows = array();
    foreach($call as $row){
        $rows[] = $row;
    }
    return response()->json($rows, 200);
}
public function ajaxreporttoday(){
    date_default_timezone_set('Asia/Bangkok');
    $today_date = date('Y-m-d');
    $call = DB::table('dustdtec')->join('ambient','dustdtec.id','=','ambient.id')->select('dustdtec.*','ambient.*')->whereRaw("dustdtec.Date = '$today_date' AND ambient.Date = '$today_date' ")->get();
    $rows = array();
    foreach($call as $row){
        $rows[] = $row;
    }
    return response()->json($rows, 200);
}

public function ajaxreport1day(){
    date_default_timezone_set('Asia/Bangkok');
    $today_date = date('Y-m-d');
    $date_7 = date('Y-m-d', strtotime("-1 days"));
    $call = DB::table('dustdtec')->join('ambient','dustdtec.id','=','ambient.id')->select('dustdtec.*','ambient.*')->whereRaw("dustdtec.Date  BETWEEN '$date_7' AND '$today_date' AND ambient.Date  BETWEEN '$date_7' AND '$today_date'")->get();
    $rows = array();
    foreach($call as $row){
        $rows[] = $row;
    }
    return response()->json($rows, 200);
}

public function ajaxreport3day(){
    date_default_timezone_set('Asia/Bangkok');
    $today_date = date('Y-m-d');
    $date_7 = date('Y-m-d', strtotime("-3 days"));
    $call = DB::table('dustdtec')->join('ambient','dustdtec.id','=','ambient.id')->select('dustdtec.*','ambient.*')->whereRaw("dustdtec.Date  BETWEEN '$date_7' AND '$today_date' AND ambient.Date  BETWEEN '$date_7' AND '$today_date'")->get();
    $rows = array();
    foreach($call as $row){
        $rows[] = $row;
    }
    return response()->json($rows, 200);
}

public function ajaxreport5day(){
    date_default_timezone_set('Asia/Bangkok');
    $today_date = date('Y-m-d');
    $date_7 = date('Y-m-d', strtotime("-5 days"));
    $call = DB::table('dustdtec')->join('ambient','dustdtec.id','=','ambient.id')->select('dustdtec.*','ambient.*')->whereRaw("dustdtec.Date  BETWEEN '$date_7' AND '$today_date' AND ambient.Date  BETWEEN '$date_7' AND '$today_date'")->get();
    $rows = array();
    foreach($call as $row){
        $rows[] = $row;
    }
    return response()->json($rows, 200);
}

public function ajaxreport7day(){
    date_default_timezone_set('Asia/Bangkok');
    $today_date = date('Y-m-d');
    $date_7 = date('Y-m-d', strtotime("-7 days"));
    $call = DB::table('dustdtec')->join('ambient','dustdtec.id','=','ambient.id')->select('dustdtec.*','ambient.*')->whereRaw("dustdtec.Date  BETWEEN '$date_7' AND '$today_date' AND ambient.Date  BETWEEN '$date_7' AND '$today_date'")->get();
    $rows = array();
    foreach($call as $row){
        $rows[] = $row;
    }
    return response()->json($rows, 200);
}


public function ajaxreportdatasummaryall(){
    $call = DB::table('data_summary')->get();
    $rows = array();
    foreach($call as $row){
        $rows[] = $row;
    }
    return response()->json($rows, 200);
}
public function ajaxreportdatasummary1day(){
    date_default_timezone_set('Asia/Bangkok');
    $today_date = date('Y-m-d');
    $date_7 = date('Y-m-d', strtotime("-1 days"));
    $call = DB::table('data_summary')->whereRaw("Date  BETWEEN '$date_7' AND '$today_date'")->get();
    $rows = array();
    foreach($call as $row){
        $rows[] = $row;
    }
    return response()->json($rows, 200);
}

public function ajaxreportdatasummary3day(){
    date_default_timezone_set('Asia/Bangkok');
    $today_date = date('Y-m-d');
    $date_7 = date('Y-m-d', strtotime("-3 days"));
    $call = DB::table('data_summary')->whereRaw("Date  BETWEEN '$date_7' AND '$today_date'")->get();
    $rows = array();
    foreach($call as $row){
        $rows[] = $row;
    }
    return response()->json($rows, 200);
}

public function ajaxreportdatasummary5day(){
    date_default_timezone_set('Asia/Bangkok');
    $today_date = date('Y-m-d');
    $date_7 = date('Y-m-d', strtotime("-5 days"));
    $call = DB::table('data_summary')->whereRaw("Date  BETWEEN '$date_7' AND '$today_date'")->get();
    $rows = array();
    foreach($call as $row){
        $rows[] = $row;
    }
    return response()->json($rows, 200);
}

public function ajaxreportdatasummary7day(){
    date_default_timezone_set('Asia/Bangkok');
    $today_date = date('Y-m-d');
    $date_7 = date('Y-m-d', strtotime("-7 days"));
    $call = DB::table('data_summary')->whereRaw("Date  BETWEEN '$date_7' AND '$today_date'")->get();
    $rows = array();
    foreach($call as $row){
        $rows[] = $row;
    }
    return response()->json($rows, 200);
}


}
