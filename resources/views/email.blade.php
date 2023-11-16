<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Login Email</title>
</head>
<body class="telaLogin">

    <div class="container-fluid fundoLogin">
        <div class="row">
            <div class="col-1 mt-5 ms-5 mb-5">
                <a href="/">
                    <img src="images/myFood2.png" class="logoMyFood2">
                </a>
            </div>
        </div>
        <div class="rowmb-5">
            <div class="col-10 col-md-8 col-lg-6 col-xl-4 mx-auto bg-white rounded-2">
                <div class="row">
                    <a href="/login" class="link-secondary text-decoration-none">
                        <p class="fs-5 ms-2 mt-2">Voltar</p>
                    </a>
                </div>
                <div class="mx-4">
                    <p class="text-center fs-5 mb-4">Cadastro</p>
                    <form action="/cadastro" method="get">
                        <div class="row justify-content-between mb-4 mx-md-4">
                            <div class="col-12 p-0">
                                <label>Nome</label>
                                <input type="text" class="form-control mb-2" name="nome" id="nome" placeholder="Informe seu nome">
                                <label>Sobrenome</label>
                                <input type="text" class="form-control mb-2" name="sobrenome" id="sobrenome" placeholder="Informe seu sobrenome">
                                <label>Email</label>
                                <input type="text" class="form-control mb-2" name="email" placeholder="Informe seu email">
                                <label>Senha</label>
                                <input type="text" class="form-control mb-2" name="senha" placeholder="Informe sua senha">
                                <label>Endereço</label>
                                <input type="text" class="form-control mb-2" name="endereco" placeholder="Informe seu endereço">
                                <label>Cidade</label>
                                <input type="text" class="form-control mb-2" name="cidade" placeholder="Informe sua cidade">
                                <label>Estado</label>
                                <input type="text" class="form-control mb-2" name="estado" placeholder="Informe seu estado">
                                <div class="mb-1 row justify-content-center botaoCadastro">
                                    <button type="submit" class="botaoPadrao col-6 py-3 my-3 mx-md-5 rounded-1 text-center text-white m-0">Continuar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <hr class="mx-auto mb-5 w-75 text-center">
                </div>
            </div>
        </div>
    </div>
</body>
</html>