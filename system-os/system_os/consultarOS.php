<?php $titulo = 'System OS | Ordens de Serviço';
include_once "../../conexao-system-os/bd.php";
include_once './partials/head.php';
include_once './valida.php';
$query = "SELECT * FROM ordens_servico;";
$OrdensServico = select_sql($query);
include_once './partials/menu.php' ?>

    <!-- Container Principal -->
    <div class="container-fluid principal" >
        <div class="row">
            <div class="col-12">
                <div class="card cardBox">
                    <div class="card-header justify-content-center align-items-center bg-info">
                        
                        <div class="row mt-6">
                            <div class="col-9 justify-content-center align-items-center">
                            <h1 class="display-4">Consulta de Ordens de Serviço</h1>
                            </div>
                            <div class="col-2 justify-content-center align-items-center">
                                <a class="btn btn-lg btn-warning" href="home.php<?=$paramAuth?>"  style="width:300px; margin:10px">Voltar</a>
                            </div>
                        </div>
                        
                    </div>
                    <div class="card-body my-auto">
                        <div class="row justify-content-center align-items-center">
                            <?php
		                    foreach($OrdensServico as $OrdemServico) { ?>
                                    <div class="col-1"></div>
                                    <div class="card col-11 cardOS">
                                        <div class="card-header row justify-content-center align-items-center">
                                            <div class="col-2"><strong><h5 class="display-8"><?php echo $OrdemServico['id']; ?></h5></strong></div>
                                            <div class="col-3"><strong><p class="display-8">
                                            <?php echo $OrdemServico['dtAbertura']; ?></p></strong>
                                            </div>
                                            <div class="col-5"><h5 class="display-8"><?php echo $OrdemServico['titulo']; ?></h5></div>
                                            <div class="col-2">
                                            <a class="btn editbtn text-info mx-3" 
                                                href="frmOrdemServico.php<?=$paramAuth?>&edit_id=<?=$OrdemServico['id']; ?>">
                                                <i class="far fa-edit"></i>
                                            </a>
                                            <a class="btn deletebtn text-danger mx-3" 
                                                href="deletar-os_action.php?<?=$paramAuth?>del_id=<?=$OrdemServico['id']; ?>">
                                            <i class="fas fa-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="card-body row">
                                            <div class="col-12">
                                            <strong><h6 class="display-7"><?php echo $OrdemServico['segmento']; ?></h6></strong>
                                                <p class="display-8"><?php echo $OrdemServico['descricao']; ?></p>
                                            </div>
                                        </div>
                                    </div>		
		                    <?php } ?>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row mt-6">
                            <div class="col-9"></div>
                            <div class="col-2">
                                <a class="btn btn-lg btn-warning" href="home.php<?=$paramAuth?>"  style="width:300px;">Voltar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include_once './partials/footer.php' ?>