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
	getCartItem();
	getStuckQTY();
}


function generate_table() {
	// get the reference for the body
	var body = document.getElementsByTagName("body")[0];

	// creates a <table> element and a <tbody> element
	var tbl     = document.createElement("table");
	var tblBody = document.createElement("tbody");

	// creating all cells
	for (var i = 0; i < 2; i++) {
		// creates a table row
		var row = document.createElement("tr");

		for (var j = 0; j < 2; j++) {
			// Create a <td> element and a text node, make the text
			// node the contents of the <td>, and put the <td> at
			// the end of the table row
			var cell = document.createElement("td");
			var cellText = document.createTextNode("cell in row "+i+", column "+j);
			cell.appendChild(cellText);
			row.appendChild(cell);
		}

		// add the row to the end of the table body
		tblBody.appendChild(row);
	}

	// put the <tbody> in the <table>
	tbl.appendChild(tblBody);
	// appends <table> into <body>
	body.appendChild(tbl);
	// sets the border attribute of tbl to 2;
	tbl.setAttribute("border", "2");
}

function getTransactions() {

	var myTransID=$('#transID').val(transid);
	// var selectedID=$('#display_info').val();

	// var myTransID=$('#transID').val();

	// document.getElementById( "item_id" );

	if(myTransID)
	{
		$.ajax({
			type: 'post',
			url: 'clsGetCartProducts.php',
			data: {
				transID:myTransID,
				// myqty:qty,
				//transID=myTransID,
			},
			success: function (data) {

				// We get the element having id of display_info and put the response inside it

				// var myID=parseInt(data.data);
				//( '#currentCart' ).val(data);


					$('#display_info').show();
					$('#display_info').html(data);



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

function getCartItem() {

	var myItem=$('#item_id').val();
	// var qty=$('#myqty').val();
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
			success: function (response) {

				// We get the element having id of display_info and put the response inside it
				$( '#itemID' ).html(response);
				$("#selectItemID").val($("#itemID").html());
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

//function get stuck qty

function getStuckQTY() {

	var myItem=$('#item_id').val();
	// var qty=$('#myqty').val();
	// var myTransID=$('#transID').val();

	// document.getElementById( "item_id" );

	if(myItem)
	{
		$.ajax({
			type: 'post',
			url: 'clsGetStuckQTY.php',
			data: {
				keyword:myItem,
				// myqty:qty,
				//transID=myTransID,
			},
			success: function (response) {

				// We get the element having id of display_info and put the response inside it
				$( '#itemQTY' ).html(response);
				$("#stuckQTY").val($("#itemQTY").html());
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

function viewdata() {
	//var min_length = 0; // min caracters to display the autocomplete
	var transID=$('#transID').val();
	if (transID) {
		$.ajax({
			url: 'clsGetChartInfo.php',
			type: 'POST',
			data: {transID:transID},
			success:function(data){

				$('#answer tbody').html(data);


			}
		});
	} else {
		$('#item_list_id').hide();
	}


}

function displayCartItems() {
	
		var url="clsGetCartData.php";
		$.getJSON(url,
			function(result)
			{
				$("#answer tbody").empty();
				var alltrans=result["alldata"];	//get the list
				for( i in alltrans)
				{
					var cartdata=alltrans[i];	//get
					var cartID=cartdata["cartID"];
					var partName=cartdata["partName"];
					var qty=cartdata["qty"];
					var productID=cartdata["productID"];
					var Sellprice=cartdata["Sellprice"];
					var Discount=cartdata["Discount"];
					var Total=cartdata["Total"];
					var htmlCode="<tr id='"+productID+"'>";
					htmlCode+="<td>"+cartID+"</td>";
					htmlCode+="<td>"+partName+"</td>";
					htmlCode+="<td>"+Sellprice+"</td>";
					htmlCode+="<td>"+qty+"</td>";
					htmlCode+="<td>"+Discount+"</td>";
					htmlCode+="<td>"+Total+"</td>";
					/* htmlCode+="<td>"+qty+"</td>";
					 htmlCode+="<td>"+Sellprice+"</td>";*/
					htmlCode+="</tr>";
					$("#answer tbody").append(htmlCode);
				} //end for loop

				$("#answer tr").click(function()
					{
						dataSelected($(this).attr("id"));
					}
				);

			} //end success callback function
		); //end method call to getJSON
	} //end onclick handler of button
