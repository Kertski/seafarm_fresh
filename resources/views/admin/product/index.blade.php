@extends('layouts.admin')

@section('content')
    <div class='card'>
        <div class="card-header card_name_admin">
            <h4>PRODUCT</h4>
        </div>
        <br>
        <div  class='card-body'>
            <table class="table table-striped">
                <thead>
                    <tr class="column_name_admin">
                        <th>ID</th>
                        <th>Category</th>
                        <th>Name</th>
                        <th>Selling Price</th>
                        <th>Status</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $item)
                    <tr>
                        <td class="id_text">{{ $item->id }}</td>
                        <td>{{ $item->category->name }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->selling_price }}</td>
                        @if($item->status == '1')
                            <td class="text-success">Active</td>  
                        @elseif($item->status == '0')
                            <td class="text-danger">Inactive</td>  
                        @endif
                        <td>
                            <img src="{{ asset('assets/uploads/products/'.$item->image) }}" alt="Image Here" class="cate_image"> 
                            {{ $item->image }}
                        </td>
                        <td>
                            <a href=" {{ url('edit-product/'.$item->id) }}" class="btn btn-primary">Edit</a>
                            <a href=" {{ url('delete-category/'.$item->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection