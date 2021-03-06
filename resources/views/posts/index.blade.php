@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
        @if (count($posts) > 0)
            @foreach ($posts as $post)
                <div class="card card-body mb-3">
                <h3><a href= "/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <small>Created on {{$post->created_at}}</small>
                </div>
            @endforeach
            {{$posts->links()}}
            
            
        @else
           <p>NO POSTS FOUND</p> 
        @endif          
@endsection