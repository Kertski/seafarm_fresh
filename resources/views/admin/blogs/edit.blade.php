@extends('layouts.admin')

@section('title', "Blogs")

@section('content')

<div class="card">
    <div class="card-header edit_blog_header">
        <h4>Edit Blog</h4>
    </div>
    
    <div class="card-body">
        <form action="{{ url('update-blog/'.$blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6 pt-3">
                <label for="">BLOG TITLE</label>
                <input type="text" value="{{ $blog->title }}" name="title" class="form-control">
            </div>
            <div class="col-md-12 pt-3">
                <label for="">DESCRIPTION</label>
                <textarea name="small_description" id="" cols="30" rows="5" class="form-control">{{ $blog->small_description }}</textarea>
            </div>
            <div class="col-md-6 pt-3">
                <label for="">SLUG</label>
                <input type="text" value="{{ $blog->slug }}" name="slug" class="form-control">
            </div>
            <div class="col-md-6 pt-3">
                <label for="">ACTIVE</label>
                <input type="checkbox" {{ $blog->status == "1" ? "checked" : "" }} name="status">
            </div>
            <div class="col-md-6 pt-3">
                <label for="">CONTENT</label>
                <textarea name="content" id="" cols="30" rows="40" class="form-control">{{ $blog->content }}</textarea>
            </div>
            <div class="col-md-12 pt-3">
                @if($blog->image)
                    <img src="{{ asset('assets/uploads/blog/'.$blog->image) }}" alt="Blog Image" width="300px" height="300px">
                @endif
            </div>
            <div class="col-md-12 pt-3">
                <label for="">UPLOAD IMAGE</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="col-md-12 pt-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </form>
    </div>
</div>

@endsection