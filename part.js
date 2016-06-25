/**
 * Created by prosper on 23/06/2016.
 */

COMMON_SUCCESS = "Success";
COMMON_ERROR = "Error";

bootbox.addLocale('ar', {
    OK : 'OK',
    CANCEL : 'CANCEL',
    CONFIRM : 'CONFIRM'
});

bootbox.addLocale('km', {
    OK :'OK',
    CANCEL : 'CANCEL',
    CONFIRM : 'CONFIRM'
});
bootbox.setLocale(LOCALE);
$.ajaxSetup ({
    cache: false,
    headers: { "cache-control": "no-cache" }
});
toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
}

$.fn.editableform.buttons =
    '<button tabindex="-1" type="submit" class="btn btn-primary btn-sm editable-submit">'+
    '<i class="icon ti-check"></i>'+
    '</button>'+
    '<button tabindex="-1" type="button" class="btn btn-default btn-sm editable-cancel">'+
    '<i class="icon ti-close"></i>'+
    '</button>';

$.fn.editable.defaults.emptytext = "Empty";

$(document).ready(function()
{
    $(".wrapper.mini-bar .left-bar").hover(
        function() {
            $(this).parent().removeClass('mini-bar');
        }, function() {
            $(this).parent().addClass('mini-bar');
        }
    );

    $('.menu-bar').click(function(e){
        e.preventDefault();
        $(".wrapper").toggleClass('mini-bar');
    });

    //Ajax submit current location
    $(".set_employee_current_location_id").on('click',function(e)
    {
        e.preventDefault();

        var location_id = $(this).data('location-id');
        $.ajax({
            type: 'POST',
            url: 'https://demo.phppointofsale.com/index.php/home/set_employee_current_location_id',
            data: {
                'employee_current_location_id': location_id,
            },
            success: function(){
                window.location.reload(true);
            }
        });

    });

    $(".set_employee_language").on('click',function(e)
    {
        e.preventDefault();

        var language_id = $(this).data('language-id');
        $.ajax({
            type: 'POST',
           // url: 'https://demo.phppointofsale.com/index.php/employees/set_language',
            data: {
                'employee_language_id': language_id,
            },
            success: function(){
                window.location.reload(true);
            }
        });

    });

    //Keep session alive by sending a request every 5 minutes
    setInterval(function(){$.get('https://demo.phppointofsale.com/index.php/home/keep_alive');}, 300000);
});


