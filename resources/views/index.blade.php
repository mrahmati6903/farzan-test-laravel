@extends('layout.layout')

@section('content')
    <div class="row my-2 py-2">
        <div class="com-md-12">
            <form class="form-inline">
                <label for="color">Color: </label>
                <input type="text" name="filter[color]" class="form-control mb-2 mr-sm-2" id="color" value="{{ request('filter', ['color' => ''])['color'] }}">

                <label for="sort">Sort By: </label>
                <select id="sort" name="sort" class="form-control mb-2 mr-sm-2">
                    <option value=""></option>
                    <option value="price" {{ request('sort', '') == 'price' ? 'selected' : '' }}>price - DESC</option>
                    <option value="-price" {{ request('sort', '') == '-price' ? 'selected' : '' }}>price - ASC </option>
                </select>
                <button type="submit" class="btn btn-primary mb-2 float-right">Filter</button>
            </form>
        </div>
    </div>

    <hr>

    <div class="row my-2 py-4">
        @foreach($motorbikes as $motorbike)
            <div class="col-md-3 m-2">
                <div class="card shadow-sm" style="width: 18rem;">
                    <img src="{{ asset('storage/uploads/' . $motorbike->image) }}" alt="..." class="card-img-top bg-light" height="200px">
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
                    <div class="card-body">
                        <a href="{{ route('motorbike', ['motorbike' => $motorbike->id]) }}" target="_blank" class="card-link">Show</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="row">
        <div class="col-md-12">
            {{ $motorbikes->appends($_GET)->links() }}
        </div>
    </div>
@endsection
