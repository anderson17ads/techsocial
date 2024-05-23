<main class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12">
            <h1 class="title">Listar Usuários</h1>            
            <a href="/admin/users/add" class="btn btn-action float-right">Cadastrar</a>
        </div>
    </div>

    <?php if ($data['users']) : ?>
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <table class="table data-grid">
                    <thead>
                        <tr>
                            <th class="data-grid-th" scope="col">#</th>
                            <th class="data-grid-th" scope="col">Nome</th>
                            <th class="data-grid-th" scope="col">Sobrenome</th>
                            <th class="data-grid-th" scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['users'] as $user) : ?>
                            <tr>
                                <td class="data-grid-td" scope="row"><?= $user->id ?></td>
                                <td class="data-grid-td"><?= $user->first_name ?></td>
                                <td class="data-grid-td"><?= $user->last_name ?></td>
                                <td class="actions">
                                    <a class="btn btn-secondary" href="/admin/users/edit/<?= $user->id ?>">Editar</a>
                                    <form action="/admin/users/delete/<?= $user->id ?>" method="POST">
                                        <input type="hidden" name="_METHOD" value="DELETE"/>
                                        <input class="btn btn-danger" type="submit" value="Excluir">
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php else : ?>
        <h2>Nenhum usuário encontrado!</h2>
    <?php endif ?>
</main>