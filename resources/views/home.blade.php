@extends('template')

@section('title', 'Home')

@section('content')
    <section class="mt-5 container">
        @if (count($Otomotif_Cars) < 1)
            <h1>No Data Car</h1>
        @else
            <div class="row p-md-6 ">
                @foreach ($Otomotif_Cars as $car)
                <div class="col-md-4 p-3">
                    <div class="card" style="width: 350px;">
                        <div class="d-flex justify-content-center p-4">
                            <img class="card-img-top" src="{{ $car->URL_IMAGE }}" alt="car-img" style="width: 300px; height: 180px; border-radius: 5px">
                        </div>
                        <div class="card-body">
                            <h2 class="card-text">{{ $car->Brand }}</h2>
                            <div class="pivot">
                                <p class="card-text">{{ $car->Description }}</p>
                            </div>
                            <p class="card-text btn btn-danger">{{ $car->Price }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        @endif





    </section>
@endsection




