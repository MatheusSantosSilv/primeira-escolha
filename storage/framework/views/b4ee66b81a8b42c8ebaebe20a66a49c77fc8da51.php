<!DOCTYPE html>
<html lang="pt-br">

<?php echo $__env->make('include.head', ['title' => 'Jóias Primeira Escolha'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<style>
    .welcomeBg {
        display: flex;
        background-image: url('/images/bghome.webp');
        background-repeat: no-repeat;
        background-size: cover;
    }

    section {
        position: relative;
        height: 90%;
        width: 100%;
        display: flex;
        flex-wrap: wrap;
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
        padding: 4%;

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
        flex-wrap: wrap;
        width: 13%;
        overflow: hidden;
        justify-content: center;
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
        height: 10%;
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
        border: 1% solid grey;
        width: 50%;
        margin: 0;
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
        width: 100%;
        flex-wrap: wrap;
        justify-content: center;
    }

    .section-left {
        display: flex;
        flex-wrap: wrap;
        width: 70%;
        height: 100%;
    }

    .container-presentes {
        display: flex;
        flex-wrap: wrap;
        width: 100%;
        height: 80%;
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
        height: 30%;
        background-color: rgb(22, 22, 22);
    }

    .container-dinamica {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        width: 100%;
        height: 100%;
    }

    .item-dinamica {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        color: white;
        width: 33%;
        height: 100%;
        padding: 2%;
    }

    .item-dinamica strong {
        display: flex;
        justify-self: center;
        width: 100%;
    }

    .item-dinamica p {
        font-size: 80%;
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
        display: block;
        flex-wrap: wrap;
        justify-content: center;
        padding: 1%;
    }

    .welcome-display img {
        width: 100%;
        height: 50%;
    }

    .welcome-wrap {
        width: 100%;
        height: 100%;
        text-align: center;
    }

    .welcome-wrap h1 {
        font-family: 'Times New Roman', Times, serif;
        font-weight: 100;
        color: white;
        font-size: 5vh;

    }
</style>

<body class="welcomeBg">
    <div class="container">
        <section>
            <?php echo $__env->make('include.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="welcome-display">
                <div class="welcome-wrap">
                    <img src="<?php echo e(asset('images/logo-branca.svg')); ?>">
                    <h1>A sua primeira escolha.</h1>
                </div>
            </div>
            <div class="transition-section"></div>
        </section>
        <section class="section-2">
            <div class="title">Compre por categorias</div>
            <div class="subtitle">Prata | Ouro</div>
            <div class="home-categorias">
                <div class="target-container target">
                    <div class="card-categorias">
                        <img src="<?php echo e(asset('images/colares-img.svg')); ?>">
                        <hr>
                        <span class="legenda-categorias">Colares</span>
                    </div>
                    <div class="card-categorias">
                        <img src="<?php echo e(asset('images/cordoes-img.svg')); ?>">
                        <hr>
                        <span class="legenda-categorias">Cordões</span>
                    </div>
                    <div class="card-categorias">
                        <img src="<?php echo e(asset('images/pulseira-img.svg')); ?>">
                        <hr>
                        <span class="legenda-categorias">Pulseiras</span>
                    </div>
                    <div class="card-categorias">
                        <img src="<?php echo e(asset('images/brincos-img.svg')); ?>">
                        <hr>
                        <span class="legenda-categorias">Brincos</span>
                    </div>
                    <div class="card-categorias">
                        <img src="<?php echo e(asset('images/aneis-img.svg')); ?>">
                        <hr>
                        <span class="legenda-categorias">Anéis</span>
                    </div>
                    <div class="card-categorias">
                        <img src="<?php echo e(asset('images/aliancas-img.svg')); ?>">
                        <hr>
                        <span class="legenda-categorias">Alianças</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-3">
            <div class="section-left ">
                <div class="title-section target">
                    <div class="title">
                        <p>Guia de presentes</p>
                    </div>
                    <div class="subtitle">Presenteie quem você ama com jóias deslumbrantes, prata ou ouro.</div>
                    <div class="container-presentes">
                        <div class="card-presentes x3">
                            <img src="<?php echo e(asset('images/presente-ela.svg')); ?>">
                        </div>
                        <div class="card-presentes x2">
                            <img src="<?php echo e(asset('images/presente-ele.svg')); ?>">
                        </div>
                        <div class="card-presentes x1">
                            <img src="<?php echo e(asset('images/pecas-ouro.svg')); ?>">
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <div class="info-dinamica">
            <div class="container-dinamica">
                <div class="item-dinamica">
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
                <div class="item-dinamica">
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
                <div class="item-dinamica">
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

        </section>
    </div>
    <script src="<?php echo e(asset('styles.js')); ?>"></script>
</body>

</html><?php /**PATH C:\laravel\primeiraEscolha\resources\views/welcome.blade.php ENDPATH**/ ?>