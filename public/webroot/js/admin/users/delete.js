;(function () {
    'use strict';

    if (!$('[data-user-delete]')[0]) {
        return;
    }

    const url = '/api/users/delete';
    
    $('[data-user-delete]').on('click', function (e) {
        e.preventDefault();
        
        $.ajax({
            url: `${url}/${$(this).data('user-delete')}`,
            type: 'DELETE',
        })
        .done(function(result) {
            return result;
        });
    });
}());