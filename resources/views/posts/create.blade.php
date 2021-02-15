@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '',['class'=> 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
<<<<<<< HEAD
            {{Form::textarea('body', '',['class'=> 'form-control','id'=>'body', 'placeholder' => 'Post here..'])}}
        </div>
        {{Form::submit('Post', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection
=======
            {{Form::textarea('body', '',['class'=> 'form-control', 'placeholder' => 'Post here..'])}}
        </div>
        {{Form::submit('Post', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
                 
@endsection
>>>>>>> 1fe1cb0c6b04082d0da50d56109433277bdb1235
