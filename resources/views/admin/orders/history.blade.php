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
                                <h4>Order History</h4>
                                <a href="{{ url('orders') }}" class="btn btn-warning float-end">New Orders</a>                            
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
                                                    <td class="{{ $item->status == '4' ? 'text-success' : 'text-danger' }}">{{ $item->status == '4' ? 'Completed' : 'Cancelled' }}</td>
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