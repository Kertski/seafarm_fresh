@extends('layouts.admin')

@section('content')
    <div class='card'>
        <div  class='card-header edit_product_header'>
            <h4>
                Update  Product
            </h4>
        </div>
        <div  class='card-body'>
            <form action="{{ url('update-product/'.$products->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="">Category</label>
                        <select class="form-select form-control">
                            <option value="{{ $products->cat_id }}">{{ $products->category->name }}</option>          
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $products->name }}"/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Slug</label>
                        <input type="text" class="form-control" name="slug" value="{{ $products->slug }}"/>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Small Description</label>
                        <textarea name="small_description" row="3" class="form-control">{{ $products->small_description }}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Description</label>
                        <textarea name="description" row="3" class="form-control">{{ $products->description }}</textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Original Price</label>
                        <input type= "number" class="form-control" name="original_price" value="{{ $products->original_price }}"/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Selling Price</label>
                        <input type= "number" class="form-control" name="selling_price" value="{{ $products->selling_price }}"/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Tax</label>
                        <input type= "number" class="form-control" name="tax" value="{{ $products->tax }}"/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Active</label>
                        <input type= "checkbox" name="status" {{ $products->status == "1" ? 'checked' : ''}}/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Favorite</label>
                        <input type="checkbox" name="favorite" {{ $products->favorite== "1" ? 'checked' : ''}}/>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Title</label>
                        <input type="text" name="meta_title" class="form-control" value="{{ $products->meta_title }}"/>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Keywords</label>
                        <textarea name="meta_keywords" row="3" class="form-control">{{ $products->meta_keywords }}</textarea>
                    </div>
                    <div class="col-md-12">
                        <label for="">Meta Description</label>
                        <textarea type="text" name="meta_descript" class="form-control">{{ $products->meta_descript}}</textarea>
                    </div>
                    <div class="col-md-12">
                        @if($products->image)
                            <img src="{{ asset('assets/uploads/products/'.$products->image) }}" alt="Product Image" width="300px"/>
                        @endif  
                    </div>                  
                    <div class="col-md-12">
                        <input type="file" name="image" class="form-control">
                    </div class="col-md-12">
                        <button type="submit" class="btn btn-primary m-3">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection