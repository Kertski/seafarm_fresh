@extends('layouts.front')

@section('title', $products->name)

@section('content')

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="{{ url('/rate-product')}}" method="POST">
        @csrf
        <input type="hidden" name="product_id" value="{{ $products->id }}">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Rate this Product</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="rating-css">
                <div class="star-icon">
                    @if($user_rating)
                        @for($i = 1; $i<= $user_rating->stars_rated; $i++)
                            <input type="radio" value="{{$i}}" name="product_rating" checked id="rating{{$i}}">
                            <label for="rating{{$i}}" class="fa fa-star"></label>                           
                        @endfor
                        @for($j = $user_rating->stars_rated+1; $j <= 5; $j++)
                            <input type="radio" value="{{$j}}" name="product_rating" id="rating{{$j}}">
                            <label for="rating{{$j}}" class="fa fa-star"></label> 
                        @endfor

                    @else
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
                    @endif
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
      </div>
    </div>
</div>

<div class="py-3 mb-4 shadow-sm border-top product_container">
    <div>
        <h6 class="mb-8 text-white"><a href="{{ url('category')}}" class="text-white">{{ $products->category->name }}</a> / {{ $products->name }}</h6>
    </div>
</div>

<div class="container">
    <div class="card pt-5 product_data">
        <div class="row">
            <div class="col-lg-6">
                <div>
                    <img src="{{ asset('assets/uploads/products/'.$products->image) }}" alt="PRoduct Image" width="100%">
                </div>
                <div>
                    <h2 class="ms-3">{{ $products->name }}</h2>
                    <div class="row">
                        <div class="col">
                        <h6 class="ms-3 before_price text-danger">₱{{ $products->original_price}}.00</h6>
                        </div>
                        <div class="col">
                        <h6 class="ms-3 orig_price font-weight-bolder">₱{{ $products->selling_price}}.00</h6>
                        </div>
                    </div>
                    @php $ratenum = number_format($rating_value) @endphp
                    <div class="rating ms-3 mb-5">
                        @for($i = 1; $i<= $ratenum; $i++)
                            <i class="fa fa-star checked"></i>
                        @endfor
                        @for($j = $ratenum+1; $j <= 5; $j++)
                            <i class="fa fa-star"></i>
                        @endfor
                        
                        <span>{{ $ratings->count() }} {{ $ratings->count() == "1" ? "Rating" : "Ratings" }}</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div>
                    <h3 class="description_name">Description</h3>
                    <p class="mt-3">
                        {!! $products->description !!}
                    </p>
                </div>
                <input type="hidden" value="{{ $products->id }}" class="prod_id">
                <label for="quantity">Quantity</label>
                <div class="input-group text-center mb-3" style="width: 130px">
                    <span class="input-group-text decrement-btn">-</span>
                    <input type="text" name="quantity" class="form-control qty_input text-center" value="1"/>
                    <span class="input-group-text increment-btn">+</span>
                </div>
                    <button type="button" class="btn btn-success addToCartBtn me-3 float-start">Add to Cart <i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                <div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Rate this product
                    </button>
                    <a href="{{ url('add-review/'.$products->slug.'/user-review') }}" class="btn btn-primary">
                         Write a review
                    </a>
                </div>
                @foreach ($reviews as $item)
                <div class="user-review">
                    <label for="">{{$item->user->first_name.' '.$item->user->last_name}}</label>
                    <br>
                    @php 
                        $rating = App\Models\Rating::where('prod_id', $products->id)->where('user_id', $item->user->id)->first();                            
                    @endphp
                    @if($rating)
                    @php $user_rated = $rating->stars_rated  @endphp
                    @for($i = 1; $i<= $user_rated; $i++)
                        <i class="fa fa-star checked"></i>
                    @endfor
                    @for($j = $user_rated+1; $j <= 5; $j++)
                        <i class="fa fa-star"></i>
                    @endfor
                    @endif
                        <small>Reviewed on {{ $item->created_at->format('d M Y')}}</small>
                    <p>
                        {{ $item->user_review }}
                    </p>
                    @if($item->user_id == Auth::id())
                    <a href="{{ url('edit-review/'.$products->slug.'/userreview') }}" class="edit-review-text"> Edit review</a>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection