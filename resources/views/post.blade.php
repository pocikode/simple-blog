@extends('template')
@section('content')
<!-- Title -->
<h1 class="mt-4">{{ $post->titlte }}</h1>

<!-- Author -->
<p class="lead">
  by <a href="#">{{ $post->author }}</a>
</p>

<hr>

<!-- Date/Time -->
<p>Posted on January 1, 2018 at 12:00 PM</p>

<hr>

<!-- Preview Image -->
<img class="img-fluid rounded" src="{{ $post->image }}" alt="{{ $post->title }}">

<hr>

<!-- Post Content -->
{{ $post->post }}

<hr>  

@include('component.comment')
@endsection
