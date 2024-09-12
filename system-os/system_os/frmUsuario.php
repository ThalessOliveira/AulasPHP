<?php $titulo='System OS | Novo Usuário' ?>
    <!-- Cabeçalho -->
     <?php include_once './partials/head.php' ?>
    <!-- NavBar -->
    <?php include_once './partials/menu.php' ?>
    <!-- Container Principal -->
    <div class="container-fluid principal" >
    
    <div class="container-fluid">
    <form name="formNovaOS" id="formNovaOS" action="inserir-usuario_action.php" method="POST">
        <!--Card-->
        <div class="card">

            <!--Card Header-->
            <div class="card-header row bg-info">
                <div class="col-4"></div>
                <div class="col-8">
                <h2 class="text-light display-6">
                <i class="fa fa-users"></i><i class="fa fa-users"></i>
                    Cadastro de Usuários 
                </h1>
                </div>
            </div><!--Card Header-->
            <!--Card Body-->
            <div class="card-body">
                <!--Linha1 Form-->
                <div class="row row-formcontrol container">
                <div class="col-4"></div>
                    <div class="col-3 form-group">
                        <label for="id">Id</label>
                        <input type="text" name="id" id="id" disabled placeholder="Id da O.S." class="form-control"/>
                    </div>
                    <div class="col-3 form-group">
                        <label for="cpf">CPF</label> <!--Forçar usuario digitar no formato pattern="\d{3}\.\d{3}\.\d{3}-\d{2} somente números [0-9]{11}"-->
                        <input type="text" name="cpf" id="cpf" class="form-control" 
                                placeholder="CPF(Somente números) Ex.: 111.222.333-44" 
                                pattern="\d{3}\.?\d{3}\.?\d{3}-?\d{2}" required="required" 
                        />
                    </div>
                    <div class="col-2"></div>
                    <div class="col-4"></div>
                    <div class="col-6 form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome"  placeholder="Nome do Usuario" class="form-control" required="required" minlength="5"/>
                    </div>
                    <div class="col-2"></div>
                </div><!--Linha1 Form-->
                <!--Linha2 Form-->
                <div class="row row-formcontrol container">
                <div class="col-4"></div>
                    <div class="col-6">
                        <label for="email">E-Mail</label>
                        <input name="email" type="email" class="form-control" placeholder="E-mail" required="required">
                    </div>
                    <div class="col-2"></div>
                    <div class="col-4"></div>
                    <div class="col-6">
                        <label for="senha">Senha</label>
                        <input name="senha" type="password" class="form-control" placeholder="Senha" required="required">
                    </div>
                    <div class="col-2"></div>
                </div><!--Linha2 Form-->
            </div><!--Card Body-->  

            <!--Card Footer-->
            <div class="card-footer container-fluid">
				<div class="row"> <!--Linha dos botões-->
                    <div class="col-3"></div>
                    <div class="col-2"><!--Botão1-->
                    <button name="salvar" id="salvar" class="btn btn-success form-control">Salvar</button>
                    </div><!--Botão1-->
                    <div class="col-2"><!--Botão2-->
                        <button name="cancelar" class="btn btn-warning form-control">Cancelar</button>
                    </div><!--Botão2-->
                    <div class="col-5"></div>
                </div><!--Linha dos botões-->					
            </div><!--Card Footer-->
        </div><!--Card--> 
    </form> 
    </div><!--Container-->

    </div><!-- Container Principal -->
    <!-- Rodapé -->
    <?php include_once './partials/footer.php' ?>