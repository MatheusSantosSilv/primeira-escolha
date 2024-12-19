<!DOCTYPE html>
<html lang="pt-br">
@include('include.head', ['title' => 'Catálogo'])

<style>
    .bg-catalogo {
        display: flex;
        width: 100%;
        height: 30%;
        background-image: url('/images/bg-catalogo.svg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position-x: center;
    }

    .catalogo-container {
        display: flex;
        flex-wrap: wrap;
        height: 100%;
        width: 100%;

    }

    .filter-wrap {
        width: 20%;
        height: 100%;
        background-color: yellow;
    }

    .produto-wrap {
        display: flex;
        flex-wrap: wrap;
        width: 80%;
        padding: 1%;
    }

    .container-card-produto {
        display: flex;
        flex-wrap: wrap;
        width: 25%;
        height: 370px;
        padding: 3px;

    }

    .card-produto {
        width: 100%;
        height: 100%;
        position: relative;

    }

    .promo-produto {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 1%;
        color: white;
        width: 50%;
        height: 8%;
        background-color: rgb(219, 47, 47);
        position: absolute;
        border-bottom-right-radius: 15px;
    }

    .promo-preco {
        color: rgb(69, 196, 118);
    }

    .past-preco {
        color: rgb(175, 175, 175);
        text-decoration: line-through;
        font-size: 80%;
    }

    .card-produto:hover img {
        transform: scale(1.1);
    }

    .img-produto {
        width: 100%;
        height: 70%;
        overflow: hidden;
        background-color: rgb(243, 243, 243);
    }

    .title-produto {
        display: flex;
        width: 100%;
        font-size: 100%;
        font-family: garamond;
        height: 15%;
        margin: 0;
    }

    .title-produto span {
        overflow: hidden;
        text-overflow: ellipsis;
        font-weight: 600;
    }

    .title-produto a {
        color: black;
    }

    .avaliacao-produto {
        display: flex;
        align-items: center;
        width: 100%;
        height: 7.5%;
    }

    .preco-produto {
        display: flex;
        align-items: center;
        width: 100%;
        font-weight: 600;
        height: 7.5%;
        gap: 5%;
    }

    .img-produto-image {
        width: 100%;
        transition: 0.3s ease;
        height: 100%;
        object-fit: cover;
    }
</style>

<body>
    @include('include.nav')
    <div class="container">
        <div class="bg-catalogo">

        </div>
        <div class="catalogo-container">
            <div class="filter-wrap">

            </div>
            <div class="produto-wrap">
                <div class="container-card-produto">
                    <div class="card-produto">
                        <span class="promo-produto">
                            Caiu de preço!
                        </span>
                        <div class="img-produto">
                            <img src="{{ asset('images/img-card-teste.png') }}" class="img-produto-image">
                        </div>
                        <div class="title-produto">
                            <span><a href="caminhoproproduto">Solitária prata 925 com pedra em zircônia</a></span>
                        </div>
                        <div class="avaliacao-produto">
                            <span class="fa fa-star fa-sm"></span>
                            <span class="fa fa-star fa-sm"></span>
                            <span class="fa fa-star fa-sm"></span>
                            <span class="fa fa-star fa-sm"></span>
                            <span class="fa fa-star fa-sm"></span>
                        </div>
                        <div class="preco-produto">

                            <span class="promo-preco">R$229,90</span>
                            <span class="past-preco">R$299,90</span>
                        </div>
                       
                    </div>
                </div>
                <div class="container-card-produto">
                    <div class="card-produto">
                        <div class="img-produto">
                            <img src="{{ asset('images/img-card-teste.png') }}" class="img-produto-image">
                        </div>
                        <div class="title-produto">
                            <span><a href="caminhoproproduto">Solitária prata 925 com pedra em zircônia</a></span>
                        </div>
                        <div class="avaliacao-produto">
                            <span class="fa fa-star fa-sm"></span>
                            <span class="fa fa-star fa-sm"></span>
                            <span class="fa fa-star fa-sm"></span>
                            <span class="fa fa-star fa-sm"></span>
                            <span class="fa fa-star fa-sm"></span>
                        </div>
                        <div class="preco-produto">
                            R$299,90
                        </div>
                       
                    </div>
                </div>
                <div class="container-card-produto">
                    <div class="card-produto">
                        <div class="img-produto">
                            <img src="{{ asset('images/img-card-teste.png') }}" class="img-produto-image">
                        </div>
                        <div class="title-produto">
                            <span><a href="caminhoproproduto">Solitária prata 925 com pedra em zircônia</a></span>
                        </div>
                        <div class="avaliacao-produto">
                            <span class="fa fa-star fa-sm"></span>
                            <span class="fa fa-star fa-sm"></span>
                            <span class="fa fa-star fa-sm"></span>
                            <span class="fa fa-star fa-sm"></span>
                            <span class="fa fa-star fa-sm"></span>
                        </div>
                        <div class="preco-produto">
                            R$299,90
                        </div>
                        
                    </div>
                </div>
                <div class="container-card-produto">
                    <div class="card-produto">
                        <div class="img-produto">
                            <img src="{{ asset('images/img-card-teste.png') }}" class="img-produto-image">
                        </div>
                        <div class="title-produto">
                            <span><a href="caminhoproproduto">Solitária prata 925 com pedra em zircônia</a></span>
                        </div>
                        <div class="avaliacao-produto">
                            <span class="fa fa-star fa-sm"></span>
                            <span class="fa fa-star fa-sm"></span>
                            <span class="fa fa-star fa-sm"></span>
                            <span class="fa fa-star fa-sm"></span>
                            <span class="fa fa-star fa-sm"></span>
                        </div>
                        <div class="preco-produto">
                            R$299,90
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>