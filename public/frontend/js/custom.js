jQuery.noConflict()(function ($) { $(document).ready(function () {

    loadcart();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function loadcart()

    {
        $.ajax({
            method: "GET",
            url: "/load-cart-data",
            success: function (response) {
                $('.cart-count').html('');
                $('.cart-count').html(response.count);
                console.log(response.count);
            }
        });
    }



    $('.addToCartBtn').click(function (e) {
        e.preventDefault();

        var product_id = $(this).closest('.product_data').find('.prod_id').val();
        var product_qty = $(this).closest('.product_data').find('.qty_input').val();

        $.ajax({
            method: "POST",
            url: "/add-to-cart",
            data: {
                'product_id': product_id,
                'product_qty' : product_qty,
            },
            success: function (response) {
                swal(response.status);
                loadcart();
            }
            
        });
    });

    // $('.increment-btn').click(function (e) {
    $(document).on('click', '.increment-btn', function (e) {
        e.preventDefault();

        var inc_value = $(this).closest('.product_data').find('.qty_input').val();
        var value = parseInt(inc_value, 10);
        value = isNaN(value) ? 0 : value;
        if(value < 10)
        {
            value++;
            $(this).closest('.product_data').find('.qty_input').val(value);
        }
    });

    //$('.decrement-btn').click(function (e) {
    $(document).on('click', '.decrement-btn', function (e) {
        e.preventDefault();

        var dec_value = $(this).closest('.product_data').find('.qty_input').val();
        var value = parseInt(dec_value, 10);
        value = isNaN(value) ? 0 : value;
        if(value > 1)
        {
            value--;
            $(this).closest('.product_data').find('.qty_input').val(value);
        }
    });

    // $('.remove-cart-item').click(function (e) {
        $(document).on('click', '.remove-cart-item', function (e) {
        e.preventDefault();

        var prod_id = $(this).closest('.product_data').find('.prod_id').val();
        $.ajax({
            method: "POST",
            url: "remove-cart-item",
            data: {
                'prod_id': prod_id,
            },
            success: function (response) {

                loadcart();
                $('.cartitems').load(location.href + " .cartitems")
            }
        });
    });

    // $('.changeQuantity').click(function (e) {
    $(document).on('click', '.changeQuantity', function (e) {
        e.preventDefault();

        var prod_id = $(this).closest('.product_data').find('.prod_id').val();
        var qty = $(this).closest('.product_data').find('.qty_input').val();
        data = {
            'prod_id' : prod_id,
            'prod_qty' : qty,
        }

        $.ajax({
            method:"POST",
            url:"update-cart",
            data: data,
            success: function (response) {
                $('.cartitems').load(location.href + " .cartitems")
            }
        });
    });
});

    
});