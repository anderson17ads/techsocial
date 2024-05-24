;(function () {
    'use strict';

    if (!$('[data-user-edit]')[0]) {
        return;
    }

    const url = '/api/users/update';

    $('[data-user-edit]').on('submit', function (e) {
        e.preventDefault();

        var form = $(this);
        
        $.ajax({
            url: url,
            type: 'PUT',
            data: form.serialize(),
        })
        .done(function(result) {
            return result;
        });
    });
}());