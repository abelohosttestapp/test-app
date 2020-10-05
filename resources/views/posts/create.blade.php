@extends('layout')

@section('title', 'Posts')

@section('content')

<div class="card push-top">
    <div class="card-header">
        Add Post
    </div>

    <div class="card-body">
        <form method="post" action="{{ route('posts.store') }}">
            <div class="form-group @error('title') has-error @enderror">
                @csrf
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title"/>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group @error('body') has-error @enderror">
                <label for="body">Body</label>
                <textarea class="form-control" rows="3" name="body"></textarea>
                @error('body')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-block btn-danger">Create Post</button>
        </form>
    </div>
</div>
@endsection