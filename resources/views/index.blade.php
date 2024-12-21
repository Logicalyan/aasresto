@extends('layouts.app')


@auth

@section('title', 'Home')

@section('content')
@include('components.navbar')
@include('components.sidebar')
@include('components.main')

@endsection
@endauth


@section('title', 'Guest Home')

@section('content')
@include('guest.components.sidebar')
@include('guest.components.navbar')
@include('guest.components.main')

@endsection
