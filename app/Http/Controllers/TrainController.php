<?php

namespace App\Http\Controllers;
use App\Train;

use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::where('giorno_di_arrivo', date('Y-m-d'))->get();
        return view('home', compact('trains'));

    }

    public function show($id)
    {
        $train = Train::findOrFail($id);
        return view('info', compact('train'));

    }
}
