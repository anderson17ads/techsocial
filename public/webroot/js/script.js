;(function () {
    'use strict';
    
    $('[data-grid-delete]').on('click', function (e) {
        e.preventDefault();
        
        const response = $.ajax({
            url: $(this).attr('href'),
            type: 'DELETE',
            success: function(result) {
                console.log(result);
            }
        });

    });
}());