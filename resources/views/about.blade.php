@extends('layouts.app')

@section('content')
    <h3>This is About Page</h3>
    {{-- {{
        $x = 1
    }}
    @if ($x > 2)
        <h3>x is greater than 2</h3>
    @elseif($x < 10)
        <h3>x is less than 10<h3>
    @else
        <h3>All conditions are not match</h3>
    @endif --}}

    {{-- @unless (empty($name))
        <h3>Name is not empty</h3>
    @endunless --}}

    {{-- @if (!empty($name))
        <h3>Name is not empty</h3>   
    @endif --}}

    {{-- @empty(!$name)
        <h3>Name is not empty</h3>     
    @endempty
    
    @empty($age)
        <h3>Age is empty</h3>
    @endempty

    @isset($name)
        <h3>Name has been set</h3>
    @endisset

    @switch($name)
        @case("Phuc")
            <h3>This is Phuc</h3>
            @break
        @case("Peter")
            <h3>This is Peter</h3>
            @break
        @default
            <h3>No one selected</h3>
    @endswitch --}}

{{-- @for ($i = 0; $i < 5; $i++)
        <h2>i = {{$i}} </h2>
    @endfor --}}

    {{-- @foreach ($names as $eachName)
        <h4> {{$eachName}} </h4>
    @endforeach --}}

        {{$i = 0}}
        @while ($i < 5)
            <h4>i = {{$i}} </h4>
            {{ $i++ }}
        @endwhile

    
@endsection
