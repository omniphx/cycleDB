@extends('layouts.default')

@section('title')
<title>Subcategories</title>
@stop

{{-- Content --}}
@section('container')

<ul>
    @foreach ($subcategories as $subcategory)
    <li>{{ $subcategory->name }}</li>
    @endforeach
</ul>

@stop
