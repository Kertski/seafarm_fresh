@extends('layouts.front')

@section('title')
    Checkout
@endsection

@section('content')
    <div class="container mt-5">
        <form action="{{ url('place-order') }}" method="POST">
        {{ csrf_field() }}
        @method('POST')
        <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">
                        <h6>Basic Details</h6>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">First Name</label>
                                <input type="text" class="form-control first_name" value="{{ Auth::user()->first_name }}" name="first_name" placeholder="Enter First Name">
                                <span id="firstname_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Last Name</label>
                                <input type="text" class="form-control last_name" value="{{ Auth::user()->last_name }}" name="last_name" placeholder="Enter Last Name">
                                <span id="lastname_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Email</label>
                                <input type="email" class="form-control email" value="{{ Auth::user()->email }}" name="email" placeholder="Enter Email">
                                <span id="email_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Contact Number</label>
                                <input type="text" class="form-control phone" value="{{ Auth::user()->phone }}" name="phone" placeholder="Enter Contact Number">
                                <span id="phone_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Address 1</label>
                                <input type="text" class="form-control address_1" value="{{ Auth::user()->address_1 }}" name="address_1" placeholder="Enter Address 1">
                                <span id="address_1_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Address 2</label>
                                <input type="text" class="form-control address_2" value="{{ Auth::user()->address_2 }}" name="address_2" placeholder="Enter Address 2">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">City</label>
                                <input type="text" class="form-control city" value="{{ Auth::user()->city }}" name="city" placeholder="Enter City">
                                <span id="city_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Province</label>
                                <input type="text" class="form-control province" value="{{ Auth::user()->province }}" name="province" placeholder="Enter Provice">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Zip Code</label>
                                <input type="number" class="form-control zip_code" value="{{ Auth::user()->zip_code }}" name="zip_code" placeholder="Enter Provice">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <h6>Order Details</h6>
                        <hr>
                        <thead>
                            <th>Name</th>
                            <th>Qty</th>
                            <th>Price</th>                        
                        </thead>
                        <table class="table table-striped table-bordered">
                            <tbody>
                                @php $total = 0; @endphp
                                @foreach ($cartitems as $item)
                                    <tr>
                                        <td>{{ $item->products->name }} </td> 
                                        <td>{{ $item->prod_qty }}</td>
                                        <td>{{ $item->products->selling_price }}</td>                                       
                                    </tr>
                                @php $total += $item->products->selling_price * $item->prod_qty ; @endphp                                 
                                @endforeach
                            </tbody>
                        </table>
                        <h6>{{ $total }}</h6>
                        <hr>
                        <button class="btn btn-primary float-end paypal-button" type="submit" name="payment_mode" value="Cash on Delivery">Place Order (COD)</button>
                        <div id="paypal-button-container"></div>
                        
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>

@endsection

@section('scripts')
<script src="https://www.paypal.com/sdk/js?client-id=AQjtLoihkxmzC9bXrbmC8Z20VTFy7GKA_XC6TC8kqLcWT_-G4_VbVe7nvOwTeF04gf1n0Wi4FxY849lv&currency=PHP"></script>
<script>
    paypal.Buttons({
      // Sets up the transaction when a payment button is clicked
      createOrder: (data, actions) => {
        return actions.order.create({
          purchase_units: [{
            amount: {
              value: '{{ $total }}' // Can also reference a variable or function
            }
          }]
        });
      },
      // Finalize the transaction after payer approval
      onApprove: (data, actions) => {
        return actions.order.capture().then(function(orderData) {
          // Successful capture! For dev/demo purposes:
          console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
          const transaction = orderData.purchase_units[0].payments.captures[0];
          const transaction_id = orderData.id[0];
          // alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
          
          var firstname = $('.first_name').val();
          var lastname =  $('.last_name').val();
          var email =  $('.email').val();
          var phone =  $('.phone').val();
          var address_1 =  $('.address_1').val();
          var address_2 =  $('.address_2').val();
          var city =  $('.city').val();
          var province =  $('.province').val();
          var zip_code =  $('.zip_code').val();

          $.ajax({

            method: "POST",
            url: "/place-order",
            data: {
                'first_name':firstname,
                'last_name':lastname,
                'email':email,
                'phone':phone,
                'address_1':address_1,
                'address_2':address_2,
                'city':city,
                'province':province,
                'zip_code':zip_code,
                'payment_mode':"Paid by Paypal",
                'payment_id': orderData.id,
            },
            success: function (response) {
                swal(response.status)
                .then((value) => {
                    window.location.href = "/my-orders"
                });    
            }
            });

        });
      }
    }).render('#paypal-button-container');
  </script>
  
  

@endsection