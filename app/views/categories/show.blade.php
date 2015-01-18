@extends('layouts.default')

@section('title')
<title>Categories</title>
@stop

{{-- Content --}}
@section('container')

<h1>{{ $category->name }}</h1>

{{$category->subcategories()->first()->name}}
{{$subcategories->first()->name}}

<ul>
    @foreach ($subcategories as $subcategory)
    <li>
        {{ $subcategory->name }}
    </li>
    @endforeach
</ul>



@include('layouts.preview')

@stop
