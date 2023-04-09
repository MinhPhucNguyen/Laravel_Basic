@extends('layouts.app')

@section('content')
    <h1>Enter food information</h1>
    <form action="/foods" method="POST">
        @csrf
        <input 
            class="form-control" 
            type="text" 
            name="name" 
            placeholder="Enter food's name"
        >
        <input 
            class="form-control" 
            type="text" 
            name="description" 
            placeholder="Enter food's description"
        >
        <input 
            class="form-control" 
            type="text" 
            name="count" 
            placeholder="Enter food's count"
        >
        <button class="btn btn-primary" type='submit'>Submit</button>
      
    </form>
@endsection