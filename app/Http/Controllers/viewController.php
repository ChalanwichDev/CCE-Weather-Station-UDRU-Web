<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Response;
use Carbon\CarbonInterval;
use Illuminate\Console\Scheduling\Schedule;

class viewController extends Controller
{
    public function index(){
        return view('index');
    }
    public function graph(){
        return view('graph');
    }
    public function monitoring()
    {
        return view('monitoring');
    }
    public function forecast(){
        return view('forecast');
    }
    public function report(){
        return view('report');
    }
    public function admin(){
        return view('welcome');

    }
    public function insertdata(){
        return view('insertdata');
    }
}
