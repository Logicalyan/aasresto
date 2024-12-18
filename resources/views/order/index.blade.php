@extends('layouts.app')
@section('title', 'List Order')

@section('content')

@include('components.navbar')
@include('components.sidebar')

<section>

    @foreach ($orders as $item)

    <p>{{ $item->menu->name }}</p>

    @endforeach

</section>
@endsection
