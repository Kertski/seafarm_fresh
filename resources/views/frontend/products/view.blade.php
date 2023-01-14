@extends('layouts.front')

@section('title', $products->name)

@section('content')

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="{{ url('/rate-product')}}" method="POST">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Rate this Product</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="rating-css">
                <div class="star-icon">
                    <input type="radio" value="1" name="product_rating" checked id="rating1">
                    <label for="rating1" class="fa fa-star"></label>
                    <input type="radio" value="2" name="product_rating" id="rating2">
                    <label for="rating2" class="fa fa-star"></label>
                    <input type="radio" value="3" name="product_rating" id="rating3">
                    <label for="rating3" class="fa fa-star"></label>
                    <input type="radio" value="4" name="product_rating" id="rating4">
                    <label for="rating4" class="fa fa-star"></label>
                    <input type="radio" value="5" name="product_rating" id="rating5">
                    <label for="rating5" class="fa fa-star"></label>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Submit</button>
        </div>
        </form>
      </div>
    </div>
  </div>

<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-8"><a href="{{ url('category')}}">{{ $products->category->name }}</a> / {{ $products->name }}</h6>
    </div>
</div>

<div class="container">
    <div class="card shadow product_data">
        <div>
            <img src="{{ asset('assets/uploads/products/'.$products->image) }}" class="w-100" alt="">
        </div>
        <div>
            <h2>{{ $products->name }}></h2>
            <h6>{{ $products->original_price}}</h6>
            <h6>{{ $products->selling_price}}</h6>
        </div>
        <div>
            <p>
                {!! $products->small_description !!}
            </p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Rate this product
            </button>
        </div>
        <div class="row">
            <div class="com-md-3">
                <input type="hidden" value="{{ $products->id }}" class="prod_id">
                <label for="quantity">Quantity</label>
                <div class="input-group text-center mb-3" style="width: 130px">
                    <span class="input-group-text decrement-btn">-</span>
                    <input type="text" name="quantity" class="form-control qty_input text-center" value="1"/>
                    <span class="input-group-text increment-btn">+</span>
                </div>
            </div>
        </div>
        <div>
        <button type="button" class="btn btn-success addToCartBtn me-3 float-start">Add to Cart <i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
        </div>
    </div>
</div>

@endsection