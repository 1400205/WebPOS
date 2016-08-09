<?php

//start session

//session_start();
include ("myglobal.php");
//include ("clsCart.php");
//include ("clsTitle.php");

?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title> Sell Products</title>


    <link rel="stylesheet" href="css/style-forms.css">

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
<!--    <script type="text/javascript" src="js/jscart.js"></script>-->

<?php include ("clsgetTransID.php"); ?>
    <script>
        $(document).ready(function(){


            /* $("#item_id").click(function() {
             // var customerID = '';
             $("#customerID").val(customerID));
             $("#customerID").load("clsGetShelfID.php");
             $("#customerID").val()


             });*/
            /* $("#shelfName").change(function() {
             $("#shelfID").load("clsGetShelfID.php?shelfName=" + $("#shelfName").val());

             });*/
         /*   $("#item_id").onblur(function () {

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
                    /!* $('#select_customer_form').ajaxForm(function() {
                     alert("Thank you, Item Added!");
                     });*!/

                }

                else
                {
                    $( '#display_info' ).html("Record not found");
                }


            });*/



            $("#addCart").click(function()
            {

               /* var myItem=$('#item_id').val();
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
                    /!* $('#select_customer_form').ajaxForm(function() {
                     alert("Thank you, Item Added!");
                     });*!/

                }

                else
                {
                    $( '#display_info' ).html("Record not found");
                }
*/
                //$("#button").click(function() {
                //  $("#second-choice").load("clsGetsupplierID.php?choice=" + $("#first-choice").val());

                //});
                var proID = $("#proID").val();
                var myqty = $("#myqty").val();
                var transID = $("#transID").val();

        if(proID) {

             //  var dataString = 'proID=' + proID + '&myqty=' + myqty + '&transID=' + transID;
                $.ajax({
                    type:"post",
                     url:"clsCart.php",
                     //data:dataString,
                   // data: $('#cart').serialize(),
                    data: {
                        proID:proID,
                        myqty:myqty,
                        transID:transID
                        // myqty:qty,
                        //transID=myTransID,
                    },
                     //cache: false,
                    success:function(data){
                     $("#display_info").html("Item Added Succesfully");
                    }


                });

           // getTransactions();
            //generate_table();

        }

            });



        });
    </script>

</head>

<body>


<br><br>
<section>
    <form class="login-form" method="post" action="" id="cart">
        <div class="content">
            <div class="header">
                <h1>Add Person Details:</h1>
                <span>This page is for adding details of a person</span>
            </div>
            <fieldset>

                <label>Product:</label><br>
<!--                <input autocomplete="off" id="item_id" name="keyword" onblur="getSelectedItemID()" onkeyup="autocomplet();"class="input username" placeholder="Enter item name or scan barcode" type="text">   <br>-->
                <input autocomplete="off" id="item_id" name="keyword" onblur="getSelectedItemID()" class="input username" placeholder="Enter item name or scan barcode" type="text">
                <ul id="item_list_id"></ul>
                <br>
                <label>Quantity:</label><br>
                <input type="number" name="myqty" id="myqty" class="input username"/>  <br>

                <label>Transaction ID:</label><br>
                <input type="number" name="transID" id="transID" class="input username"  /><br>
                <label>Product ID:</label><br>
                <input type="text" name="proID" id="proID"  class="input username"  value=0  <br>

                <div id="display_info" >
                    <!--                                            --><?php // echo $selctedProduct; ?>

                </div>
                
                <div class="footer">
                    <button type="button"  id="addCart" name="addCart" class="button"> Add Item To Cart</button><br><br><br>
<!--                    <button type="submit"  id="addCart" name="addCart" class="button"> Add Item </button><br>-->


                </div>

            </fieldset>
            <div class="error"><span><?php echo $error;?></span></div>
            <div class="error"><span><a href="allPersons.html">Click to Exit this Task</a></a></span></div>

        </div>
    </form>

</section>
</div>

</body>
</html>