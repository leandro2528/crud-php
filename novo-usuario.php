<div class="container">
    <h1>novo Usuário</h1>
    <form action="?page=salvar" method="POST">
        <input type="hidden" name="acao" value="cadastrar">
        <div class="mb-3">
            <label for="">Nome</label>
            <input type="text" name="nome" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">E-mail</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">senha</label>
            <input type="password" name="senha" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Data de Nascimento</label>
            <input type="date" name="data_nasc" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" name="data_nasc" class="btn btn-primary">
        </div>
    </form>
</div>