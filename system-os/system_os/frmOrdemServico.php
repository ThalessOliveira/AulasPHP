<?php $titulo='System OS | Nova Ordem de Serviço' ?>
    <!-- Cabeçalho -->
     <?php include_once './partials/head.php' ?>
    <!-- NavBar -->
    <?php include_once './partials/menu.php' ?>
    <!-- Container Principal -->
    <div class="container-fluid principal" >
    
        <!--Container-->
    <div class="container-fluid">
    <form action="inserir-os_action.php" method="POST">
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
                        <input type="text" name="id" id="id" readonly placeholder="Id da O.S." class="form-control"/>
                    </div>
                    <div class="col-2 form-group">
                        <label for="dataAbertura">Data de Abertura</label>
                        <input type="date" name="dtAbertura" id="dtAbertura" class="form-control" required="required" minlength="5"/>
                    </div>
                    <div class="col-5 form-group">
                        <label for="titulo">Título</label>
                        <input type="text" name="titulo" id="titulo"  autofocus placeholder="Ex.: Não entra no Windows" class="form-control" required="required" minlength="5"/>
                    </div>
                    <div class="col-3 form-group">
                        <label for="segmento">Segmento</label>
                        <select name="segmento" class="form-select">
                            <option>Rede</option>
                            <option>Software</option>
                            <option>Hardware</option>
                            <option>Impressora</option>
                        </select> 
                    </div>
                </div><!--Linha1 Form-->
                <!--Linha2 Form-->
                <div class="row row-formcontrol">
                    <div class="col-12">
                        <label for="descricao">Descrição</label>
                        <textarea class="form-control" name="descricao" id="descricao" rows="10"></textarea>
                    </div>
                </div><!--Linha2 Form-->
            </div><!--Card Body-->  

            <!--Card Footer-->
            <div class="card-footer container-fluid">
				<div class="row"> <!--Linha dos botões-->
                    <div class="col-8"></div>
                    <div class="col-2"><!--Botão1-->
                    <button name="salvar" id="salvar" class="btn btn-success form-control">Salvar</button>
                    </div><!--Botão1-->
                    <div class="col-2"><!--Botão2-->
                        
                        <button name="cancelar" id="cancelar" class="btn btn-warning form-control">Cancelar</button>
                    </div><!--Botão2-->
                </div><!--Linha dos botões-->					
            </div><!--Card Footer-->
        </div><!--Card--> 
    </form> 
    </div><!--Formulário de cadastro de usuário-->

    </div><!-- Container Principal -->
    <!-- Rodapé -->
    <?php include_once './partials/footer.php' ?>