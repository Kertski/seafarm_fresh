@extends('layouts.admin')

@section('title', "Blogs")

@section('content')

<div class="card">
    <div class="card-header card_name_admin">
        <h4>Write a Blog</h4>
    </div>
    <div class="card-body">
        <form action="{{ url('insert-blog') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12 pt-3">
                <label for="">BLOG TITLE</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="col-md-12 pt-3">
                <label for="">DESCRIPTION</label>
                <textarea name="small_description" id="" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="col-md-6 pt-3">
                <label for="">SLUG</label>
                <input type="text" name="slug" class="form-control">
            </div>
            <div class="col-md-6 pt-3">
                <label for="">ACTIVE</label>
                <input type="checkbox" name="status">
            </div>
            <div class="col-md-6 pt-3">
                <label for="">CONTENT</label>
                <textarea name="content" id="" cols="30" rows="40" class="form-control"></textarea>
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