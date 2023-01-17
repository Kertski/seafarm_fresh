@extends('layouts.front')

@section('title')
    My Cart
@endsection

@section('content')

    <div class="py-3 mb-4 shadow-sm bg-warning border-top">
        <div class="container">
            <h6 class="mb-8"><a href="{{ url('/')}}" >Home</a> / Cart </h6>
        </div>
    </div>

    <div class="container my-5">
        <div class="card shadow cartitems">
            @if($cartitems->count()>0)
            <div class="card-body">
                @php $total = 0; @endphp
                @foreach ($cartitems as $item)
                <div class="row product_data">
                    <div class="col-md-2">
                        <img src="{{ asset('assets/uploads/products/'.$item->products->image) }}" alt="image here" height="70px">
                    </div>
                    <div class="col-md-3">
                        <h3>{{$item->products->name}}</h3>
                    </div>
                    <div class="col-md-3">
                        
                        <h3>Php {{$item->products->selling_price * $item->prod_qty}}</h3>
                    </div>
                    <div class="col-md-3">
                        <input type="hidden" class="prod_id" value="{{ $item->prod_id }}">
                        <label for="Quantity">Quantity</label>
                        <div class="input-group text-center mb-3" style="width: 130px">
                            <span class="input-group-text changeQuantity decrement-btn">-</span>
                            <input type="text" name="quantity" class="form-control qty_input text-center" value="{{$item->prod_qty}}"/>
                            <span class="input-group-text changeQuantity increment-btn">+</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-danger mt-4 remove-cart-item"><i class="fa fa-trash"></i> Remove</button>
                    </div>
                </div>
                @php $total += $item->products->selling_price * $item->prod_qty ; @endphp
                @endforeach
            </div>
            <div class="card-footer">
                <h6>Total Price: Php {{ $total }}</h6>
                <a href="{{url('checkout')}}"class="btn btn-success">Proceed to Checkout</a>
            </div>
            @else
                <div class="card-body text-center">
                    <h2> Cart is Empty </h2>
                    <a href="{{ url('category') }}" class="btn btn-outline-primary float-end"> Shop Now </a>
                </div>
            @endif
        </div>
    </div>
@endsection 