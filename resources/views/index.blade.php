@extends('layouts.app')

@section('content')
    <h3>This is Home Page</h3>
    {{print_r(URL(''))}}
    <img src="{{asset('storage/pen-icon.png')}}" width="100" height="100" alt="">
@endsection
