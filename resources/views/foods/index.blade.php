@extends('layouts.app')

@section('content')
    <h1>This is Foods Page</h1>
    <ol class="list-group list-group-numbered">
        @foreach ($foods as $food)
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                <div class="fw-bold">{{$food->name}}</div>
                {{$food->description}}
                </div>
                <span class="badge bg-primary rounded-pill"> {{$food->count}} </span>
            </li> 
        @endforeach
    </ol>
@endsection