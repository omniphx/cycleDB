@extends('layouts.default')

@section('title')
<title>Categories</title>
@stop

{{-- Content --}}
@section('container')

<h1>{{ $category->name }}</h1>



@include('layouts.preview')

@stop
