@extends('layouts.front')

@section('title')
    {{ $category->name }}
@endsection

@section('content')

<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-8"><a href="{{ url('category')}}">{{ $category->name }}</a></h6>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <h2 class="category_page_name">{{ $category->name }}</h2>
                @foreach ($products as $prod)
                    <div class="col-md-3 mb-3">
                        <div class="card product-card">
                            <a href="{{ url('category/'.$category->slug.'/'.$prod->slug) }}">
                                <img src="{{ asset('assets/uploads/products/'.$prod->image) }}" alt="Product Image" width="100%">
                                <div class="card-body product_name pb-5">
                                    <h5 class="product_name">{{ $prod->name }}</h5>
                                    <span class="float-start before_price product_price">₱ {{ $prod->selling_price }}.00</span>
                                    <span class="float-end product_price orig_price">₱ {{ $prod->original_price }}.00</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </a>
             @endforeach
        </div>
    </div>
</div>
@endsection 