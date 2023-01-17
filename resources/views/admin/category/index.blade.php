@extends('layouts.admin')

@section('content')
    <div class='card'>
        <div class="card-header card_name_admin">
            <h4>CATEGORY</h4>
        </div>
        <br>
        <div  class='card-body'>
            <table class="table table-striped">
                <thead>
                    <tr class="column_name_admin">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($category as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td class="category_name">{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        @if($item->status == '1')
                            <td class="text-success">Active</td>  
                        @elseif($item->status == '0')
                            <td class="text-danger">Inactive</td>  
                        @endif
                        <td>
                            <a href=" {{ url('edit-category/'.$item->id) }}" class="btn btn-primary">Edit</a>
                            {{-- <a href=" {{ url('delete-category/'.$item->id) }}" class="btn btn-danger">Delete</a> --}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection