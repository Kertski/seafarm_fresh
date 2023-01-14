@extends('layouts.admin')

@section('content')
    <div class='card'>
        <div class="card-header">
            <h4>Registered Users</h4>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div  class='card-body'>
                        <h3>User Details
                            <a href="{{ url('users') }}" class="btn btn-primary float-right">Back</a>
                        </h3>
                        <hr>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Role</label>
                                <div class="p-2 border">{{ $users->role_as == '1' ? 'User' : 'Admin'}}</div>
                            </div>
                            <div class="col-md-4">
                                <label for="">Name</label>
                                <div class="p-2 border">{{ $users->first_name == NULL ? "N/A" : $users->first_name.' '.$users->last_name}}</div>
                            </div>
                            <div class="col-md-4">
                                <label for="">Email</label>
                                <div class="p-2 border">{{ $users->email == NULL ? "N/A" : $users->email }}</div>
                            </div>
                            <div class="col-md-4">
                                <label for="">Contact Number</label>
                                <div class="p-2 border">{{ $users->phone == NULL ? "N/A" : $users->phone}}</div>
                            </div>
                            <div class="col-md-4">
                                <label for="">Address 1</label>
                                <div class="p-2 border">{{ $users->address_1 == NULL ? "N/A" : $users->address_1 }}</div>
                            </div>
                            <div class="col-md-4">
                                <label for="">Address 2</label>
                                <div class="p-2 border">{{ $users->address_2 == NULL ? "N/A" : $users->address_2 }}</div>
                            </div>
                            <div class="col-md-4">
                                <label for="">City</label>
                                <div class="p-2 border">{{ $users->city == NULL ? "N/A" : $users->city }}</div>
                            </div>
                            <div class="col-md-4">
                                <label for="">Province</label>
                                <div class="p-2 border">{{ $users->province == NULL ? "N/A" : $users->province }}</div>
                            </div>
                            <div class="col-md-4">
                                <label for="">Zip Code</label>
                                <div class="p-2 border">{{ $users->zip_code == NULL ? "N/A" : $users->zip_code }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
@endsection