@extends('layouts.admin')

@section('content')
    <div class='card'>
        <div  class='card-header add_category_header'>
            <h4>
                Add Product
            </h4>
        </div>
        <div  class='card-body'>
            <form action="{{ url('insert-product') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="">Category</label>
                        <select class="form-select" name="cat_id" aria-label="Default select example">
                            <option value="">Select a Category</option>
                            @foreach ($category as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach               
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">NAME</label>
                        <input type="text" class="form-control" name="name"/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">SLUG</label>
                        <input type="text" class="form-control" name="slug"/>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">SMALL DESCRIPTION</label>
                        <textarea name="small_description" row="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">DESCRIPTION</label>
                        <textarea name="description" row="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">ORIGINAL PRICE</label>
                        <input type= "number" class="form-control" name="original_price"/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">SELLING PRICE</label>
                        <input type= "number" class="form-control" name="selling_price"/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">TAX</label>
                        <input type= "number" class="form-control" name="tax"/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">STATUS</label>
                        <input type= "checkbox" name="status"/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">FAVORITE</label>
                        <input type="checkbox" name="favorite"/>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">META TITLE</label>
                        <input type="text" name="meta_title" class="form-control"/>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">META KEYWORDS</label>
                        <textarea name="meta_keywords" row="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12">
                        <label for="">META DESCRIPTION</label>
                        <input type="text" name="meta_descript" class="form-control"/>
                    </div>
                    <div class="col-md-12">
                        <input type="file" name="image" class="form-control">
                    </div>
                    </div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection