@extends('layouts.page')

@section('title', $list->name)

@section('content')
  <h1>{{ $list->name }}</h1>
  <ul>
  @foreach ($items as $item)
  <li>
    <label>
      <input type="checkbox">
      {{ $item->description }}
    </label>
  </li>
  @endforeach
  </ul>
@endsection
