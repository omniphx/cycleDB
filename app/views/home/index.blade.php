@extends('layouts.default')

@section('title')
<title>Home</title>
@stop

{{-- Content --}}
@section('container')

    @foreach(array_chunk($categories->all(), 3) as $row)
        <div class="row">
            @foreach($row as $category)
            <div class="col-md-4">
                <h2>{{ $category->name }}</h2>
                <ul>
                    <li>{{$category->products()->first()->name}}</li>
                </ul>
            </div>

            @endforeach
        </div>
    @endforeach

@stop
