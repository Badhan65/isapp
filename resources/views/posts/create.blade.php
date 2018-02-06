@extends('layouts.app')

@section('content')
    <h1>Post Create</h1>
    {!! Form::open(['action'=>'PostsController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title','title')}}
        {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body','body')}}
        {{Form::textarea('body','',['id'=>'article-ckeditor', 'class'=>'form-control','placeholder'=>'body test'])}}
    </div>
    <div class="form-group">
        {{Form::file('cover_image')}}
    </div>
    {{Form::submit('submit',['class'=>'btn btn-primary'])}}

    {!! Form::close() !!}
@endsection