@extends('layouts.front')

@section('title')
    My Orders
@endsection

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card view-order-card">
                    <div class="card-header">
                        <h4>Orders</h4>
                        <a href="{{ url('my-orders') }}" class="btn btn-warning">Back</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Shipping Details</h4>
                                <label for="">STATUS:</label>
                                @if ($orders->status == '0')
                                <div class="py-2">Pending</div>
                                @elseif($orders->status == '1')
                                <div class="py-2">To Ship:</div>
                                @elseif($orders->status == '2')
                                <div class="py-2">On Delivery</div>
                                @elseif($orders->status == '3')
                                <div class="py-2">Received</div>
                                @elseif($orders->status == '4')
                                <div class="text-success py-2">Completed</div>
                                @elseif($orders->status == '5')
                                <div class="text-danger py-2">Cancelled</div>
                                @endif
                                <label for="">NAME:</label>
                                <div class="py-2"> {{ $orders->first_name }} {{ $orders->last_name }} </div>
                                <label for="">EMAIL:</label>
                                <div class="py-2"> {{ $orders->email }} </div>
                                <label for="">CONTACT NUMBER:</label>
                                <div class="py-2"> {{ $orders->phone }} </div>
                                <label for="">SHIPPING ADDRESS:</label>
                                <div class="py-2"> 
                                    {{ $orders->address_1 }}, 
                                    {{ $orders->address_2 }},
                                    {{ $orders->address_city }},
                                    {{ $orders->address_province }},
                                    {{ $orders->zip_code }},
                                </div>
                                <label for="">PAYMENT METHOD:</label>
                                <div class="py-2"> {{ $orders->payment_mode }} </div>
                            </div>
                            <div class="col-md-6">
                                <h4>Order Details</h4>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Qty</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders->orderItems as $item) 
                                        <tr>
                                            <td>
                                                <img src="{{ asset('assets/uploads/products/'.$item->products->image) }}" alt="Image Here" height="50px">
                                                {{ $item->products->name }} 
                                            </td> 
                                            <td>{{ $item->qty }}</td> 
                                            <td>₱{{ $item->price }}.00</td>                        
                                        </tr> 
                                        @endforeach                        
                                    </tbody>
                                </table>
                                <h4>Total: ₱{{ $orders->total_price }}.00</h4>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection