@extends('layout')

@section('content')

<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>

<div class="card push-top">
  <div class="card-header">
    Sign In User
  </div>

  <div class="card-body">
    @if ($errors->any())
        <div class="alert alert-danger">
            <h6>{{$errors->first()}}</h6>
        </div><br />
    @endif
      <form method="post" action="{{ route('auth') }}">
          <div class="form-group">
              @csrf
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password"/>
          </div>
          <button type="submit" class="btn btn-block btn-success">Sign In</button>
          <a href="/login/github" class="btn btn-block btn-info">Sign In With GitHub</a>
      </form>
  </div>
</div>
@endsection