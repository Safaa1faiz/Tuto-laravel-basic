
@extends('base')
@section('title', 'Accueil du blog')
@section('content')
    <h1>My Blog</h1>
    {{-- @dump($posts) --}}

    @foreach($posts as $post)
 
        <h2>{{$post->title}}</h2>

<p>
      {{$post->content}}
</p>
<p> 
    <a href="{{ route('blog.show',['slug' => $post->slug , 'id'=> $post->id ]) }}"  class="btn btn-primary"> lire la suite</a>
</p>

    @endforeach
    {{$posts->links()}}


    {{-- @if($posts->count() > 0)
    <ul>
        @foreach($posts as $post)
            <li>
                <a href="{{ route('blog.show', ['slug' => $post->slug, 'id' => $post->id]) }}">
                    {{ $post->title }}
                </a>
            </li>
        @endforeach
    </ul>
    {{ $posts->links() }} <!-- Pagination links -->
@else
    <p>No posts found.</p>
@endif --}}
    @dump(['safaa is supercalifragilisticexpialidocious'])
{{-- write PHP code directly within your Blade views --}}
@php
    $demo = 'HUSSS';
@endphp
@if(true)
<?="Safaa<strong>faiz</strong>" ?>
@else
    {{-- display it as it is  --}}
<p>{{ "Texte" }}</p>  

<?= "Texte" ?>
@endif






@endsection
