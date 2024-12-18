@extends('layouts.app')
@section('title', 'Detail Menu')


@section('content')

    @foreach ($categories as $category)
        <p>{{ $category->name }}</p>

        @foreach ($category->menu as $item)
            <p>{{ $item->name }}</p>
            <p>{{ $item->price }}</p>
            <p>{{ $item->stock }}</p>
        @endforeach
    @endforeach


@endsection
