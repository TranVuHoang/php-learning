$(document).ready(function() {
	$(".num-order").change(function(){
		var id = $(this).attr('data-id');
		var qty = $(this).val();
		var data = {id: id, qty: qty};
		$.ajax({
			url: '?mod=cart&controller=index&action=update_ajax',
			type: 'POST',
			dataType: 'json',
			data: data,
			success: function(data) {
				$("#sub-total-"+id).text(data.sub_total);
				$("#total-price span").text(data.total);
				console.log(data);
			},
			error: function (xhr, ajaxOptions, thrownError) {
				alert(xhr.status);
				alert(thrownError);
			}
		});		
		// return false;
	});
});
