@extends('layouts.front')

@section('title', "Edit Review")

@section('content')
<div class="container">
    <div class="row">
        <div class="com-md-12">
            <div class="card review-card">
                <div class="card-body">
                        <h5>Edit Review for Seafarm Fresh {{ $review->product->name }}</h5>
                        <form action="{{ url('/update-review') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="review_id" value="{{ $review->id }}">
                            <textarea class="form-control" name="user_review" rows="5" placeholder="Write a review">{{ $review->user_review }}</textarea>
                            <button type="submit" class="btn btn-rounded submit_review_btn mt-2">Update Review</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
