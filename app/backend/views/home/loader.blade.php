@extends('layouts.default')

@section('title')
<title>Loader</title>
@stop

{{-- Content --}}
@section('container')

{{ Form::open(array('route' => 'store', 'files' => true)) }}

{{ Form::select('table',[
  'bike'        => 'Bike',
  'brand'       => 'Brand',
  'category'    => 'Category',
  'product'     => 'Product',
  'subcategory' => 'Subcategory']) }}

{{ Form::file('csv') }}

{{ Form::submit('Submit') }}

{{ Form::close() }}

@stop
