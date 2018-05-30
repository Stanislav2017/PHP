@extends('admin-index')

@section('title', 'Add post')

@section('content')
        {!! Form::model($posts, array('route' => array('admin-panel.update', $posts->id), 'method'=> 'PUT')) !!}
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
            {{Form::submit('Save post', ['class' => 'btn btn-outline-secondary btn-block'])}}
        </div>
        {!! Form::close() !!}
@endsection