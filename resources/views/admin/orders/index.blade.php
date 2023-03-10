@extends('layouts.admin')

@section('title')
    Orders
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class='card'>
                    <div  class='card-body'>
                        <div class="card">
                            <div class="card-header">
                                <h4>New Orders</h4>
                                <a href="{{ url('order-history') }}" class="btn btn-warning float-end">Order History</a>
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
                                                        @endif
                                                    <td>
                                                        <a href="{{ url('admin/view-order/'.$item->id) }}" class="btn btn-primary">View</a>
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
        </div>
    </div>
    
@endsection