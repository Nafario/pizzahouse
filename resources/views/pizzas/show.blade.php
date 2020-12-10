@extends('layouts.app')

@section('content')
<div class="show-container">
    <div class="content">
        <div class="title-show">
            <p>Order By : {{$pizza->name}}</p>
            <p>Base : {{ $pizza->base }}</p>
            <p>Type : {{$pizza->type}}</p>
            <p>Toppings: </p>
            <ul>
                @foreach ($pizza->toppings as $topping)
                <li>{{$topping}}</li>
                @endforeach
            </ul>
            <form action="/pizzas/id={{$pizza->id}}" method="post">
                @csrf
                @method('DELETE')
                <button>Complete Order</button>
            </form>
        </div>
        <a href="{{ url('/pizzas') }}">Back to Pizzas</a>
    </div>
</div>
@endsection