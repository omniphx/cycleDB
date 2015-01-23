@extends('layouts.default')

@section('title')
<title>Home</title>
@stop

{{-- Content --}}
@section('container')

<div ng-controller="AppCtrl">
  <ng-view></ng-view>
</div>

@stop
