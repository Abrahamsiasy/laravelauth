@extends('layouts.app')

@section('content')

<div class="container">
<h1>Edit page</h1>
<a class="btn btn-primary" href="/posts">back</a>

<h1></h1>
    <form method="POST" action="/posts/{{$post->id}}">
    @method('PUT')
    @csrf
        <div class="form-group">
            <label for="Title">Post TItle</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Post Title" value="{{$post->title}}"> 
        </div>
        <div class="form-group">
            <label for="cCatagory">Post Catagory</label>
            <input type="text" class="form-control" name="catagory" id="catagory" placeholder="Post Catagory" value="{{$post->catagory}}"> 
        </div>
        <div class="form-group">
            <label for="Content">Post COntent</label>
            <textarea name="content" id="content" cols="30" rows="5" class="form-control" placeholder="Post COntent" >{{$post->content}}</textarea>
        </div>
        <button class="btn btn-primary">Update</button>

        <form action="/posts/{{$post->id}}">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">DElete</button>

        </form>

    </form>
    </form>

    
</div>
@endsection

