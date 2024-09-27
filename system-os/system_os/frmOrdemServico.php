<?php $titulo='System OS | Nova Ordem de Serviço' ?>
    <!-- Cabeçalho -->
    <?php include_once './partials/head.php' ;
    include_once './valida.php';

    $submeter = "inserir-os_action.php$paramAuth";

    $segmento = '1';


    if(isset($_GET['edit_id'])){
        $id_update = $_GET['edit_id'];

        include_once "../../conexao-system-os/bd.php";

        $query = "SELECT * FROM ordens_servico WHERE id=$id_update;";
        $registro = select_sql($query);
        $registro=$registro[0];

        $submeter = "editar-os_action.php$paramAuth";

        switch($registro['segmento']){
            case 'Rede':
                $segmento = '1';
                break;
            case 'Software':
                $segmento = '2';
                break;
            case 'Hardware':
                $segmento = '3';
                break;
            case 'Impressora':
                $segmento = '4';
                break;
        }

        if(!$registro){
            header("Location:consultarOS.php");
        }
    };


     ?>
    <!-- NavBar -->
    <?php include_once './partials/menu.php' ?>
    <!-- Container Principal -->
    <div class="container-fluid principal" >
    
        <!--Container-->
    <div class="container-fluid">
    <form action=<?=$submeter?> method="POST">
        <!--Card-->
        <div class="card cardBox">

            <!--Card Header-->
            <div class="card-header bg-info">
                <h1 class="text-center text-light">
                <i class="fas fa-external-link-alt"></i>
                    Nova Ordem de Serviço
                </h1>
            </div><!--Formulário de cadastro de usuário-->

            <!--Card Body-->
            <div class="card-body">
                <!--Linha1 Form-->
                <div class="row row-formcontrol">
                    <div class="col-2 form-group">
                        <label for="id">Nº da O.S.</label>
                        <input value="<?=isset($registro)?$registro['id']:''?>" type="text" name="id" id="id" readonly placeholder="Id da O.S." class="form-control"/>
                    </div>
                    <div class="col-2 form-group">
                        <label for="dataAbertura">Data de Abertura</label>
                        <input value="<?=isset($registro)?$registro['dtAbertura']:''?>" type="date" name="dtAbertura" id="dtAbertura" class="form-control" required="required" minlength="5"/>
                    </div>
                    <div class="col-5 form-group">
                        <label for="titulo">Título</label>
                        <input value="<?=isset($registro)?$registro['titulo']:''?>" type="text" name="titulo" id="titulo"  autofocus placeholder="Ex.: Não entra no Windows" class="form-control" required="required" minlength="5"/>
                    </div>
                    <div class="col-3 form-group">
                        <label for="segmento">Segmento</label>
                        <select name="segmento" class="form-select">
                            <option <?php if($segmento=='1') echo 'selected'?>>Rede</option>
                            <option <?php if($segmento=='2') echo 'selected'?>>Software</option>
                            <option <?php if($segmento=='3') echo 'selected'?>>Hardware</option>
                            <option <?php if($segmento=='4') echo 'selected'?>>Impressora</option>
                        </select> 
                    </div>
                </div><!--Linha1 Form-->
                <!--Linha2 Form-->
                <div class="row row-formcontrol">
                    <div class="col-12">
                        <label for="descricao">Descrição</label>
                        <textarea class="form-control" name="descricao" id="descricao" rows="10"><?=isset($registro)?$registro['descricao']:''?></textarea>
                    </div>
                </div><!--Linha2 Form-->
            </div><!--Card Body-->  

            <!--Card Footer-->
            <div class="card-footer container-fluid">
				<div class="row"> <!--Linha dos botões-->
                    <div class="col-8"></div>
                    <div class="col-2"><!--Botão1-->
                    <button type="submit" name="salvar" id="salvar" class="btn btn-success form-control ">Salvar</button>
                    </div><!--Botão1-->
                    <div class="col-2"><!--Botão2-->
                        <button name="cancelar" id="cancelar" class="btn btn-warning form-control"><a href="home.php<?=$paramAuth?>">Cancelar</a></button>
                    </div><!--Botão2-->
                </div><!--Linha dos botões-->					
            </div><!--Card Footer-->
        </div><!--Card--> 
    </form> 
    </div><!--Formulário de cadastro de usuário-->

    </div><!-- Container Principal -->
    <!-- Rodapé -->
    <?php include_once './partials/footer.php' ?>