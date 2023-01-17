@extends('layouts.front')

@section('title', $blog->title)

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="blog-image-col">
            <img src="{{ asset('assets/uploads/blog/'.$blog->image) }}" alt="Blog Image" class="float-start me-4 mb-1">
        </div>
        <div class="pb-2">
            <h2 class="">{{ $blog->title }}</h2>
        </div>     
        <div class="text-justify text-indent">
            <p class="content-text text-justify text-indent">{!! nl2br(e($blog->content)) !!} </p>         
        </div>
        </div>
    </div>
</div>

@endsection