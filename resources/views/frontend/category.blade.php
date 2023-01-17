@extends('layouts.front')

@section('title')
    Welcome to Seafarm Fresh
@endsection

@section('content')
    <div class="py-5">
        <div class="container">
            <div class="row pt-5">
                <h2 class="categories_page_name">Products</h2>
                    @foreach ($category as $cat)
                        <div class="col-md-3 mb-3">
                            <a href="{{ url('view-category/'.$cat->slug) }}">
                                <div class="card h-100">
                                    <img src="{{ asset('assets/uploads/category/'.$cat->image) }}" alt="Product Image">
                                    <div class="card-body">
                                        <h5>{{ $cat->name }}</h5>
                                    <p>
                                        {{ $cat->description}}
                                    </p>
                                    </div>
                                </div>
                            </a>
                         </div>
                    @endforeach
            </div>
        </div>
    </div>

@endsection