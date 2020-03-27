<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Session;
use App\Http\Middleware\Language;

/**** view *****/
Route::get('/', 'viewController@index');
Route::get('AirQuality', 'viewController@graph');
Route::get('Monitoring', 'viewController@monitoring');
Route::get('Forecast', 'viewController@forecast');
Route::get('Report','viewController@report');
Route::get('administrator','viewController@admin');
Route::get('insertdata', 'viewController@insertdata');
Route::get('map', function () {
    return view('map');
});
Route::get('guage', function () {
    return view('guage');
});
Route::get('map2', function () {
    return view('leaflet');
});
Route::get('locale/{locale}', function ($locale) {
	Session::put('locale', $locale); 
	return Redirect::back(); 
});
Route::get('Instruments', function () {
    return view('instrument');
});
Route::get('Deverloper', function () {
    return view('deverloper');
});
Route::get('layout/master', function () {
    return view('master');
});
/*Route::get('Report',function(){       //ปิดระบบ
    return view('close');
});*/

/****** dustdetec  ******/
Route::get('api/datadustdtec', 'dustdetecController@dataDustDTEC');
Route::get('minmaxdustdtec', 'dustdetecController@minmaxDustDTEC');
Route::get('DustDTEC', 'dustdetecController@getremote');
Route::get('datadustdtecgauge', 'dustdetecController@dataDustDTECgauge');
Route::get( 'checkchartDustDTECtoday', 'dustdetecController@chartjsDusDTECtoday');
Route::get( 'checkchartDustDTEC7days', 'dustdetecController@chartjsDusDTEC7days');
Route::get( 'checkchartDustDTECall', 'dustdetecController@chartjsDusDTECall');

/****** ambient *******/
Route::get('api/dataambient', 'ambientController@dataAmbient');
Route::get('minmaxambient', 'ambientController@minmaxAmbient');
Route::get( 'dataambientgauge', 'ambientController@dataAmbientgauge');
Route::get('checkchartAmbienttoday', 'ambientController@chartjsAmbienttoday');
Route::get('checkchartAmbient7days', 'ambientController@chartjsAmbient7days');
Route::get('checkchartAmbientall', 'ambientController@chartjsAmbientall');
Route::get('Am','ambientController@Am');


Route::get('check', function ( Request $request) {
    $che = $request->input('date');
    $date = $che;
        $pm10min =  DB::table('dustdtec')->where('Date' ,'=', $che)->min('PM10');
        $pm10max =  DB::table('dustdtec')->where('Date' ,'=', $che)->max('PM10');
        $tempuraturemin = DB::table('ambient')->where('Date' ,'=', $che)->min('Tempurature');
        $tempuraturemax = DB::table('ambient')->where('Date' ,'=', $che)->max('Tempurature');
        $humiditymin = DB::table('ambient')->where('Date' ,'=', $che)->min('Humidity');
        $humiditymax = DB::table('ambient')->where('Date' ,'=', $che)->max('Humidity');
        $windmin = DB::table('ambient')->where('Date' ,'=', $che)->min('Wind');
        $windmax = DB::table('ambient')->where('Date' ,'=', $che)->max('Wind');
        $rainmin = DB::table('ambient')->where('Date' ,'=', $che)->min('Rain');
        $rainmax = DB::table('ambient')->where('Date' ,'=', $che)->max('Rain');
        $rainfall = DB::table('ambient')->where('Date','=',$che)->max('Rainfall');
        $pressuremin = DB::table('ambient')->where('Date' ,'=', $che)->min('Pressure');
        $pressuremax = DB::table('ambient')->where('Date' ,'=', $che)->max('Pressure');
        $solarmin = DB::table('ambient')->where('Date' ,'=', $che)->min('Solar');
        $solarmax = DB::table('ambient')->where('Date' ,'=', $che)->max('Solar');
     
    $data = array(
        'date' => $date, 'pm10min' => $pm10min, 'pm10max' => $pm10max, 'tempuraturemin' => $tempuraturemin, 'tempuraturemax' => $tempuraturemax,
        'humiditymin' => $humiditymin, 'humiditymax' => $humiditymax, 'windmin' => $windmin, 'windmax' => $windmax, 'rainmin' => $rainmin,
        'rainmax' => $rainmax,'rainfall'=>$rainfall, 'pressuremin' =>  $pressuremin, 'pressuremax' => $pressuremax, 'solarmin' => $solarmin, 'solarmax' => $solarmax
    );
    return view("home",$data);

});

Route::get('chartjs', function () {
    return view('chartjs');
});



/****** report ******/
Route::get('ajaxreportall', 'ProjectController@ajaxreportall');
Route::get('ajaxreporttoday', 'ProjectController@ajaxreporttoday');
Route::get('ajaxreport1day', 'ProjectController@ajaxreport1day');
Route::get('ajaxreport3day', 'ProjectController@ajaxreport3day');
Route::get('ajaxreport5day', 'ProjectController@ajaxreport5day');
Route::get('ajaxreport7day', 'ProjectController@ajaxreport7day');

Route::get('ajaxreportdatasummaryall', 'ProjectController@ajaxreportdatasummaryall');
Route::get('ajaxreportdatasummary1day', 'ProjectController@ajaxreportdatasummary1day');
Route::get('ajaxreportdatasummary3day', 'ProjectController@ajaxreportdatasummary3day');
Route::get('ajaxreportdatasummary5day', 'ProjectController@ajaxreportdatasummary5day');
Route::get('ajaxreportdatasummary7day', 'ProjectController@ajaxreportdatasummary7day');


Route::get('savedata', 'ambientController@savedata');



Route::get('comparedata', function (Request $request) {
    $checkdata1 = $request->only(['data1']);
    $checkdata2 = $request->only(['data2']);
    $checkdate = $request->only(['date']);

    date_default_timezone_set('Asia/Bangkok');
    $today_date = date('Y-m-d');
        if(($_GET['data1'] == 'PM10') && ($_GET['data2']=='Tempurature')){
            //$result = DB::table('dustdtec')->leftjoin('ambient','dustdtec.station_id','=','ambient.station_id')->select('dustdtec.PM10','ambient.Tempurature')->where('dustdtec.Date','=',$checkdate)->get();
            $result = DB::table('dustdtec')->select('Date','Time',$_GET['data1'])->where('Date','=',$checkdate)->get();
            $data = array();
                foreach ($result as $row) {
                    $data[] = $row;
                }
            }else {
                $result = DB::table('ambient')->select('Date','Time',$_GET['data1'],$_GET['data2'])->where('Date','=',$checkdate)->get();
                $data = array();
                foreach ($result as $row) {
                    $data[] = $row;
                }
            }
    return Response::json($data);
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
