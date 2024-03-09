<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransferController extends Controller
{
    //
    public function transfer()
    {
        return view("transfer");
    }
    public function userTransfer()
    {
        return view("userTransfer");
    }
    public function userPricing()
    {
        return view("userPricing");
    }
}
