<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HostingController extends Controller
{
    public function hosting()
    {
        return view('cloud-hosting');
    }
    public function purchaseHosting(){
        return view('purchaseHosting');
    }

    public function cloudHosting(){
        return view('userCloudHosting');
    }
}
