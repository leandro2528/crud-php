<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = md5($_POST["senha"]);
        $data_nasc = $_POST["data_nasc"];

        $sql = "INSERT INTO usuario (nome, email, senha, data_nasc) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";
        $res = $conn->query($sql);

        if($res == true) {
            print "<script> alert('Usuário cadastrado com sucesso!!!') </script>";
            print "<script> location.href='?page=listar.php' </script>";
        } else {
            print "<script> alert('Não foi possível cadastrar um novo usuário') </script>";
            print "<script> location.href='?page=listar.php' </script>";
        }

        break;
    case 'editar':
        // código
        break;
    case 'excluir':
        // código
        break;
    default:
        // codigo
        break;
}
