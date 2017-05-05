@extends('template')
@section('content')
    <h1>Blog Admin:</h1>

    <table class="table">
        <tr>
            <th>Id</th>
            <th>Titulo</th>
            <th>Ação</th>
        </tr>

        @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td></td>
        </tr>

        @endforeach

    </table>
    {!! $posts->render() !!}

@stop