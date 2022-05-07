@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Pizzas List
        </div>

        @foreach($pizzas as $pizza)
        <div>
            {{ $loop->index+1 }} - {{ $pizza['type'] }} - {{ $pizza['base'] }}
            @if($loop->first)
            <span>- first in the loop</span>
            @endif
            @if($loop->last)
            <span>- last in the loop</span>
            @endif
        </div>

        @endforeach

    </div>
</div>
@endsection
