@extends('admin-index')

@section('title', 'Create post')

@section('content')
    {!! Form::open(['route' => 'admin-panel.store']) !!}
    <div class="form-group">
            {{Form::label('title', 'Post title')}}
            {{Form::text('title', null, ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
            {{Form::label('body', 'Post body')}}
            {{Form::textarea('body', null, ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
            {{Form::label('url', 'Post url')}}
            {{Form::text('url', null, ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
            {{Form::submit('Save post', ['class' => 'btn btn-primary btn-block'])}}
            <a class="btn btn-info btn-block" href="{{route('admin-panel.index')}}">All posts</a>
    </div>
    {!! Form::close() !!}
@endsection