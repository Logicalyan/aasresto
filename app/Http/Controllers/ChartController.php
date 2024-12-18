<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index()
    {
        // // Example data
        // $labels = ['January', 'February', 'March', 'April'];
        // $data = [10, 20, 30, 40];

        return view('chart.index');
    }
}
