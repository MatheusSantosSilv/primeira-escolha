<!DOCTYPE html>
<html lang="pt-br">

@include('include.head', ['title' => 'Jóias Primeira Escolha'])

<style>
    .welcomeBg {
        display: flex;
        
    }


    .section-2 {
        flex-wrap: wrap;
        display: flex;
        background-color: white;
        justify-content: center;
        height: 70%
    }

    .section-3 {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        width: 100%;
        height: 100%;
        padding: 2%;

    }

    .home-categorias {
        display: flex;
        flex-wrap: wrap;
        width: 100%;
        height: 70%;
        align-content: center;
        justify-content: center;
        overflow: hidden;
    }

    .card-categorias {
        display: flex;
        flex-direction: column;
        gap: 4%;
        flex-wrap: wrap;
        width: 13%;
        height: 80%;
        overflow: hidden;
        align-items: center;
    }

    .card-categorias img {
        transition: 0.2s ease-in-out;
        width: 100%;
        height: 70%;
        object-fit: cover;
    }

    .card-categorias:hover {
        transition: 0.5s ease;

    }

    .card-categorias:hover img {
        transform: scale(1.1);
    }

    .legenda-categorias {
        background-color: white;
        color: black;
        display: flex;
        justify-content: center;
        padding: 1%;
        width: 80%;
        height: 15%;
        transition: 0.3s ease;
    }

    .card-categorias:hover .legenda-categorias {
        background-color: black;
        color: white;
    }

    hr {
        align-self: center;
        justify-self: center;
        display: flex;
        border: 1px solid rgb(221, 221, 221);
        width: 30%;
        margin: 0;
        transition: 0.3s ease;
    }

    .card-categorias:hover hr {
        width: 80%;
    }

    .inverse-transition-section {
        position: absolute;
        background-image: linear-gradient(to bottom, rgb(255, 255, 255) 0%, rgba(255, 255, 255, 0) 100%);
        width: 100%;
        height: 15%;
        top: 0;

    }

    .transition-section {
        position: absolute;
        background-image: linear-gradient(to top, rgb(255, 255, 255) 0%, rgba(255, 255, 255, 0) 100%);
        width: 100%;
        height: 15%;
        bottom: 0;

    }

    .target-container {
        display: flex;
        width: 80%;
        flex-wrap: wrap;
        justify-content: center;
    }

    .section-presente {
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        width: 70%;
        height: 100%;
    }

    .container-presentes {
        display: flex;
        flex-wrap: wrap;
        width: 100%;
        height: 70%;
        gap: 1%
    }



    .x3 {
        width: 99%;
        height: 50%;
    }

    .x2 {
        width: 59%;
        height: 50%;
    }

    .x1 {
        width: 39%;
        height: 50%;
    }

    .card-presentes {
        overflow: hidden;
        background-color: gray;
        display: block;
    }

    .card-presentes img {
        object-fit: cover;
        width: 101%;
        height: 101%;
        transition: scale, 0.5s ease-in-out;
    }

    .card-presentes:hover img {
        transform: scale(1.05);
        transition: scale, 0.5s ease;
    }

    .title,
    .title p {
        height: fit-content;
        margin: 0;
    }

    .info-dinamica {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 25%;
        background-color: rgb(22, 22, 22);
    }

    .container-dinamica {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        width: 100%;
        height: 80%;
    }

    .item-dinamica {
        display: grid;
        flex-direction: column;
        text-align: center;
        flex-wrap: wrap;
        color: white;
        width: 33%;
        height: 100%;
        padding: 1%;
    }

    .item-dinamica strong {
        display: flex;
        justify-self: center;
        width: 100%;
    }

    .item-dinamica p {
        font-size: 90%;
        margin: 0;
    }

    .body-dinamica {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        text-align: center;
        justify-content: center;
    }

    .welcome-display {
        width: 100%;
        height: 100%;
        padding: 1%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .welcome-display img {
        width: 100%;
        height: 50%;
    }

    .welcome-wrap {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: left;
        text-align: left;
    }

    .align-logo {
        height: 40%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }

    .replaceable-text {
        width: 100%;
        display: flex;
        flex-direction: row;
        gap: 0.5%;
        justify-content: left;
    }

    .welcome-wrap h1 {
        font-family: 'EB Garamond';
        width: fit-content;
        font-weight: 100;
        color: white;
        font-size: 5vh;
        margin: 0;
        transition: opacity 1s ease;
    }

    #replaceable {
        width: 100%;
        font-size: x-large;
    }

    .input-newsletter {
        display: flex;
        justify-content: space-between;
        width: 100%;
        padding: 1%;
        height: auto;

    }

    .input-newsletter button {
        cursor: pointer;
        width: 30%;
        border: none;
        outline: none;
        color: white;
        background-color: rgb(0, 0, 0);
    }

    .input-newsletter input {
        width: 65%;
        outline: none;
        border: 1px solid rgb(202, 202, 202);
    }

    .bgHome{
        background-image: url('/images/bghome.webp');
        background-repeat: no-repeat;
        background-size: cover;
        height: 70%;
    }
</style>

<body class="welcomeBg">
    @include('include.nav')
    <div class="container">
        <section class="bgHome"id="section-topo">
           
        </section>
        <section class="section-2">
            <div class="title">COMPRE POR CATEGORIAS</div>
            <div class="subtitle">Prata | Ouro</div>
            <div class="home-categorias">
                <div class="target-container target">
                    <div class="card-categorias">
                        <img src="{{ asset('images/colares-img.svg') }}">
                        <hr>
                        <span class="legenda-categorias">Colares</span>
                    </div>
                    <div class="card-categorias">
                        <img src="{{ asset('images/cordoes-img.svg') }}">
                        <hr>
                        <span class="legenda-categorias">Cordões</span>
                    </div>
                    <div class="card-categorias">
                        <img src="{{ asset('images/pulseira-img.svg') }}">
                        <hr>
                        <span class="legenda-categorias">Pulseiras</span>
                    </div>
                    <div class="card-categorias">
                        <img src="{{ asset('images/brincos-img.svg') }}">
                        <hr>
                        <span class="legenda-categorias">Brincos</span>
                    </div>
                    <div class="card-categorias">
                        <img src="{{ asset('images/aneis-img.svg') }}">
                        <hr>
                        <span class="legenda-categorias">Anéis</span>
                    </div>
                    <div class="card-categorias">
                        <img src="{{ asset('images/aliancas-img.svg') }}">
                        <hr>
                        <span class="legenda-categorias">Alianças</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-3">
            <div class="section-presente ">
                <div class="title">
                    GUIA DE PRESENTES
                </div>
                <div class="subtitle">Presenteie quem você ama com jóias deslumbrantes, prata ou ouro.</div>
                <div class="container-presentes">
                    <div class="card-presentes x3">
                        <img src="{{ asset('images/presente-ela.svg') }}">
                    </div>
                    <div class="card-presentes x2">
                        <img src="{{ asset('images/presente-ele.svg') }}">
                    </div>
                    <div class="card-presentes x1">
                        <img src="{{ asset('images/pecas-ouro.svg') }}">
                    </div>
                </div>
            </div>
        </section>
        <div class="info-dinamica">
            <div class="container-dinamica">
                <div class="item-dinamica target">
                    <i class="fa-solid fa-credit-card fa-lg"></i>
                    <div class="body-dinamica">

                        <p>
                            <strong>Pague do seu jeito.</strong>
                        </p>
                        <p>
                            Pix, cartão de crédito ou boleto. Adquira suas pratas com toda a praticidade e segurança!
                        </p>
                    </div>
                </div>
                <div class="item-dinamica target">
                    <i class="fa-solid fa-truck-fast fa-lg"></i>
                    <div class="body-dinamica">
                        <p>
                            <strong>Receba com facilidade.</strong>
                        </p>
                        <p>
                            Entregamos prata em todo o Brasil via Correios, com segurança e rapidez até
                            você!
                        </p>
                    </div>
                </div>
                <div class="item-dinamica target">
                    <i class="fa-solid fa-check fa-lg"></i>
                    <div class="body-dinamica">
                        <p>
                            <strong>Fique despreocupado.</strong>
                        </p>
                        <p>
                            Nossas pratas têm garantia para oferecer a você segurança e qualidade em
                            cada compra!
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <section>
            <footer>
                <div class="footer-top">
                    <span><a href="#section-topo">Voltar ao topo</a></span>
                </div>
                <div class="footer-body">
                    <div class="footer-menu-section">
                        <ul class="link-footer">
                            <li>
                                <strong>Primeira Escolha</strong>
                            </li>
                            <li>
                                <span>
                                    Sobre nós
                                </span>
                            </li>
                            <li>
                                <span>
                                    Nosso Diferencial
                                </span>
                            </li>
                            <li>
                                <span>
                                    Serviços
                                </span>
                            </li>
                        </ul>
                        <ul class="link-footer">
                            <li>
                                <strong>Contatos</strong>
                            </li>
                            <li>
                                <span>
                                    (xx) xxxxx-xxxx
                                </span>
                            </li>
                            <li>
                                <span>
                                    primeiraescolhacontato@gmail.com
                                </span>
                            </li>
                        </ul>
                        <ul class="link-footer">
                            <li>
                                <strong class="title-footer">Informações</strong>
                            </li>
                            <li>
                                <span>
                                    <a>Políticas de garantia</a>
                                </span>
                            </li>
                            <li>
                                <span>
                                    <a>Políticas de devolução e troca</a>
                                </span>
                            </li>
                            <li>
                                <span>
                                    <a>Formas de pagamento</a>
                                </span>
                            </li>
                            <li>
                                <span>
                                    <a>Termos de privacidade</a>
                                </span>
                            </li>
                        </ul>
                        <div class="newsletter-container">
                            <span class="title-newsletter">
                                Quer ser o primeiro a saber das promoções?
                            </span>
                            <span class="subtitle-newsletter">
                                Cadastre o seu e-mail para receber ofertas de ultima mão

                            </span>
                            <div class="input-newsletter">
                                <input type="text" placeholder="E-mail">
                                <button class="btn-newsletter">Cadastrar</button>
                            </div>
                        </div>
                    </div>
                    <div class="footer-social">
                        <span>Nossas redes sociais</span>
                        <div class="link-social">
                            <a><i class="fa-brands fa-instagram"></i></a>
                            <a><i class="fa-brands fa-facebook"></i></a>
                            <a><i class="fa-brands fa-twitter"></i></a>
                            <a><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="footer-end">
                    <img src="{{ asset('images/logo-preta.svg') }}" class="footer-img-logo">
                    <div class="disclaimer-logo">
                        <span>Primeira Escolha ® 2025</span>
                        <span class="detail-text">Comércio de acessórios de prata e ouro</span>
                    </div>
                </div>
            </footer>
        </section>
    </div>
    <script src="{{ asset('styles.js') }}"></script>

</body>

</html>