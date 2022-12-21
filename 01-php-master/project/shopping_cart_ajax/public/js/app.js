$(document).ready(function() {
    $(".num-order").change(function() {
        var product_id = $(this).attr('data-id'); //lấy giá trị thuộc tính data-id
        var num_order = $(this).val(); //lấy giá trị phần tử
        var data = { product_id: product_id, num_order: num_order }; //chuỗi json 
        // alert(product_id);
        $.ajax({
            url: '?mod=cart&act=update_ajax',
            method: 'POST',
            data: data,
            dataType: 'json',
            success: function(data) {
                $("#" + product_id).html(data.sub_total);
                $("#total-price").html(data.total);
                $("#num").text(data.num_order_cart);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
    });
});