@extends('layout.layout')

@section('content')
    <div class="row my-2 py-4">
        <div class="col-md-12">
            <h4 class="text-center">Motorbike Project Admin Dashboard</h4>
        </div>
    </div>

    <hr/>

    <div class="row my-2 py-4">
        <div class="col-md-12">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">color</th>
                    <th scope="col">weight</th>
                    <th scope="col">price</th>
                    <th scope="col">image</th>
                </tr>
                </thead>
                <tbody>
                @foreach($motorbikes as $motorbike)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $motorbike->name }}</td>
                        <td>{{ $motorbike->color }}</td>
                        <td>{{ $motorbike->weight }}</td>
                        <td>{{ $motorbike->price }}</td>
                        <td>
                            <img src="{{ $motorbike->image }}" alt="...">
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $motorbikes->links() }}
        </div>
    </div>
@endsection
