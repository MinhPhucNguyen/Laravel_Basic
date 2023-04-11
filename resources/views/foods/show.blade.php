@extends('layouts.app')

@section('content')
    <h1>Detail food: {{ $food->name }}</h1>
    <h3>Name: {{ $food->name }}</h3>
    <h3>Count: {{ $food->count }}</h3>
    <h3>Description: {{ $food->description }}</h3>
    <h3>CategoryID: {{ $food->category_id }}</h3>
    <h3>Category's name: {{ $food->category->name }}</h3>
@endsection
