<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends Controller
{
    public function index()
    {
        $time = strtotime("2020-01-01 00:00:00");
        $now = strtotime(date("Y-m-d H:i:s"));
        
        $debt = (($now - $time) * 0.01) * 10000;
        
        $data['debt'] = $debt;
        return view('index', $data);
    }
}
