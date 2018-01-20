@extends('layouts.page')

@section('title', 'Lists')

@section('content')

@foreach ($lists as $list)
  <article class="list">
  <header>
    <h2>{{ $list->name }}</h2>
  </header>
  <ul>
  @foreach ($list->items as $item)
    <li>
      <label>
        <input type="checkbox">
        {{ $item->description }}
      </label>
    </li>
  @endforeach
  </ul>
  </article>
  @endforeach

@endsection
