<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function support()
    {
        return view("support");
    }
    public function userSupport()
    {
        return view("userSupport");
    }
    public function submitTicket()
    {
        return view("submitTicket");
    }
}
