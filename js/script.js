// autocomplet : this function will be executed every time we change the text
function autocomplet() {
	var min_length = 0; // min caracters to display the autocomplete
	var keyword = $('#item_id').val();
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
	$('#item_id').val(item);
	// hide proposition list
	$('#item_list_id').hide();
	$('#item_id').select();
	$('#item_id').focus();
}

function getSelectedItemID() {

	var myItem=$('#item_id').val();
	// var selectedID=$('#display_info').val();

	// var myTransID=$('#transID').val();

	// document.getElementById( "item_id" );

	if(myItem)
	{
		$.ajax({
			type: 'post',
			url: 'clsGetCustomerSelectedProductID.php',
			data: {
				keyword:myItem,
				// myqty:qty,
				//transID=myTransID,
			},
			success: function (data) {

				// We get the element having id of display_info and put the response inside it

				// var myID=parseInt(data.data);
				$( '#proID' ).val(data);

				//$("proID").val(selectedID);

			}
		});


		//get transaction ID
		$("#transID").val(transid);

		//add chart item
		// bind 'myForm' and provide a simple callback function
		/* $('#select_customer_form').ajaxForm(function() {
		 alert("Thank you, Item Added!");
		 });*/

	}

	else
	{
		$( '#display_info' ).html("Record not found");
	}


}