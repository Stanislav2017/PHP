@extends('admin.admin-index')

@section('title', 'All posts')

@section('content')
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Body</th>
                <th scope="col">Created at</th>
                <th scope="col">Updated at</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
    @foreach($posts as $post)
            <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td>{{$post->created_at}}</td>
                <td>{{$post->updated_at}}</td>
                <td><a href="{{route('admin-panel.edit', $post->id)}}" class="btn btn-primary">Edit</a></td>
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
@endsection