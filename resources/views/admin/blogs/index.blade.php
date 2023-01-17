@extends('layouts.admin')

@section('title', "Blogs")

@section('content')

<div class="card">
    <div class="card-header card_name_admin">
        <h4>Blog</h4>
    </div>
    <hr>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr class="column_name_admin">
                    <th>ID</th>
                    <th>Title</th>
                    <td>Status</td>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blog as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->title }}</td>
                        <td class="{{ $item->status == "1" ? "text-success" : "text-danger"}}">{{ $item->status == "1" ? "Active" : "Inactive"}}</td>    
                        <td>
                            <img src="{{ asset('assets/uploads/blog/'.$item->image) }}" alt="Image Here" class="blog_image">
                        </td>
                        <td>
                        <a href="{{ url('edit-blog/'.$item->id) }}" class="btn btn-primary">Edit</a>
                        </td >
                    </tr>  
                @endforeach  
            </tbody>
        </table>

    </div>
</div>

@endsection