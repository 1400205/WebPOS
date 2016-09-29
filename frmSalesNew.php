<?php
/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 22/07/2016
 * Time: 04:47
 */

//start session

//session_start();
include ("myglobal.php");
//include ("clsGetPersonForSupplier.php");
include ("clsAddCart.php");

?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title> Sales Screen</title>


    <link rel="stylesheet" href="css/style-forms.css">

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/jscart.js"></script>

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

        $("#refresh").click(function()
            {
                var url="http://localhost:85/webpos/trygetcart.php";
                $.getJSON(url,
                    function(result)
                    {
                        $("#answer tbody").empty();
                        var alltrans=result["alldata"];	//get the list
                        for( i in alldata)
                        {
                            var cartdata=alldata[i];	//get
                            var partName=cartdata["partName"];
                            var qty=cartdata["qty"];
                            var productID=cartdata["productID"];
                            var Sellprice=cartdata["Sellprice"];
                            var htmlCode="<tr id='"+productID+"'>";
                            htmlCode+="<td>"+partName+"</td>";
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
        ); //end method call to click

        function dataSelected(whatever)
        {
        }
    </script>
</head>

<body>


<br><br>
<section>
    <form class="login-form" method="post" action="">
        <div class="content">
            <div class="header">
                <h1>Seach and Sell Products:</h1>
                <span>Search for product and sell.</span>
            </div>
            <fieldset>

                <label>Product:</label><br>
                <input autocomplete="off" id="item_id" name="keyword" onkeyup="autocomplet();"class="input username" placeholder="Enter item name or scan barcode" type="text">   <br>
                <ul id="item_list_id"></ul>
                <label>QUANTITY:</label> <br>
                <input autocomplete="off" id="myqty" name="myqty" onkeyup="#"class="input username"  type="number" min="1" value="1"><br>

                <input autocomplete="off" id="transID" name="transID" onkeyup="#"class="input username"  type="text">
                <input autocomplete="off" id="proID" name="proID" onkeyup="#"class="input username"  type="number" value="3" >

                <div id="display_info" >
                    <!--                                            --><?php // echo $selctedProduct; ?>

                </div>


                <br>

                <div class="footer">
                    <button type="button"  id="addCart" name="addCart" class="button"> Add Item To Cart</button><br><br><br>
                    <button type="button"  id="refresh" name="addCartRecord" class="button"> Refresh patients </button><br>
                    <div class="error"><span><?php echo $error;?></span></div>

                </div>

            </fieldset>
            <div id="photolist">

                <?php echo $resultText;?><br>
                <?php echo $resultTextPhoto;?><br>
                <div class="error"><span><a href="allPersons.html"> Click here to Exit this Task</a></a></span></div>

            </div>

        </div>

        <table id="answer">
            <thead>
            </thead>
            <tbody>
            </tbody>
            <tr>Love</tr>
        </table>
    </form>

</section>
</div>




</body>
</html>