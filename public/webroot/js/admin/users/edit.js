;(function () {
    'use strict';

    if (!$('[data-user-edit]')[0]) {
        return;
    }

    const url = '/api/users/getById';
    const id = $('[data-user-edit]').data('user-edit');

    $.ajax({
        url: `${url}/${id}`,
        type: 'GET',
    })
    .done(function(result) {
        Object.keys(result.data).map(function(field) {
            const fieldObj = $(`#${field}`);
            
            if (fieldObj[0]) {
                fieldObj.val(result.data[field]);
            }
        });
    });
}());