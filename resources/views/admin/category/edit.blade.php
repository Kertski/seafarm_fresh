@extends('layouts.admin')

@section('content')
    <div class='card'>
        <div  class='card-header edit_category_header'>
            <h4>
                Update Category
            </h4>
        </div>
        <div  class='card-body'>
            <form action="{{ url('update-category/'.$category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">NAME</label>
                        <input type="text" value= "{{ $category->name }}" class="form-control" name="name"/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">SLUG</label>
                        <input type="text"  value= "{{ $category->slug }}" class="form-control" name="slug"/>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">DESCRIPTION</label>
                        <textarea name="description" row="3" class="form-control">{{ $category->description }}</textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">ACTIVE</label>
                        <input type= "checkbox" {{ $category->status == "1" ? "checked" : "" }} name="status" />
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">META TITLE</label>
                        <input type="text" name="meta_title" class="form-control" value= "{{ $category->meta_title }}"/>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">META KEYWORDS</label>
                        <textarea name="meta_keywords" row="3" class="form-control"> {{ $category->meta_keywords }} </textarea>
                    </div>
                    <div class="col-md-12">
                        <label for="">META DESCRIPTION</label>
                        <textarea type="text" name="meta_descript" class="form-control"> {{ $category->meta_descript }} </textarea> 
                    </div>
                    <div class="col-md-12">
                    
                        @if($category->image)
                            <img src="{{ asset('assets/uploads/category/'.$category->image) }}" alt="category image" width="300px"/>
                        @endif
                    </div>
                    <div class="col-md-12">
                        
                        <input type="file" name="image" class="form-control"/>
                    </div>
                    </div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection