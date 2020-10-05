@extends('layout')

@section('title', 'Posts')

@section('content')

<div class="push-top">
    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}  
      </div><br />
    @endif
    <div class="row mb-2">
        <div class="col-md-12 text-right">
            <a href="{{ route('posts.create')}}" class="btn btn-primary btn-sm">Add Post</a>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr class="table-warning">
                <td>ID</td>
                <td>Title</td>
                <td>Created At</td>
                <td>Udated At</td>
                <td>Status</td>
                <td class="text-center">Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td><a href="{{ route('posts.show', $post->id)}}">{{$post->title}}</a></td>
                <td>{{date('Y-m-d H:i:s', strtotime($post->created_at))}}</td>
                <td>{{date('Y-m-d H:i:s', strtotime($post->updated_at))}}</td>
                <td>{{$post->status}}</td>
                <td class="text-center">
                    <a href="{{ route('posts.edit', $post->id)}}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('posts.destroy', $post->id)}}" method="post" style="display: inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection