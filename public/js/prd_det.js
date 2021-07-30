$(document).ready(function(){
    $('#store_id').on('change', function(){
        var store_id = $('select#store_id option').filter(":selected").val();
        $.ajax({
            type:"POST",
            url:"{{route('getProductByStore')}}",
            data: {store_id: store_id, _token: '{{csrf_token()}}'},
            success:function(res)
            {    
                $('#product_id').empty();
                $("#product_id").append('<option>Select Product</option>');
                if(res)
                {
                    $.each(res, function(k, v){    
                            console.log(v)
                            $('#product_id').append("<option value='" + v.id + "'>" + v.name + '</option>');
                    });
                }
            }
        });
    });
});