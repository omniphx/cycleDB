@extends('layouts.default')

@section('title')
<title>{{ $subcategory->name }} products</title>
@stop

{{-- Content --}}
@section('container')

<h1>{{ $subcategory->name }}</h1>

@include('layouts.preview')

@stop
