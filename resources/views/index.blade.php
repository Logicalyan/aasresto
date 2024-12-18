@extends('layouts.app')


@if (Auth::user())
    @section('title', 'Home')

    @section('content')
    @include('components.navbar')
    @include('components.sidebar')
    @include('components.main')

    @endsection
@endif

@section('title', 'Landing Page')

@section('content')
@include('guest.components.sidebar')
@include('guest.components.navbar')
@include('guest.components.main')

@endsection
