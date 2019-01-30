@extends('template')
@section('content')

<br>

<h1>Create New Post</h1>

<form action="{{ action('PostController@store') }}" method="post">
    {{ csrf_field() }}

    @if ($errors->any())
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            {{ $error }}
        </div>
        @endforeach
    @endif
    <div class="form-group">
        <label class="sr-only" for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="Title" autofocus>
    </div>
    <div class="form-group">
        <label for="post" class="sr-only">Post</label>
        <textarea name="post" id="" cols="30" rows="10" class="form-control" required></textarea>
    </div>
    <div class="form-group">
        <input type="submit" value="Submit" class="btn btn-primary">
    </div>
</form>
@stop
