<?php

    $servidor = 'localhost';
    $usuario = 'root';
    $senhaBanco = '';
    $banco = 'db_laraFood';


    $nome = $_GET['nome'];
    $sobrenome = $_GET['sobrenome'];
    $email = $_GET['email'];
    $senha = $_GET['senha'];
    $endereco = $_GET['endereco'];
    $cidade = $_GET['cidade'];
    $estado = $_GET['estado'];


    
    $mysqli = new mysqli($servidor,$usuario,$senhaBanco,$banco);

    if (mysqli_connect_errno()) trigger_error(mysqli_connect_errno());

    $sql = "INSERT INTO tb_usuario (nm_nome,nm_sobrenome,nm_email,nm_senha,nm_endereco,nm_cidade,nm_estado) VALUES ('$nome','$sobrenome','$email','$senha','$endereco','$cidade','$estado')";

    $result = $mysqli->query($sql);

    //header("Location: /email");

    return redirect() -> to('/email') -> send();

?>