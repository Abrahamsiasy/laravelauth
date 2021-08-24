@extends('layouts.app')

@section('content')

<div class="container">
<a class="btn btn-primary" href="/posts">back</a>

    <form method="POST" action="/posts">
    @csrf
        <div class="form-group">
            <label for="Title">Post TItle</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Post Title"> 
        </div>
        <div class="form-group">
            <label for="cCatagory">Post Catagory</label>
            <input type="text" class="form-control" name="catagory" id="catagory" placeholder="Post Catagory"> 
        </div>
        <div class="form-group">
            <label for="Content">Post COntent</label>
            <textarea name="content" id="content" cols="30" rows="5" class="form-control" placeholder="Post COntent" ></textarea>
        </div>
        <button class="btn btn-primary">Add</button>
    </form>
</div>
@endsection