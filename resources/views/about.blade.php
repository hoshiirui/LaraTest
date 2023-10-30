@extends('layout.main')

@section('container')
    <h1>{{ $name }}</h1>
    <h1>@php echo $email; @endphp</h1>
    <img src="img/<?php echo $image; ?>" alt="{{ $email }}">
@endsection
