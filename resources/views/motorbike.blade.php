@extends('layout.layout')

@section('content')
    <div class="row my-2 py-4">
        <div class="col-md-12 m-2">
            <div class="card">
                <img src="{{ asset('storage/uploads/' . $motorbike->image) }}" alt="..." class="card-img-top" width="400px" height="450px">
                <div class="card-body">
                    <h5 class="card-title">{{ $motorbike->name }}</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <b class="float-left">Color:</b>
                        <span class="float-right">{{ $motorbike->color }}</span>
                    </li>
                    <li class="list-group-item">
                        <b class="float-left">Weight:</b>
                        <span class="float-right">{{ $motorbike->weight }}</span>
                    </li>
                    <li class="list-group-item">
                        <b class="float-left">Price:</b>
                        <span class="float-right">${{ $motorbike->price }}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
