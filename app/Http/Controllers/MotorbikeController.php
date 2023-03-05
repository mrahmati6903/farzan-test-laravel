<?php

namespace App\Http\Controllers;

use App\Http\Requests\Motorbike\StoreMotorbikeRequest;
use App\Models\Motorbike;
use Illuminate\Http\Request;

class MotorbikeController extends Controller
{
    public function create()
    {
        return view('dashboard.motorbike.create');
    }

    public function store(StoreMotorbikeRequest $request)
    {
        try {
            $imageName = rand(100, 999) . '_' . $request->file('image')->getClientOriginalName();
            $result = Motorbike::create([
                'name'   => $request->input('name'),
                'color'  => $request->input('color'),
                'weight' => $request->input('weight'),
                'price'  => $request->input('price'),
                'image'  => $imageName
            ]);
            $request->file('image')->storeAs('public/uploads', $imageName);
            return redirect()->route('dashboard');
        } catch (\Exception $e) {
            return redirect()->route('dashboard_motorbike_create')->withErrors(['name' => 'an error occurred']);
        }
    }
}
