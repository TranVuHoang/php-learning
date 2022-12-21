$(function(){
    $('.num-order').change(function(){
        var qty=parseInt($(this).val());
        var id=$(this).attr('data-id');

        

        $.ajax({
            url: '?mod=cart&controller=main&action=updateAjax',
            method: 'POST',
            data: {qty: qty,id: id},
            dataType: 'json',
            success: function(data){
                 $('#total-price span').text(data.total);
                 $('#num').text(data.num_order);
                 $('.sub-total-'+id).text(data.sub_total);
            },
            error: function(xhr,ajaxOptions,thrownError){
                  alert(xhr.status);
                  alert(thrownError);
            }
        });
    });
});