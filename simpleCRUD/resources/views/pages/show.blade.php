@extends('admin-index')

@section('title', 'All posts')

@section('content')
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Post title</th>
                <th>Post body</th>
                <th>Image url</th>
                <th>created_at</th>
                <th>udated_at</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
            <tr>
                <th scope=row>{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td>{{$post->url}}</td>
                <td>{{$post->created_at}}</td>
                <td>{{$post->created_at}}</td>
                <td><a href="{{route('admin-panel.edit', ['id' => $post->id])}}" class="btn btn-primary">Edit</a></td>
                <td>
                    {!!  Form::open(['method' => 'DELETE', 'route' => ['admin-panel.destroy', $post->id]]) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <div align="center">
            {{$posts->links()}}
        </div>
    </div>
@endsection