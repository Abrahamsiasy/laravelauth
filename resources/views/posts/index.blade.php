@extends('layouts.app')

@section('content')
<div class="container mx-auto-">
<h1>basic laravel 8 crude opration</h1>
<a class="btn btn-primary" href="/posts/create">Add Post</a>

<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Catagory</th>
        <th scope="col">Content</th>
      </tr>
    </thead>
    @foreach($posts as $post)
    <tbody>
      <tr>
        <th scope="row">{{$post->id}}</th>
        <td> <a href="/posts/{{$post->id}}/edit">{{$post->title}}</a></td>
        <td>{{$post->catagory}}</td>
        <td>{{$post->content}}</td>
    </tbody>
    @endforeach
  </table>
</div>
</div>
@endsection