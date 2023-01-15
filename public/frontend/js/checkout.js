$(document).ready(function () {
    $('.paypal-button').click(function (e) {
        e.preventDefault();

        var firstname = $('.first_name').val();
        var lastname =  $('.last_name').val();
        var email =  $('.email').val();
        var phone =  $('.phone').val();
        var address_1 =  $('.address_1').val();
        var city =  $('.city').val();

        if(!firstname)
        {
            firstname_error = "First name is required"
            $('#firstname_error').html('');
            $('#firstname_error').html(firstname_error);
        }else{
            firstname_error = ""
            $('#firstname_error').html('');
        }

        if(!lastname)
        {
            lastname_error = "Last name is required"
            $('#lastname_error').html('');
            $('#lastname_error').html(lastname_error);
        }else{
            lastname_error = ""
            $('#lastname_error').html('');
        }

        if(!email)
        {
            email_error = "Email is required"
            $('#email_error').html('');
            $('#email_error').html(email_error);
        }else{
            email_error = ""
            $('#email_error').html('');
        }

        if(!phone)
        {
            phone_error = "Contact Number is required"
            $('#phone_error').html('');
            $('#phone_error').html(phone_error);
        }else{
            phone_error = ""
            $('#phone_error').html('');
        }

        if(!address_1)
        {
            address_1_error = "Address is required"
            $('#address_1_error').html('');
            $('#address_1_error').html(address_1_error);
        }else{
            address_1_error = ""
            $('#address_1_error').html('');
        }

        if(!city)
        {
            city_error = "City is required"
            $('#city_error').html('');
            $('#city_error').html(city_error);
        }else{
            city_error = ""
            $('#city_error').html('');
        }

        if(firstname_error != '' || lastname_error != '' || email_error != '' || phone_error != ''|| address_1_error != '' || city_error != '' ) 
        {
            return false;

        }else{

            var data = {
                
                'first_name':firstname,
                'last_name':lastname,
                'email':email,
                'phone':phone,
                'address_1':address_1,
                'city':city,
            }

            $.ajax({

                method: "POST",
                url: "/proceed-to-pay",
                data: data,
                success: function (response) {
                    alert(response.total_price)
                }
            });
        }
    });
});