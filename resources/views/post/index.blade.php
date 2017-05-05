@extends('template')
@section('content')
    <h1>Lance Certo:</h1>

    @foreach($posts as $post)
    <ul>
        <h3><b>Título: </b>{{$post->title}}</h3>
            <p>{{$post->content}}</p>
            <i>Date: ({{$post->created_at}})</i>
        <br/>
        <b>Tags:</b>
        @foreach($post->tags as $tag)
            <i>{{$tag->name}}/</i>
        @endforeach

            <b><h2>Comments:</h2></b>
            @foreach($post->comments as $comments)
                <b>{{$comments->name}} diz: </b>
                <p>{{$comments->comment}}</p>
            @endforeach
        <hr>
    </ul>
    @endforeach
    @stop
