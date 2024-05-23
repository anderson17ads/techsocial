<main class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12">
            <h1 class="title">Listar Usuários</h1>            
            <a href="/admin/users/add" class="btn btn-action float-right">Cadastrar</a>
        </div>
    </div>

    <?php if ($data['items']) : ?>
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <table class="table data-grid">
                    <thead>
                        <tr>
                            <th class="data-grid-th" scope="col">#</th>
                            <th class="data-grid-th" scope="col">Nome</th>                         
                            <th class="data-grid-th" scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['items'] as $item) : ?>
                            <tr>
                                <td class="data-grid-td" scope="row"><?= $item->id ?></td>
                                <td class="data-grid-td"><?= $item->name ?></td>                           
                                <td class="actions">
                                    <a class="btn btn-secondary" href="/products/edit/<?= $item->id ?>">Editar</a>
                                    <form action="/products/delete/<?= $item->id ?>" method="POST">
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