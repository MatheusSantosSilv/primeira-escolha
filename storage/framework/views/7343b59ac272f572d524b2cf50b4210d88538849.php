<!DOCTYPE html>
<html lang="pt-br">
<?php echo $__env->make('include.head', ['title' => 'Catálogo'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
        background-color: red;
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
        height: 100%;
        background-color: blue;
        padding: 1%;
    }

    .container-card-produto {
        align-items: flex-start; /* Alinha os elementos ao topo */
        display: flex;
        flex-wrap: wrap;
        width: 25%;
        height: 300px;
        padding: 3px;
        background-color: blueviolet;
    }

    .card-produto {
        width: 100%;
        height: 100%;
        background-color: green;
    }
</style>

<body>
    <?php echo $__env->make('include.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container">
        <div class="bg-catalogo">

        </div>
        <div class="catalogo-container">
            <div class="filter-wrap">

            </div>
            <div class="produto-wrap">
                <div class="container-card-produto">
                    <div class="card-produto">

                    </div>
                </div>
                <div class="container-card-produto">
                    <div class="card-produto">

                    </div>
                </div>
                <div class="container-card-produto">
                    <div class="card-produto">

                    </div>
                </div>
                <div class="container-card-produto">
                    <div class="card-produto">

                    </div>
                </div>
                <div class="container-card-produto">
                    <div class="card-produto">

                    </div>
                </div>
                <div class="container-card-produto">
                    <div class="card-produto">

                    </div>
                </div>
                <div class="container-card-produto">
                    <div class="card-produto">

                    </div>
                </div>
                <div class="container-card-produto">
                    <div class="card-produto">

                    </div>
                </div>
                <div class="container-card-produto">
                    <div class="card-produto">

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html><?php /**PATH C:\laravel\primeiraEscolha\resources\views/catalogo.blade.php ENDPATH**/ ?>