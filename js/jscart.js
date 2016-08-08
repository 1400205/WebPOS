/**
 * Created by prosper on 30/07/2016.
 */
// autocomplet : this function will be executed every time we change the text
function addRecord() {
   // var min_length = 0; // min caracters to display the autocomplete
    var keyword = $('#item_id').val();
    if (keyword.length >= min_length) {
       $("#getCustomer").click(function(){

           $.ajax({
               url: 'clsAddCart.php',
               type: 'POST',
               data: {keyword:keyword},
               success:function(data){
                   // $('#item_list_id').show();
                   //  $('#item_list_id').html(data);
               }
           });
       });
    } else {
        $('#item_list_id').hide();
    }
}

function getSelectedProduct() {
    var min_length = 0; // min caracters to display the autocomplete
    var keyword = $('#item_id').val();
    if (keyword.length >= min_length) {
        $.ajax({
            url: 'clsAddCart.php',
            type: 'POST',
            data: {keyword:keyword},
            success:function(data){
                // $('#item_list_id').show();
                //  $('#item_list_id').html(data);
            }
        });
    }
}
