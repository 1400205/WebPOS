<?php
/**
 * Created by IntelliJ IDEA.
 * User: prosper
 * Date: 25/07/2016
 * Time: 19:08
 */
include ("myglobal.php");
?>





<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Add Customer Selected Item></title>


    <link rel="stylesheet" href="css/style-forms.css">





</head>

<body>


<br><br>
<section>
    <form class="login-form" method="post" action="">
        <div class="content">
            <div class="header">
                <h1>Add Customer Selected Item:</h1>
                <span>This is to Add Cart Items: </span>
            </div>
            <fieldset>

                <label>Product:</label><br>
                <!--                <input autocomplete="off" id="item_id" name="keyword" onblur="getSelectedItemID()" onkeyup="autocomplet();"class="input username" placeholder="Enter item name or scan barcode" type="text">   <br>-->
                <input autocomplete="off" id="item_id" name="keyword" onblur="getSelectedItemID()" onkeyup="autocomplet();"class="input username" placeholder="Enter item name or scan barcode" type="text">
                <ul id="item_list_id"></ul>
                <br>
                <label>Quantity:</label><br>
                <input type="number" name="myqty" id="myqty" class="input username" value="1" min="0"/>  <br>

                <label>Transaction ID:</label><br>
                <input type="number" name="transID" id="transID" class="input username"  /><br>
                <label>Product ID:</label><br>
                <input type="text" name="proID" id="proID"  class="input username"  > <br>

                <div id="display_info" >
                    <!--                                            --><?php // echo $selctedProduct; ?>

                </div>

                <div class="footer">
                    <button type="button"  id="addCart" name="addCart" class="button"> Add Item To Cart</button><br><br><br>
                    <button type="submit"  id="addCart" name="addCart" class="button"> Add Item </button><br>


                </div>

            </fieldset>


        </div>
    </form>

</section>
</div>

</body>
</html>