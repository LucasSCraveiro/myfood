<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>myFood2</title>
</head>
<body>
    
  <div class="container-sm">
    <nav class="navbar navbar-expand-lg mt-lg-4">
      <div class="container-fluid col-11">
        <a class="nav-link" href="/"><img src="images/myFood2.png" alt="logo Myfood2" class="logoMyFood2"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="row justify-content-between col-12 mx-1">
            <div class="navbar-nav col-lg-8 d-flex align-items-center column-gap-3 px-0">
              <a class="nav-link" href="#">Entregador</a>
              <a class="nav-link" href="/restaurante">Restaurante e Mercado</a>
              <a class="nav-link" href="#">Carreiras</a>
              <a class="nav-link" href="#">myFood2 Card</a>
            </div>
            <div class="navbar-nav col-lg-3 d-flex align-items-center column-gap-3 px-0">
              <a class="nav-link" href="/login">criar conta</a>
              <a class="nav-link" href="/login"><button class="btn btn-danger botaoPadrao">Entrar</button></a>
            </div>
          </div>
        </div>
      </div>
    </nav>
    @yield('conteudo')
    <div>
      <div class="row justify-content-between mb-2">
        <div class="col-5 col-md-3">
          <p>Explore por cidades</p>
        </div>
        <div class="col-3 col-md-2">
          <a href="#" class="links"><div>Ver todas</div></a>
        </div>
      </div>
      <div class="row">
        <div class="row col-12 col-md-6">
          <div class="col-12 col-lg-6 d-flex flex-column">
            <a href="#" class="my-2 links">Belo Horizonte</a>
            <a href="#" class="my-2 links">Brasília</a>
            <a href="#" class="my-2 links">Campinas</a>
            <a href="#" class="my-2 links">Curitiba</a>
            <a href="#" class="my-2 links">Goiânia</a>
          </div>
          <div class="col-12 col-lg-6 d-flex flex-column">
            <a href="#" class="my-2 links">Guarulhos</a>
            <a href="#" class="my-2 links">João Pessoa</a>
            <a href="#" class="my-2 links">Natal</a>
            <a href="#" class="my-2 links">Niteroi</a>
            <a href="#" class="my-2 links">Porto Alegre</a>
          </div>
        </div>
        <div class="row col-12 col-md-6">
          <div class="col-12 col-lg-6 d-flex flex-column">
            <a href="#" class="my-2 links">Ribeirão Preto</a>
            <a href="#" class="my-2 links">Rio de Janeiro</a>
            <a href="#" class="my-2 links">Salvador</a>
            <a href="#" class="my-2 links">Santo André</a>
            <a href="#" class="my-2 links">Santos</a>
            <a href="#" class="my-2 links d-block d-lg-none">São Bernardo do Campo</a>
            <a href="#" class="my-2 links d-block d-lg-none">São Caetano do Sul</a>
            <a href="#" class="my-2 links d-block d-lg-none">São Paulo</a>
          </div>
          <div class="col-12 col-lg-6 d-none d-lg-flex flex-column">
            <a href="#" class="my-2 links">São Bernardo do Campo</a>
            <a href="#" class="my-2 links">São Caetano do Sul</a>
            <a href="#" class="my-2 links">São Paulo</a>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-12 col-md-6 col-lg-3 d-flex flex-column">
        <p class="fw-bold">myFood2</p>
        <a href="#" class="my-2 links">Site Institucional</a>
        <a href="#" class="my-2 links">Fale conosco</a>
        <a href="#" class="my-2 links">Carreiras</a>
        <a href="#" class="my-2 links">myFood2 Colômbia</a>
      </div>
      <div class="col-12 col-md-6 col-lg-3 d-flex flex-column mt-3 mt-lg-0">
        <p class="fw-bold">Descubra</p>
        <a href="#" class="my-2 links">Cadastre seu Restaurante ou mercado</a>
        <a href="#" class="my-2 links">myFood2 Shop</a>
        <a href="#" class="my-2 links">myFood2 Card</a>
        <a href="#" class="my-2 links">Blog myFood2 Empresas</a>
      </div>
      <div class="col-12 col-md-6 col-lg-3 d-flex flex-column mt-3 mt-lg-0">
        <p class="fw-bold">Social</p>
        <a href="#" class="my-2 links">Facebook</a>
        <a href="#" class="my-2 links">Twitter</a>
        <a href="#" class="my-2 links">Youtube</a>
        <a href="#" class="my-2 links">Instagram</a>
      </div>
    </div>
    <hr>
    <div class="row d-flex align-items-center">
      <div class="col-3 col-md-1 localLogoFooter">
        <img src="images/myFood2.png" class="img-fluid">
      </div>
      <div class="col-9 col-md-5 align-items-center">
        <div><p class="m-0 copyrightFrase">Copyright 2023 - Lucas - Todos os direitos reservados Lucas com Lucas S.A.</p></div>
        <div><p class="copyrightFrase">CNPJ 00.000.000/0000-00 / Avenida das Ruas, nº 0, Bairro Central, São Vicente/SP - CEP - 00000-000</p></div>
        <div></div>
      </div>
      <div class="col-12 col-md-6 row">
        <div class="col-12 col-md-3">
          <a href="#" class="links"><div><p class="linksFooter">Termos e condições de uso</p></div></a>
        </div>
        <div class="col-12 col-md-3">
          <a href="#" class="links"><div><p class="linksFooter">Código de conduta</p></div></a>
        </div>
        <div class="col-12 col-md-3">
          <a href="#" class="links"><div><p class="linksFooter">Privacidade</p></div></a>
        </div>
        <div class="col-12 col-md-3">
          <a href="#" class="links"><div><p class="linksFooter">Dicas de segurança</p></div></a>
        </div>
      </div>
    </div>
  </div>

  <script src="js/bootstrap.js" type="text/javascript"></script>
  <script src="js/carrosel.js" type="text/javascript"></script>
  
</body>
</html>