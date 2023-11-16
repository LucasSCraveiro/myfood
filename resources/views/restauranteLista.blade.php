@extends('padrao')

@section('conteudo')

<div class="my-5">
    <p class="fs-3">Lanches</p>
    <div class="row my-5">
        <div class="col rounded-pill border d-flex align-items-center mx-1">
            <p class="text-center m-0 col-12">Ordenar</p>
        </div>
        <div class="col rounded-pill border d-flex align-items-center mx-1">
            <p class="text-center m-0 col-12">Pra Retirar</p>
        </div>
        <div class="col rounded-pill border d-flex align-items-center mx-1">
            <p class="text-center m-0 col-12">Entrega Grátis</p>
        </div>
        <div class="col rounded-pill border d-flex align-items-center mx-1">
            <p class="text-center m-0 col-12">Vale-refeição</p>
        </div>
        <div class="col rounded-pill border d-flex align-items-center mx-1">
            <p class="text-center m-0 col-12">Distância</p>
        </div>
        <div class="col rounded-pill border d-flex align-items-center mx-1">
            <p class="text-center m-0 col-12">Entrega Parceira</p>
        </div>
        <div class="col rounded-pill border d-flex align-items-center mx-1">
            <p class="text-center m-0 col-12">Super Restaurantes</p>
        </div>
        <div class="col rounded-pill border d-flex align-items-center mx-1">
            <p class="text-center m-0 col-12">Filtros</p>
        </div>
        <div class="col rounded-pill border d-flex align-items-center mx-1">
            <p class="text-center m-0 col-12">Limpar</p>
        </div>
    </div>
</div>
<div class="row my-5">
    <?php
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'db_larafood';

    $mysqli = new mysqli($servidor,$usuario,$senha,$banco);

    if (mysqli_connect_errno()) trigger_error(mysqli_connect_errno());

    $sql = 'SELECT nm_restaurante, qt_nota_restaurante, ds_tipo_restaurante, qt_distancia_restaurante, ds_espera_restaurante, vl_media_restaurante, ds_imagem_restaurante FROM tb_restaurante';
    $resultado = $mysqli->query($sql);
    while($restaurante = $resultado->fetch_array())
    {
        echo "<div class='col-4 d-flex justify-content-center my-2'>
            <div class='row col-12 border rounded-4 px-1 py-3 shadow zoom'>
                <div class='col-3 d-flex align-items-center rounded-circle overflow-hidden p-0'>
                    <img src='$restaurante[ds_imagem_restaurante]' class='img-fluid'>
                </div>
                <div class='col-9 d-flex flex-column'>
                    <div>
                        <p class='fw-bold m-0'>$restaurante[nm_restaurante]</p>
                    </div>
                    <div class='row my-2'>
                        <div class='col-2'>$restaurante[qt_nota_restaurante]☆</div>
                        <div class='col p-0 text-center'>$restaurante[ds_tipo_restaurante]</div>
                        <div class='col-5 text-center'>$restaurante[qt_distancia_restaurante]</div>
                    </div>
                    <div class='row'>
                        <div class='col'>$restaurante[ds_espera_restaurante]</div>
                        <div class='col'>R$$restaurante[vl_media_restaurante].00</div>
                    </div>
                </div>
            </div>
        </div>";
    }
    
        


    ?>
</div>


    @endsection

    {{-- {{$restaurante['nm_restaurante']}} --}}

    {{-- print_r($restaurante); --}}

    {{-- @foreach ($restaurante as $estabelecimento) --}}
    {{-- @for ($i = 0; $i <= 14; $i++)
        <div class="col-4 d-flex justify-content-center">
            <div class="row col-12 border border-dark rounded-4">
                <div class="col-3">
                    <img class="img-fluid">
                </div>
                <div class="col-9 d-flex flex-column">
                    <div>
                        <p class="fw-bold m-0">Estabelecimento</p>
                    </div>
                    <div class="row">
                        <div class="col">Nota</div>
                        <div class="col">Tipo</div>
                        <div class="col">Distancia</div>
                    </div>
                    <div class="row">
                        <div class="col">Tempo</div>
                        <div class="col">Preço</div>
                    </div>
                </div>
            </div>
        </div>
    @endfor --}}
{{-- <hr> --}}
    


        {{-- <div class="container-fluid">
            <div>
                <p>Lojas</p>
            </div>
            <div class="col-12 row">
                
            </div>
        </div> --}}
