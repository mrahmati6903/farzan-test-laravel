<?php

namespace App\Http\Controllers;

use App\Models\Motorbike;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $motorbikes = Motorbike::paginate(9);
        return view('index', ['motorbikes' => $motorbikes]);
    }

    public function motorbike(Motorbike $motorbike)
    {
        return view('motorbike', ['motorbike' => $motorbike]);
    }
}
