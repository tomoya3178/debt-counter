<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends Controller
{
    
    public function index()
    {
        return view('index');
    }
    
    public function debtCount()
    {
        $time = strtotime("2020-01-04 00:00:00");
        $now = strtotime(date("Y-m-d H:i:s"));
        $elapsed = $now - $time;
        $debt = 20000;
        
        $data['now'] = $now;
        $data['elapsed'] = $elapsed;
        $data['debt'] = ($elapsed * 0.01) * $debt;
        
        return json_encode($data);
    }
}
