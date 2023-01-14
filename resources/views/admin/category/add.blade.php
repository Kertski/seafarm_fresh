@extends('layouts.admin')

@section('content')
    <div class='card'>
        <div  class='card-header'>
            <h4>
                Add Category
            </h4>
        </div>
        <div  class='card-body'>
            <form action="{{ url('insert-category') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name"/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Slug</label>
                        <input type="text" class="form-control" name="slug"/>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Description</label>
                        <textarea name="description" row="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Status</label>
                        <input type= "checkbox" name="status"/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Favorites</label>
                        <input type="checkbox" name="favorites"/>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Title</label>
                        <input type="text" name="meta_title" class="form-control"/>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Keywords</label>
                        <textarea name="meta_keywords" row="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12">
                        <label for="">Meta Description</label>
                        <input type="text" name="meta_descript" class="form-control"/>
                    </div>
                    <div class="col-md-12">
                        <input type="file" name="image" class="form-control"></input>
                    </div>
                    </div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection