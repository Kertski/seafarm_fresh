@extends('layouts.front')

@section('title', "Write a Review")

@section('content')
<div class="container">
    <div class="row">
        <div class="com-md-12">
            <div class="card review-card">
                <div class="card-body">
                    @if($verified_purchase->count() > 0)
                        <h5>Write a Review for Seafarm Fresh {{ $product->name }} :)</h5>
                        <form action="{{ url('/add-review') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <textarea class="form-control" name="user_review" rows="5" placeholder="Write a review"></textarea>
                            <button class="btn btn-rounded submit_review_btn" type="submit">Submit Review</button>
                        </form>
                    @else
                    <div class="alert alert-danger">
                        <h5>You are not eligible to review this product</h5>
                        <a href="{{ url('/')}} " class="btn btn-primary">Go to homepage</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
