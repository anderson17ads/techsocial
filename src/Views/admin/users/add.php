<main class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12">
            <h1 class="title">Adicionar Usuário</h1>
            <a href="/admin/users" class="btn btn-action float-right">Listar</a>
        </div>
    </div>

    <?php if ($data['message']) : ?>
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <?= $data['message'] ?>
            </div>
        </div>
    <?php endif ?>

    <div class="row">
        <div class="col-xs-12 col-sm-12">
            <form 
                method="POST" 
                action="/admin/users/add" 
                data-toggle="validator" 
                role="form">

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="first_name">Nome</label>
                        <input name="first_name" class="form-control" id="first_name" required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="last_name">Sobrenome</label>
                        <input name="last_name" type="text" class="form-control" id="last_name" required>
                        <div class="help-block with-errors"></div>
                    </div>                    
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="document">Documento</label>
                        <input name="document" type="text" class="form-control" id="document" required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input name="email" type="text" class="form-control" id="email" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="phone_number">Telefone</label>
                        <input name="phone_number" type="text" class="form-control" id="phone_number" required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="birth_date">Data de Nascimento</label>
                        <input name="birth_date" type="text" class="form-control" id="birth_date" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="actions-form">
                    <a href="/admin/users" class="action back">Listar Usuários</a>
                    <button type="submit" class="btn-submit btn-action">Criar Usuário</button>
                </div>
            </form>            
        </div>
    </div>
</main>