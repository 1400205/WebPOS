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
include ("tryGetCart.php");


?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title> Get Cart</title>


    <link rel="stylesheet" href="css/style-forms.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    
    
<!--    --><?php //  include ("tryGetCart.php");   ?>
    <script>
        
        $(document).ready(function () {
            
            $('#submit').click(function () {

                $("#currentCart").val(cartdata);
              //  var transID = $("#transID").val();


             /*   if (transID) {
                    $.ajax({
                        url: 'tryGetCart.php',
                        type: 'POST',
                        data: {transID:transID},
                        success:function(data){
                            $('#item_list_id').show();
                            $('#item_list_id').html(data);

                        }
                    });
                } else {
                    $('#item_list_id').hide();
                }
                */
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
                <h1>Get Cart:</h1>
                <span>Try getting cart data .</span>
            </div>
            <fieldset>

                <br>
                <label>Trans ID:</label><br>
                <input type="text" name="transID" id="transID" class="input username" placeholder="Enter Supplier Name To search" />  <br>



                <div class="footer">
                    <input type="button" class="button" name="submit" id="submit" value="Submit" /><br>

                </div>

            </fieldset>
            <div id="currentCart" name="currentCart">
              <!-- --><?php
/*             // include ("myglobal.php");
               // include ("clsGetCartProducts.php");
               echo $resultText;



                */?>
                </div>

                <div class="error"><span><a href="allPersons.html"> Click here to Exit this Task</a></a></span></div>

            </div>
            <div class="error"><span><?php echo $msg;?></span></div>

        </div>
    </form>

</section>
</div>

</body>
</html>