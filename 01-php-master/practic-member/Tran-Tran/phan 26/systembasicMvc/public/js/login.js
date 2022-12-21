$(document).ready(function() {
	function reset($button){
		$($button).click(function(){
			reset_textbox();
		});
	}

	function reset_textbox() {
		$("#username, #password, #fullname").each(function() {
			this.value = '';
		});
	}
});