;(function () {
    'use strict';

    if (!$('[data-user-add]')[0]) {
        return;
    }

    const url = '/api/users/store';

    $('[data-user-add]').on('submit', function (e) {
        e.preventDefault();

        var form = $(this);
        
        $.ajax({
            url: url,
            type: 'POST',
            data: form.serialize(),
        })
        .done(function(result) {
            window.location.href = "/admin/users";
        });
    });
}());