@extends('layout/main')

@section('container')
@foreach ($posts as $post)
    <a href="/posts/{{ $post['slug'] }}"><h2>{{ $post["title"] }}</h2></a>
    <h5>{{ $post["author"] }}</h5>
    <p>{{ $post["body"] }}</p>
@endforeach
    
@endsection
