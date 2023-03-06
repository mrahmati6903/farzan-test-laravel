<?php

namespace App\Http\Controllers;

use App\Models\Motorbike;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class HomeController extends Controller
{
    public function index()
    {
        $motorbikes = QueryBuilder::for(Motorbike::class)
            ->allowedFilters(['color'])
            ->allowedSorts(['price', '-price'])
            ->paginate(9);
//        $motorbikes = Motorbike::paginate(9);
        return view('index', ['motorbikes' => $motorbikes]);
    }

    public function motorbike(Motorbike $motorbike)
    {
        return view('motorbike', ['motorbike' => $motorbike]);
    }
}
