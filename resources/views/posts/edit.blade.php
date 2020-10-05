@extends('layout')

@section('title', 'Posts')

@section('content')

<div class="card push-top">
    <div class="card-header">
        Edit & Update
    </div>

    <div class="card-body">
        <form method="post" action="{{ route('posts.update', $post->id) }}">
            <div class="form-group @error('title') has-error @enderror">
                @csrf
                @method('PATCH')
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" value="{{ $post->title }}"/>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group @error('body') has-error @enderror">
                <label for="body">Body</label>
                <textarea class="form-control" rows="3" name="body"> {{ $post->body }}</textarea>
                @error('body')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-block btn-danger">Update Post</button>
        </form>
    </div>
</div>
@endsection