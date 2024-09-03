<?php $title='System OS | Home'?>

<?php include './partials/head.php' ?>
<?php include './partials/navbar.php' ?>

    <!-- Container Principal -->
    <div class="container-fluid principal" >
        <div class="row">
            <div class="col-12">
                <div class="card cardBox padding-body">
                    <div class="card-header justify-content-center">
                        <h1 class="display-4">Gerenciamento de Ordens de Serviço</h1>
                    </div>
                    <div class="card-body my-auto">
                        <div class="row padding-row">
                            <div class="col-6 d-flex justify-content-center">
                                <a href="./frmOrdemServico.php?id_usuario=<?= $id_usuario;?>">
                                    <img src="./img/novaOrdemServico.png" width="100" height="100" alt="Nova Ordem de Serviço">
                                    <h6 class="display-7">Nova O.S.</h6>
                                </a>
                            </div>
                            <div class="col-6 d-flex justify-content-center">
                                <a href="consultarOS.php?id_usuario=<?= $id_usuario;?>">
                                    <img src="./img/consultarOrdensServico.png" width="100" height="100" alt="Consultar Ordens de Serviço">
                                    <h6 class="display-7">Consultar O.S.</h6>
                                </a>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>

<?php include './partials/footer.php' ?>