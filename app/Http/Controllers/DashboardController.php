<?php

namespace App\Http\Controllers;

use App\Models\Motorbike;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $motorbikes = Motorbike::paginate(10);
        return view('dashboard.index', ['motorbikes' => $motorbikes]);
    }
}
