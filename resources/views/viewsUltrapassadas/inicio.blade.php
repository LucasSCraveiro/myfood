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
        <a class="nav-link" href="#"><img src="images/myFood2.png" alt="logo Myfood2" class="logoMyFood2"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="row justify-content-between col-12 mx-1">
            <div class="navbar-nav col-lg-8 d-flex align-items-center column-gap-3 px-0">
              <a class="nav-link" href="#">Entregador</a>
              <a class="nav-link" href="#">Restaurante e Mercado</a>
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
    <div class="row mt-4 mt-md-5">
      <div>
        <p class="text-center fw-bold fs-5 d-sm-block d-md-none mb-0">Tudo pra facilitar o seu dia a dia</p>
        <p class="text-center fw-bold fs-1 d-none d-sm-none d-md-block mb-0">Tudo pra facilitar o seu dia a dia</p>
      </div>
    </div>
    <div class="row justify-content-center mt-2">
      <div class="col-md-4 p-0">
        <p class="m-0 text-md-end text-center">
          O que você precisa está aqui.
        </p>
      </div>
      <div class="col-md-4 p-0">
        <p class="m-0 text-md-start text-center">
          &nbspPeça e receba onde estiver.
        </p>
      </div>
    </div>
    <div class="row mt-5">
      <form>
        <div class="row justify-content-center">
          <div class="col-12 col-md-8 col-xxl-6">
            <div class="input-group">
              <span class="input-group-text localizacaoLocal"><img src="images/localizacao.png" alt="" class="localizacao"></span>
              <input type="text" class="form-control localicazaoTexto" placeholder="Endereço de entrega e número">
            </div>
          </div>
          <div class="col-12 col-md-2 d-grid mt-3 mt-md-0">
            <button class="btn btn-danger botaoPadrao">Buscar</button>
          </div>
        </div>
      </form>
    </div>
    <div class="row justify-content-center mt-5 mx-0">
      <div class="col-xl-8 col-md-10 row p-0 justify-content-between">
        <button class="col-6 col-md-5 pt-2 rounded-4 restaurante">
          <div>
            <p class="d-none d-md-block fs-1 text-center text-md-start corTextoRestauranteMercado">Restaurante</p>
            <p class="d-block d-md-none fs-2 text-center text-md-start corTextoRestauranteMercado">Restaurante</p>
          </div>
          <div class="row justify-content-between align-items-end">
            <div class="col-md-6 mb-3 ps-md-4">
              <div class="d-none d-md-block rounded-pill verOpcoes">
                <p class="corTextoRestauranteMercado m-0">Ver opções</p>
              </div>
            </div>
            <div class="col-md-6">
              <img src="images/restaurante.png" class="img-fluid mb-2 mb-md-0">
            </div>
            <div class="col-md-6 mb-3 ps-md-4">
              <div class="d-block d-md-none rounded-pill verOpcoes ">
                <p class="corTextoRestauranteMercado m-0">Ver opções</p>
              </div>
            </div>
          </div>
        </button>
        <button class="col-6 col-md-5 pt-2 rounded-4 mercado">
          <div>
            <p class="d-none d-md-block fs-1 text-center text-md-start corTextoRestauranteMercado">Mercado</p>
            <p class="d-block d-md-none fs-2 text-center text-md-start corTextoRestauranteMercado">Mercado</p>
          </div>
          <div class="row justify-content-between align-items-end">
            <div class="col-md-6 mb-3 ps-md-4">
              <div class="d-none d-md-block rounded-pill buscarLojas">
                <p class="corTextoRestauranteMercado">Buscar lojas</p>
              </div>
            </div>
            <div class="col-md-6">
              <img src="images/Mercado.png" class="img-fluid mb-2 mb-md-0">
            </div>
            <div class="col-md-6 mb-3 ps-md-4">
              <div class="d-block d-md-none rounded-pill buscarLojas">
                <p class="corTextoRestauranteMercado m-0">Buscar lojas</p>
              </div>
            </div>
          </div>
        </button>
      </div>
    </div>
    <div class="mx-md-5 mt-5 justify-content-center">
      <div class="row mx-md-5 justify-content-around bebidasFarmaciaPetshop">
        <div class="col-3 col-md-4 p-0 d-flex justify-content-center">
          <button class="botaoBebidasFarmaciaPetshop row p-0 m-0">
            <div class="fundoBotaoBebida rounded-4 h-25 d-flex align-items-end justify-content-center">
              <img src="images/drinks.png" class="img-fluid">
            </div>
            <div>
              <p>Bebidas</p>
            </div>
          </button>
        </div>
        <div class="col-3 col-md-4 p-0 d-flex justify-content-center">
          <button class="botaoBebidasFarmaciaPetshop row p-0 m-0">
            <div class="fundoBotaoFarmacia rounded-4 h-25 d-flex align-items-end justify-content-center">
              <img src="images/pharmacy.png" class="img-fluid">
            </div>
            <div>
              <p>Bebidas</p>
            </div>
          </button>
        </div>
        <div class="col-3 col-md-4 p-0 d-flex justify-content-center">
          <button class="botaoBebidasFarmaciaPetshop row p-0 m-0">
            <div class="fundoBotaoPetshop rounded-4 h-25 d-flex align-items-end justify-content-center">
              <img src="images/petshop.png" class="img-fluid">
            </div>
            <div>
              <p>Bebidas</p>
            </div>
          </button>
        </div>
      </div>
    </div>
    <hr>
    <div>
      <p class="fw-bold fs-4">Os melhores restaurantes</p>
    </div>
    <div class="my-5">
      <div id="carousel" class="carousel slide d-block d-sm-none">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row justify-content-around">
              <div class="col-8 p-0">
                <a href="#" class="links">
                  <div class="row border border-dark rounded-3 cardEstabelecimento">
                    <div class="localFoto col-4 d-flex align-items-center">
                      <div class="rounded-circle overflow-hidden"><img src="images/mcdonalds.jpg" class="img-fluid"></div>
                    </div>
                    <div class="localNomesDescricao col-8 d-flex flex-column">
                      <div><p class="mb-0 mt-4 estabelecimentoNomes">Mcdonald's</p></div>
                      <div><p class="mb-4 estabelecimentoTipo">Lanches</p></div>
                    </div>
                  </div>
                </a>
              </div>
               
            </div>
          </div>
          <div class="carousel-item">
            <div class="row justify-content-around">
              <div class="col-8 p-0">
                <a href="#" class="links">
                  <div class="row border border-dark rounded-3 cardEstabelecimento">
                    <div class="localFoto col-4 d-flex align-items-center">
                      <div class="rounded-circle overflow-hidden"><img src="images/cocobambu.jpg" class="img-fluid"></div>
                    </div>
                    <div class="localNomesDescricao col-8 d-flex flex-column">
                      <div><p class="mb-0 mt-4 estabelecimentoNomes">Coco Bambu</p></div>
                      <div><p class="mb-4 estabelecimentoTipo">Frutos do mar</p></div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row justify-content-around">
              <div class="col-8 p-0">
                <a href="#" class="links">
                  <div class="row border border-dark rounded-3 cardEstabelecimento">
                    <div class="localFoto col-4 d-flex align-items-center">
                      <div class="rounded-circle overflow-hidden"><img src="images/chinainbox.jpg" class="img-fluid"></div>
                    </div>
                    <div class="localNomesDescricao col-8 d-flex flex-column">
                      <div><p class="mb-0 mt-4 estabelecimentoNomes">China in Box</p></div>
                      <div><p class="mb-4 estabelecimentoTipo">Chinesa</p></div>
                    </div>
                  </div>
                </a>
              </div> 
            </div>
          </div>
          <div class="carousel-item">
            <div class="row justify-content-around">
              <div class="col-8 p-0">
                <a href="#" class="links">
                  <div class="row border border-dark rounded-3 cardEstabelecimento">
                    <div class="localFoto col-4 d-flex align-items-center">
                      <div class="rounded-circle overflow-hidden"><img src="images/habibs.jpg" class="img-fluid"></div>
                    </div>
                    <div class="localNomesDescricao col-8 d-flex flex-column">
                      <div><p class="mb-0 mt-4 estabelecimentoNomes">Habib's</p></div>
                      <div><p class="mb-4 estabelecimentoTipo">Lanches</p></div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row justify-content-around">
              <div class="col-8 p-0">
                <a href="#" class="links">
                  <div class="row border border-dark rounded-3 cardEstabelecimento">
                    <div class="localFoto col-4 d-flex align-items-center">
                      <div class="rounded-circle overflow-hidden"><img src="images/outback.jpg" class="img-fluid"></div>
                    </div>
                    <div class="localNomesDescricao col-8 d-flex flex-column">
                      <div><p class="mb-0 mt-4 estabelecimentoNomes">Outback Steakhouse</p></div>
                      <div><p class="mb-4 estabelecimentoTipo">Lanches</p></div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div id="carouselSm" class="carousel slide d-none d-sm-block d-md-none">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row justify-content-around">
              <div class="col-4 p-0">
                <a href="#" class="links">
                  <div class="row border border-dark rounded-3 cardEstabelecimento">
                    <div class="localFoto col-4 d-flex align-items-center">
                      <div class="rounded-circle overflow-hidden"><img src="images/mcdonalds.jpg" class="img-fluid"></div>
                    </div>
                    <div class="localNomesDescricao col-8 d-flex flex-column">
                      <div><p class="mb-0 mt-4 estabelecimentoNomes">Mcdonald's</p></div>
                      <div><p class="mb-4 estabelecimentoTipo">Lanches</p></div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-4 p-0 d-none d-sm-block">
                <a href="#" class="links">
                  <div class="row border border-dark rounded-3 cardEstabelecimento">
                    <div class="localFoto col-4 d-flex align-items-center">
                      <div class="rounded-circle overflow-hidden"><img src="images/cocobambu.jpg" class="img-fluid"></div>
                    </div>
                    <div class="localNomesDescricao col-8 d-flex flex-column">
                      <div><p class="mb-0 mt-4 estabelecimentoNomes">Coco Bambu</p></div>
                      <div><p class="mb-4 estabelecimentoTipo">Frutos do mar</p></div>
                    </div>
                  </div>
                </a>
              </div> 
            </div>
          </div>
          <div class="carousel-item">
            <div class="row justify-content-around">
              <div class="col-4 p-0">
                <a href="#" class="links">
                  <div class="row border border-dark rounded-3 cardEstabelecimento">
                    <div class="localFoto col-4 d-flex align-items-center">
                      <div class="rounded-circle overflow-hidden"><img src="images/chinainbox.jpg" class="img-fluid"></div>
                    </div>
                    <div class="localNomesDescricao col-8 d-flex flex-column">
                      <div><p class="mb-0 mt-4 estabelecimentoNomes">China in Box</p></div>
                      <div><p class="mb-4 estabelecimentoTipo">Chinesa</p></div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-4 p-0">
                <a href="#" class="links">
                  <div class="row border border-dark rounded-3 cardEstabelecimento">
                    <div class="localFoto col-4 d-flex align-items-center">
                      <div class="rounded-circle overflow-hidden"><img src="images/habibs.jpg" class="img-fluid"></div>
                    </div>
                    <div class="localNomesDescricao col-8 d-flex flex-column">
                      <div><p class="mb-0 mt-4 estabelecimentoNomes">Habib's</p></div>
                      <div><p class="mb-4 estabelecimentoTipo">Lanches</p></div>
                    </div>
                  </div>
                </a>
              </div>
              
            </div>
          </div>
          <div class="carousel-item">
            <div class="row justify-content-around">
              <div class="col-5 p-0">
                <a href="#" class="links">
                  <div class="row border border-dark rounded-3 cardEstabelecimento">
                    <div class="localFoto col-4 d-flex align-items-center">
                      <div class="rounded-circle overflow-hidden"><img src="images/outback.jpg" class="img-fluid"></div>
                    </div>
                    <div class="localNomesDescricao col-8 d-flex flex-column">
                      <div><p class="mb-0 mt-4 estabelecimentoNomes">Outback Steakhouse</p></div>
                      <div><p class="mb-4 estabelecimentoTipo">Lanches</p></div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselSm" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselSm" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div id="carouselMd" class="carousel slide d-none d-md-block d-lg-none">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row justify-content-around">
              <div class="col-3 p-0">
                <a href="#" class="links">
                  <div class="row border border-dark rounded-3 cardEstabelecimento">
                    <div class="localFoto col-4 d-flex align-items-center">
                      <div class="rounded-circle overflow-hidden"><img src="images/mcdonalds.jpg" class="img-fluid"></div>
                    </div>
                    <div class="localNomesDescricao col-8 d-flex flex-column">
                      <div><p class="mb-0 mt-4 estabelecimentoNomes">Mcdonald's</p></div>
                      <div><p class="mb-4 estabelecimentoTipo">Lanches</p></div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-3 p-0">
                <a href="#" class="links">
                  <div class="row border border-dark rounded-3 cardEstabelecimento">
                    <div class="localFoto col-4 d-flex align-items-center">
                      <div class="rounded-circle overflow-hidden"><img src="images/cocobambu.jpg" class="img-fluid"></div>
                    </div>
                    <div class="localNomesDescricao col-8 d-flex flex-column">
                      <div><p class="mb-0 mt-4 estabelecimentoNomes">Coco Bambu</p></div>
                      <div><p class="mb-4 estabelecimentoTipo">Frutos do mar</p></div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-3 p-0">
                <a href="#" class="links">
                  <div class="row border border-dark rounded-3 cardEstabelecimento">
                    <div class="localFoto col-4 d-flex align-items-center">
                      <div class="rounded-circle overflow-hidden"><img src="images/chinainbox.jpg" class="img-fluid"></div>
                    </div>
                    <div class="localNomesDescricao col-8 d-flex flex-column">
                      <div><p class="mb-0 mt-4 estabelecimentoNomes">China in Box</p></div>
                      <div><p class="mb-4 estabelecimentoTipo">Chinesa</p></div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row justify-content-around">
              <div class="col-4 p-0">
                <a href="#" class="links">
                  <div class="row border border-dark rounded-3 cardEstabelecimento">
                    <div class="localFoto col-4 d-flex align-items-center">
                      <div class="rounded-circle overflow-hidden"><img src="images/habibs.jpg" class="img-fluid"></div>
                    </div>
                    <div class="localNomesDescricao col-8 d-flex flex-column">
                      <div><p class="mb-0 mt-4 estabelecimentoNomes">Habib's</p></div>
                      <div><p class="mb-4 estabelecimentoTipo">Lanches</p></div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-4 p-0">
                <a href="#" class="links">
                  <div class="row border border-dark rounded-3 cardEstabelecimento">
                    <div class="localFoto col-4 d-flex align-items-center">
                      <div class="rounded-circle overflow-hidden"><img src="images/outback.jpg" class="img-fluid"></div>
                    </div>
                    <div class="localNomesDescricao col-8 d-flex flex-column">
                      <div><p class="mb-0 mt-4 estabelecimentoNomes">Outback Steakhouse</p></div>
                      <div><p class="mb-4 estabelecimentoTipo">Lanches</p></div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselMd" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselMd" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div id="carouselLg" class="carousel slide d-none d-lg-block d-xl-none">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row justify-content-around">
              <div class="col-3 p-0">
                <a href="#" class="links">
                  <div class="row border border-dark rounded-3 cardEstabelecimento">
                    <div class="localFoto col-4 d-flex align-items-center">
                      <div class="rounded-circle overflow-hidden"><img src="images/mcdonalds.jpg" class="img-fluid"></div>
                    </div>
                    <div class="localNomesDescricao col-8 d-flex flex-column">
                      <div><p class="mb-0 mt-4 estabelecimentoNomes">Mcdonald's</p></div>
                      <div><p class="mb-4 estabelecimentoTipo">Lanches</p></div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-3 p-0">
                <a href="#" class="links">
                  <div class="row border border-dark rounded-3 cardEstabelecimento">
                    <div class="localFoto col-4 d-flex align-items-center">
                      <div class="rounded-circle overflow-hidden"><img src="images/cocobambu.jpg" class="img-fluid"></div>
                    </div>
                    <div class="localNomesDescricao col-8 d-flex flex-column">
                      <div><p class="mb-0 mt-4 estabelecimentoNomes">Coco Bambu</p></div>
                      <div><p class="mb-4 estabelecimentoTipo">Frutos do mar</p></div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-3 p-0">
                <a href="#" class="links">
                  <div class="row border border-dark rounded-3 cardEstabelecimento">
                    <div class="localFoto col-4 d-flex align-items-center">
                      <div class="rounded-circle overflow-hidden"><img src="images/chinainbox.jpg" class="img-fluid"></div>
                    </div>
                    <div class="localNomesDescricao col-8 d-flex flex-column">
                      <div><p class="mb-0 mt-4 estabelecimentoNomes">China in Box</p></div>
                      <div><p class="mb-4 estabelecimentoTipo">Chinesa</p></div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row justify-content-around">
              <div class="col-3 p-0">
                <a href="#" class="links">
                  <div class="row border border-dark rounded-3 cardEstabelecimento">
                    <div class="localFoto col-4 d-flex align-items-center">
                      <div class="rounded-circle overflow-hidden"><img src="images/habibs.jpg" class="img-fluid"></div>
                    </div>
                    <div class="localNomesDescricao col-8 d-flex flex-column">
                      <div><p class="mb-0 mt-4 estabelecimentoNomes">Habib's</p></div>
                      <div><p class="mb-4 estabelecimentoTipo">Lanches</p></div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-3 p-0">
                <a href="#" class="links">
                  <div class="row border border-dark rounded-3 cardEstabelecimento">
                    <div class="localFoto col-4 d-flex align-items-center">
                      <div class="rounded-circle overflow-hidden"><img src="images/outback.jpg" class="img-fluid"></div>
                    </div>
                    <div class="localNomesDescricao col-8 d-flex flex-column">
                      <div><p class="mb-0 mt-4 estabelecimentoNomes">Outback Steakhouse</p></div>
                      <div><p class="mb-4 estabelecimentoTipo">Lanches</p></div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselLg" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselLg" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div id="carouselXl" class="carousel slide d-none d-xl-block">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row justify-content-around mx-3">
              <div class="col-2 p-0">
                <a href="#" class="links">
                  <div class="row border border-dark rounded-3 cardEstabelecimento">
                    <div class="localFoto col-4 d-flex align-items-center">
                      <div class="rounded-circle overflow-hidden"><img src="images/mcdonalds.jpg" class="img-fluid"></div>
                    </div>
                    <div class="localNomesDescricao col-8 d-flex flex-column">
                      <div><p class="mb-0 mt-4 estabelecimentoNomes">Mcdonald's</p></div>
                      <div><p class="mb-4 estabelecimentoTipo">Lanches</p></div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-2 p-0">
                <a href="#" class="links">
                  <div class="row border border-dark rounded-3 cardEstabelecimento">
                    <div class="localFoto col-4 d-flex align-items-center">
                      <div class="rounded-circle overflow-hidden"><img src="images/cocobambu.jpg" class="img-fluid"></div>
                    </div>
                    <div class="localNomesDescricao col-8 d-flex flex-column">
                      <div><p class="mb-0 mt-4 estabelecimentoNomes">Coco Bambu</p></div>
                      <div><p class="mb-4 estabelecimentoTipo">Frutos do mar</p></div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-2 p-0">
                <a href="#" class="links">
                  <div class="row border border-dark rounded-3 cardEstabelecimento">
                    <div class="localFoto col-4 d-flex align-items-center">
                      <div class="rounded-circle overflow-hidden"><img src="images/chinainbox.jpg" class="img-fluid"></div>
                    </div>
                    <div class="localNomesDescricao col-8 d-flex flex-column">
                      <div><p class="mb-0 mt-4 estabelecimentoNomes">China in Box</p></div>
                      <div><p class="mb-4 estabelecimentoTipo">Chinesa</p></div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-2 p-0">
                <a href="#" class="links">
                  <div class="row border border-dark rounded-3 cardEstabelecimento">
                    <div class="localFoto col-4 d-flex align-items-center">
                      <div class="rounded-circle overflow-hidden"><img src="images/habibs.jpg" class="img-fluid"></div>
                    </div>
                    <div class="localNomesDescricao col-8 d-flex flex-column">
                      <div><p class="mb-0 mt-4 estabelecimentoNomes">Habib's</p></div>
                      <div><p class="mb-4 estabelecimentoTipo">Lanches</p></div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-2 p-0">
                <a href="#" class="links">
                  <div class="row border border-dark rounded-3 cardEstabelecimento">
                    <div class="localFoto col-4 d-flex align-items-center">
                      <div class="rounded-circle overflow-hidden"><img src="images/outback.jpg" class="img-fluid"></div>
                    </div>
                    <div class="localNomesDescricao col-8 d-flex flex-column">
                      <div><p class="mb-0 mt-4 estabelecimentoNomes">Outback Steakhouse</p></div>
                      <div><p class="mb-4 estabelecimentoTipo">Lanches</p></div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselXl" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselXl" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <div class="mb-5">
      <div id="carouselBanner" class="carousel slide d-block d-md-none">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="col-12 d-flex justify-content-center">
              <a href="#">
                <img src="images/bannerinicial1.png" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="carousel-item">
            <div class="col-12 d-flex justify-content-center">
              <a href="#">
                <img src="images/bannerinicial2.png" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="carousel-item">
            <div class="col-12 d-flex justify-content-center">
              <a href="#">
                <img src="images/bannerinicial3.png" class="img-fluid">
              </a>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselBanner" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselBanner" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div class="row justify-content-between d-none d-md-flex">
        <div class="col-4">
          <a href="#">
            <img src="images/bannerinicial1.png" class="img-fluid">
          </a>
        </div>
        <div class="col-4">
          <a href="#">
            <img src="images/bannerinicial2.png" class="img-fluid">
          </a>
        </div>
        <div class="col-4">
          <a href="#">
            <img src="images/bannerinicial3.png" class="img-fluid">
          </a>
        </div>
      </div>
    <div class="mt-5">
      <p class="fs-4 fw-bold">Os melhores mercados</p>
    </div>
    <div class="row my-5">
      <div id="carouselMercado" class="carousel slide d-block d-sm-none">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="d-flex justify-content-center">
              <div class="col-7 me-4">
                <a href="#" class="links">
                  <div class="row border border-dark rounded-3 cardEstabelecimento">
                    <div class="localFoto col-4 d-flex align-items-center">
                      <div class="rounded-circle overflow-hidden"><img src="images/dia.png" class="img-fluid"></div>
                    </div>
                    <div class="localNomesDescricao col-8 d-flex flex-column">
                      <div><p class="mb-4 mt-4 estabelecimentoNomes">Dia Supermercado</p></div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="d-flex justify-content-center">
              <div class="col-7 me-4">
                <a href="#" class="links">
                  <div class="row border border-dark rounded-3 cardEstabelecimento">
                    <div class="localFoto col-4 d-flex align-items-center">
                      <div class="rounded-circle overflow-hidden"><img src="images/big.png" class="img-fluid"></div>
                    </div>
                    <div class="localNomesDescricao col-8 d-flex flex-column">
                      <div><p class="mb-4 mt-4 estabelecimentoNomes">Big</p></div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="carousel-item justify-content-center">
            <div class="d-flex justify-content-center">
              <div class="col-7 me-4">
                <a href="#" class="links">
                  <div class="row border border-dark rounded-3 cardEstabelecimento">
                    <div class="localFoto col-4 d-flex align-items-center">
                      <div class="rounded-circle overflow-hidden"><img src="images/eataly.png" class="img-fluid"></div>
                    </div>
                    <div class="localNomesDescricao col-8 d-flex flex-column">
                      <div><p class="mb-4 mt-4 estabelecimentoNomes">Eataly</p></div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselMercado" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselMercado" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div id="carouselMercadoSm" class="carousel slide d-none d-sm-block d-md-none">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="d-flex justify-content-around">
              <div class="col-5">
                <a href="#" class="links">
                  <div class="row border border-dark rounded-3 cardEstabelecimento">
                    <div class="localFoto col-4 d-flex align-items-center">
                      <div class="rounded-circle overflow-hidden"><img src="images/dia.png" class="img-fluid"></div>
                    </div>
                    <div class="localNomesDescricao col-8 d-flex flex-column">
                      <div><p class="mb-4 mt-4 estabelecimentoNomes">Dia Supermercado</p></div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-5">
                <a href="#" class="links">
                  <div class="row border border-dark rounded-3 cardEstabelecimento">
                    <div class="localFoto col-4 d-flex align-items-center">
                      <div class="rounded-circle overflow-hidden"><img src="images/big.png" class="img-fluid"></div>
                    </div>
                    <div class="localNomesDescricao col-8 d-flex flex-column">
                      <div><p class="mb-4 mt-4 estabelecimentoNomes">Big</p></div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="carousel-item justify-content-center">
            <div class="d-flex justify-content-center">
              <div class="col-5">
                <a href="#" class="links">
                  <div class="row border border-dark rounded-3 cardEstabelecimento">
                    <div class="localFoto col-4 d-flex align-items-center">
                      <div class="rounded-circle overflow-hidden"><img src="images/eataly.png" class="img-fluid"></div>
                    </div>
                    <div class="localNomesDescricao col-8 d-flex flex-column">
                      <div><p class="mb-4 mt-4 estabelecimentoNomes">Eataly</p></div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselMercadoSm" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselMercadoSm" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div class="row justify-content-start d-none d-md-flex">
        <div class="col-4 col-md-3 me-md-4">
          <a href="#" class="links">
            <div class="row border border-dark rounded-3 cardEstabelecimento">
              <div class="localFoto col-4 d-flex align-items-center">
                <div class="rounded-circle overflow-hidden"><img src="images/dia.png" class="img-fluid"></div>
              </div>
              <div class="localNomesDescricao col-8 d-flex flex-column">
                <div><p class="mb-4 mt-4 estabelecimentoNomes">Dia Supermercado</p></div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-4 col-md-3 me-md-4">
          <a href="#" class="links">
            <div class="row border border-dark rounded-3 cardEstabelecimento">
              <div class="localFoto col-4 d-flex align-items-center">
                <div class="rounded-circle overflow-hidden"><img src="images/big.png" class="img-fluid"></div>
              </div>
              <div class="localNomesDescricao col-8 d-flex flex-column">
                <div><p class="mb-4 mt-4 estabelecimentoNomes">Big</p></div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-4 col-md-3 me-md-4">
          <a href="#" class="links">
            <div class="row border border-dark rounded-3 cardEstabelecimento">
              <div class="localFoto col-4 d-flex align-items-center">
                <div class="rounded-circle overflow-hidden"><img src="images/eataly.png" class="img-fluid"></div>
              </div>
              <div class="localNomesDescricao col-8 d-flex flex-column">
                <div><p class="mb-4 mt-4 estabelecimentoNomes">Eataly</p></div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
    <div class="row linhaEntregadorEstabelecimento">
      <div class="entregador col-12 col-lg-6 row">
        <div class="imagem col-6">
          <img src="images/entregador.png" class="img-fluid">
        </div>
        <div class="Frases d-flex flex-column col-6">
          <div>
            <p class="fw-bold fs-2 d-none d-md-block">Quer fazer entregas pelo myFood2?</p>
            <p class="fw-bold fs-5 d-block d-md-none">Quer fazer entregas pelo myFood2?</p>
          </div>
          <div>
            <p class="fs-5 d-none d-md-block">Faça agora o seu cadastro e comece o quanto antes.</p>
            <p class="fs-6 d-block d-md-none">Faça agora o seu cadastro e comece o quanto antes.</p>
          </div>
          <div><a href="#"><button class="btn btn-danger botaoPadrao">Saiba Mais</button></a></div>
        </div>
      </div>
      <div class="estabelecimento col-12 col-lg-6 row mt-5 mt-md-0">
        <div class="imagem col-6">
          <img src="images/estabelecimentos.png" class="img-fluid">
        </div>
        <div class="Frases d-flex flex-column col-6">
          <div>
            <p class="fw-bold fs-2 d-none d-md-block">A sua fome de crescer ta no myFood2</p>
            <p class="fw-bold fs-5 d-block d-md-none">A sua fome de crescer ta no myFood2</p>
          </div>
          <div>
            <p class="fs-5 d-none d-md-block">Cadastre seu restaurante ou seu mercado.</p>
            <p class="fs-6 d-block d-md-none">Cadastre seu restaurante ou seu mercado.</p>
          </div>
          <div><a href="#"><button class="btn btn-danger botaoPadrao">Saiba Mais</button></a></div>
        </div>
      </div>
    </div>
    <hr>
    <div class="row justify-content-center mt-5 d-none d-md-flex">
      <div class="flex-column col-3">
        <div><p class="fw-bold fs-2">Você tem fome do quê?</p></div>
        <div><p class="fs-6">Descura como é ser um myFoodLover e faça parte da nossa revolução!</p></div>
        <div><a href="#"><button class="btn btn-danger botaoPadrao">Saiba mais</button></a></div>
      </div>
      <div class="col-7">
        <img src="images/foodloverBanner.png" class="img-fluid">
      </div>
    </div>
    <div class="d-flex d-md-none flex-column align-items-center">
      <div><p class="fw-bold fs-5">Você tem fome do quê?</p></div>
      <div><img src="images/foodloverBanner.png" class="img-fluid"></div>
      <div class="col-9 mt-3"><p class="text-center">Descubra como é ser um myFoodLover e faça parte da nossa revolução!</p></div>
      <div><a href="#"><button class="btn btn-danger botaoPadrao">Saiba mais</button></a></div>
    </div>
    <div class="d-none d-lg-flex my-5 col-10 mx-auto justify-content-center">
      <img src="images/myfoodBenefits.png" class="img-fluid">
    </div>
    <div class="d-flex d-lg-none my-5">
      <img src="images/myfoodBenefitsMobile.webp" class="img-fluid">
    </div>
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