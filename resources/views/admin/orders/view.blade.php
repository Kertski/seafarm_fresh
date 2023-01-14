@extends('layouts.front')

@section('title')
    My Orders
@endsection

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Orders</h4>
                        <a href="{{ url('orders') }}" class="btn btn-warning">Back</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Shipping Details</h4>
                                <label for="">First Name</label>
                                <div class="border p-2"> {{ $orders->first_name }} </div>
                                <label for="">Last Name</label>
                                <div class="border p-2"> {{ $orders->last_name }} </div>
                                <label for="">Email</label>
                                <div class="border p-2"> {{ $orders->email }} </div>
                                <label for="">Contact Number</label>
                                <div class="border p-2"> {{ $orders->phone }} </div>
                                <label for="">Shipping Address</label>
                                <div class="border p-2"> 
                                    {{ $orders->address_1 }}, 
                                    {{ $orders->address_2 }},
                                    {{ $orders->address_city }},
                                    {{ $orders->address_province }},
                                    {{ $orders->zip_code }},
                                </div>
                                <label for="">Payment Method</label>
                                <div class="border p-2"> {{ $orders->payment_mode }} </div>
                            </div>
                            <div class="col-md-6">
                                <h4>Order Details</h4>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Image</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders->orderItems as $item) 
                                        <tr>
                                            <td>{{ $item->products->name }}</td> 
                                            <td>{{ $item->qty }}</td> 
                                            <td>{{ $item->price }}</td>                        
                                            <td>
                                                <img src="{{ asset('assets/uploads/products/'.$item->products->image) }}" alt="Image Here" height="50px">{{ $item->products->image }}
                                            </td>
                                        </tr> 
                                        @endforeach                        
                                    </tbody>
                                </table>
                                <h4>Total: {{ $orders->total_price }}</h4>
                                
                                <label for="">Order Status</label>
                                <form action="{{ url('update-order/'.$orders->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <select class="form-select" name="order-status">
                                        <option {{ $orders->status == '0' ? 'selected': '' }} value="0">Pending</option>
                                        <option {{ $orders->status == '1' ? 'selected': '' }} value="1">Completed</option>
                                    </select>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection