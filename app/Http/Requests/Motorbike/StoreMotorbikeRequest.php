<?php

namespace App\Http\Requests\Motorbike;

use Illuminate\Foundation\Http\FormRequest;

class StoreMotorbikeRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name'   => ['required', 'max:100', 'unique:motorbikes,name'],
            'color'  => ['required', 'max:100'],
            'weight' => ['required', 'integer'],
            'price'  => ['required', 'integer'],
            'image'  => ['required', 'image']
        ];
    }
}
