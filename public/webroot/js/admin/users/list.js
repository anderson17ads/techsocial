;(function () {
    'use strict';

    if (!$('[data-user-list]')[0]) {
        return;
    }

    const url = '/api/users';

    $.ajax({
        url: url,
        type: 'GET',
    })
    .done(function(result) {
        result.map(function(user) {
            $('[data-user-list]').append(`
                <tr>
                    <td class="data-grid-td" scope="row">${user.id}</td>
                    <td class="data-grid-td">${user.first_name}</td>
                    <td class="data-grid-td">${user.last_name}</td>
                    <td class="actions">
                        <a 
                            class="btn btn-secondary" 
                            href="/admin/users/edit/${user.id}">
                            Editar
                        </a>
                        <a 
                            data-user-delete="${user.id}"
                            class="btn btn-danger" 
                            href="/admin/users/delete/${user.id}">
                            Excluir
                        </a>
                    </td>
                </tr>
            `);
        })
    });
}());