@extends('layouts.app')

@section('content')

            <div class="well">
                <a href="/posts" class="btn btn-default">Go Back</a>
                <h1>{{$post->title}}</h1>
                <img style="width: 100%" src="/storage/cover_image/{{$post->cover_image}}" alt="">
                <br>
                <div>
                    {!! $post->body !!}
                </div>
                <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                <br>
                @if(!Auth::guest())
                    @if(Auth::user()->id == $post->user_id)
                        <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
                        {!! Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'pull-right']) !!}
                            {{ Form::hidden('_method','DELETE')}}
                            {{Form::submit('DELETE',['class'=>'btn btn-danger'])}}
                        {!! Form::close() !!}
                    @endif
                @endif
            </div>

@endsection