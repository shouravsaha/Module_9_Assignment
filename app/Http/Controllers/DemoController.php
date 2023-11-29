<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    //
    public function index(Request $request):string{
        return $request->cookie('Cookie_4');
    }

}
