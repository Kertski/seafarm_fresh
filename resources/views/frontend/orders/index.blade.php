@extends('layouts.front')

@section('title')
    My Orders
@endsection

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card my-orders-card">
                    <div class="card-header my-orders-header">
                        <h4 class="my-orders-text">My Orders</h4>
                    </div>
                    <div class="card-body">
                        <div class="table table-bordered">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Order Date</th>
                                        <th>Tracking Number</th>
                                        <th>Total Price</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $item)
                                        <tr>
                                            <td>{{ date('d-m-y', strtotime($item->created_at)) }}</td>
                                            <td>{{ $item->tracking_number}}</td>
                                            <td>{{ $item->total_price }}</td>
                                                @if ($item->status == '0')
                                                    <td>Pending</td>
                                                @elseif($item->status == '1')
                                                    <td>To Ship</td>
                                                @elseif($item->status == '2')
                                                    <td>On Delivery</td>
                                                @elseif($item->status == '3')
                                                    <td>Received</td>
                                                @elseif($item->status == '4')
                                                    <td class="text-success">Completed</td>
                                                @elseif($item->status == '5')
                                                    <td class="text-danger">Cancelled</td>
                                                @endif
                                            <td>
                                                <a href="{{ url('view-orders/'.$item->id) }}" class="btn view-order-btn">View</a>
                                            </td>
                                        </tr>                           
                                    @endforeach                        
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection