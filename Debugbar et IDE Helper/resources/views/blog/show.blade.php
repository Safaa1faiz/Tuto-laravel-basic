
@extends('base')
@section('title', $post->title)
@section('content')
    {{-- @dump($posts) --}}

 
        <h1>{{$post->title}}</h1>

<p>
      {{$post->content}}
</p>



@endsection
