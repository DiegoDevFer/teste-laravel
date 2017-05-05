@extends('template')
@section('content')
    <h1>Blog Admin:</h1>

    {!! Form::open(['route'=>'admin.posts.store','method'=>'post']) !!}


        <div class="form-group">
            {!! Form::label('title','Title:')!!}
            {!! Form::text('title', null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('content','Content:') !!}
            {!! Form::textarea('content', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Create post',['class'=>'btn btn-primary']) !!}
        </div>

    {!! Form::close() !!}

@stop