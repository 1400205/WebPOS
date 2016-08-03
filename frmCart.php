<?php

//start session

//session_start();
include ("myglobal.php");
include ("clsCart.php");
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


            $("#addCart").click(function()
            {

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
                            $( '#display_info' ).html(response);

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

                //$("#button").click(function() {
                //  $("#second-choice").load("clsGetsupplierID.php?choice=" + $("#first-choice").val());

                //});


                // var display_info=$("#display_info").val();
                // var myqty=$("#myqty").val();
                //  var transID=$("#transID");
                //  var dataString = 'display_info=' + display_info + '&myqty=' + myqty + '&transID=' + transID;
                $.ajax({
                    /*type:"post",
                     url:"clsAddCart.php",
                     data:dataString,
                     cache: false,
                     success:function(data){
                     $("#display_info").html("Item Added Succesfully");*/
                    // }
                });


            });



        });
    </script>

</head>

<body>


<br><br>
<section>
    <form class="login-form" method="post" action="">
        <div class="content">
            <div class="header">
                <h1>Add Person Details:</h1>
                <span>This page is for adding details of a person</span>
            </div>
            <fieldset>

                <label>Product:</label><br>
                <input type="text" name="keyword" id="item_id" class="input username"/>  <br>

                <ul id="item_list_id"></ul>
                <br>
                <label>Quantity:</label><br>
                <input type="number" name="myqty" id="myqty" class="input username"/>  <br>

                <label>Transaction ID:</label><br>
                <input type="number" name="transID" id="transID" class="input username"  /><br>
                <label>Other Name(s):</label><br>
                <input type="NUMBER" name="proID" id="proID" class="input username" />  <br>

                <div id="display_info"> </div>
                
                <div class="footer">
                    <input type="submit" id= "submit" class="button" name="submit" value="Submit" /><br>


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