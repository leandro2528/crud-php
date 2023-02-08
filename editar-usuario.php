<div class="container">
    <h1>Editr Usuário</h1>
    <?php
        $sql = "SELECT * FROM usuario WHERE id=".$_REQUEST["id"];
        
        $res = $conn->query($sql);
        $row = $res->fetch_object();

    ?>
    <form action="?page=salvar" method="POST">
        <input type="hidden" name="acao" value="cadastrar">
        <div class="mb-3">
            <label for="">Nome</label>
            <input type="text" name="nome" value="<?php print $row->nome ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">E-mail</label>
            <input type="email" name="email" value="<?php print $row->email ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">senha</label>
            <input type="password" name="senha" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="">Data de Nascimento</label>
            <input type="date" name="data_nasc" value="<?php print $row->data_nasc ?>" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" name="submit" class="btn btn-primary">
        </div>
    </form>
</div>