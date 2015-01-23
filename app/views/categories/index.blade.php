@extends('layouts.default')

@section('title')
<title>Categories</title>
@stop

{{-- Content --}}
@section('container')

  @foreach(array_chunk($categories->all(), 3) as $row)
    <div class="row">
      @foreach($row as $category)
      <div class="col-md-4">
        <div class="thumbnail">
          <img src="http://placehold.it/300x300" alt="...">
          <div class="caption">
          <a href="{{ route('categories.show', $category->slug) }}">
            <h3>
              {{ StringHelper::upperCase($category->name) }}
            </h3>
          </a>
          <hr>
          <ul class="list-unstyled">
            @foreach($category->subcategories()->get() as $subcategory)
            <li>
              <a href="{{ route('subcategories.show', $subcategory->slug) }}">
                {{ $subcategory->name }}
              </a>
            </li>
            @endforeach
          </ul>
          </div>
        </div>
      </div>

      @endforeach
    </div>
  @endforeach

@stop
