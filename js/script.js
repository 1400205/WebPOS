// autocomplet : this function will be executed every time we change the text
function autocomplet() {
	var min_length = 0; // min caracters to display the autocomplete
	var keyword = $('#MYITEMID').val();
	if (keyword.length >= min_length) {
		$.ajax({
			url: 'clsGetProductForSale.php',
			type: 'POST',
			data: {keyword:keyword},
			success:function(data){
				$('#item_list_id').show();
				$('#item_list_id').html(data);
			}
		});
	} else {
		$('#item_list_id').hide();
	}
}

// set_item : this function will be executed when we select an item
function set_item(item) {
	// change input value
	$('#myItemID').val(item);
	// hide proposition list
	$('#item_list_id').hide();
}