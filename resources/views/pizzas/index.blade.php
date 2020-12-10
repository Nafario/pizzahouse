@extends('layouts.app')

@section('content')
<div class="flex-center position-ref full-height">
  <div class="content">
    <div class="title m-b-md">
      Pizza List
    </div>

    @foreach($pizzas as $pizza)
    <div>
      <a class="pizza-list" href="{{url('/pizzas/id='.$pizza->id)}}">
        <p> {{ $loop->index+1 }} - {{ $pizza['type'] }} - {{ $pizza['base'] }} - {{$pizza->name}}
        </p>
      </a>
    </div>
    @endforeach

  </div>
</div>
@endsection