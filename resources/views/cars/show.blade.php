@extends('layouts.app')
@section('content')

    <div class="container my-auto">


        <div class="text-center text-dark ">
            <!-- call image from public img -->
            <h1> model : {{ $car->model }} </h1>
            <h1> color : {{ $car->color }} </h1>
            <h1> price : {{ $car->price }} </h1>
            @if($images->count() == 0)
                <img src="/img/{{$car->image}}" alt="asht">
                <br>
            @else
                @foreach($images as $img)
                    <img src="/img/{{$img->image}}" alt="test">
                @endforeach
            @endif
            <form action="/cars/{{ $car->id }}/purchase" method="POST">
                @csrf
                @method('post')
                @if ($is_sold == false)
                    <button class="btn btn-danger mx-5">Complete Order</button>
                @else
                    <h1 class="text-danger d-inline">SOLD</h1>
                @endif
                <div class="container">
                    <a href="/cars/{{$car->id}}/edit" class="btn btn-primary m-5 d-block">Edit</a>
                    <a href="/cars/{{$car->id}}/delete" class="btn btn-danger m-5 d-block">Delete</a>
                    <a href="/" class="btn btn-dark d-inline m-5 d-block">Back</a>
                </div>

            </form>

        </div>

    </div>

@endsection
