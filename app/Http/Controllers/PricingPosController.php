<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PricingPosController extends Controller
{
    public function index()
    {
        return view('pages.diko_pos.pricing.list');
    }
}
