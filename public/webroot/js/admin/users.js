;(function () {
    'use strict';
    
    const urls = {
        'users': {
            'list': '/api/users',
        },
    } 
    
    if ($('[data-grid-list]')[0]) {
        $.ajax({
            url: urls.users.list,
            type: 'GET',
        })
        .done(function(result) {
            result.map(function(user) {
                $('[data-grid-list]').append(`
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
                                data-grid-delete
                                class="btn btn-danger" 
                                href="/admin/users/delete/${user.id}">
                                Excluir
                            </a>
                        </td>
                    </tr>
                `);
            })
        });
    }
    
    $('[data-grid-delete]').on('click', function (e) {
        e.preventDefault();
        
        const response = $.ajax({
            url: $(this).attr('href'),
            type: 'DELETE',
            success: function(result) {
                return result;
            }
        });
    });
}());