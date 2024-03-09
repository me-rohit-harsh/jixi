<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommonController extends Controller
{
    // About Us Page  Function 
    public function about()
    {
        return view('about');
    }

    // refund page  Function 
    public function refund()
    {
        return view('refund');
    }

    // terms page  Function 
    public function terms()
    {
        return view('terms');
    }

    // Privacy page  Function 
    public function privacy()
    {
        return view('privacy');
    }
    public function knowledgebase ()
    {
        return view('Knowledgebase');
    }
    public function announcements ()
    {
        return view('Announcements');
    }
}
