@extends('layouts.default')

@section('title')
<title>Categories</title>
@stop

{{-- Content --}}
@section('container')

<ul>
    @foreach ($categories as $category)
    <li>{{ $category->name }}</li>
    @endforeach
</ul>

@stop
