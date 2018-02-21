/**
 * Prompt Error Messages thrown by API
 */
(function( $ ){
    $.fn.promptError = function(errors) {
        var error_message = '';
        $.each(errors, function(index, elem) {
            error_message += (Array.isArray(elem) ? elem[0] : elem) + '<br>';
        });
        
        swal(
            {
                title : 'Ops...',
                html  : error_message,
                type  : 'error'
            }
        );
    };

    $.fn.promptSuccess = function(message) {
        swal(
            {
                title : 'Success',
                text  : message,
                type  : 'success'
            }
        );
    };
})( jQuery );