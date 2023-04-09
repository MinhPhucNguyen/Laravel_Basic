@extends('layouts.app')

@section('content')
    <h1>This is Foods Page</h1>
    <a href="foods/create" class="btn btn-primary">Create a new Food</a>
    <ol class="list-group list-group-numbered">
        @foreach ($foods as $food)
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                <div class="fw-bold">{{$food->name}}</div>
                {{$food->description}}
                </div>
                <span class="badge bg-primary rounded-pill"> {{$food->count}} </span>
                <a href="/foods/{{$food->id}}/edit" class="btn btn-success">Edit</a>
            </li> 
        @endforeach
    </ol>
@endsection