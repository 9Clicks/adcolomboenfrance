<?php

namespace App\Http\Controllers;
use DB;
use App\appConfig;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $app_configs           = DB::table('app_configs')->first();

        return view('principal.index',[
            'app_configs'      => $app_configs
        ]);
    }
}
