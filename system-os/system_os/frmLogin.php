<?php $titulo = 'System OS | Login' ?>
<!-- Cabeçalho -->
<?php include_once './partials/head.php' ?>
<!-- NavBar -->
<?php include_once './partials/menu.php' ?>


<div class="container">
    <div class="card cardBox w-50 h-50 mx-auto">
        <div class="card-header bg-info">
            <h1 class="text-center text-light display-4"><i class="fas fa-sign-in-alt"></i> Login</h1>
        </div>
        <div class="card-body">
            <div class="container-fluid">
                <form name="formClientes" id="formClientes">

                    <div class="form-row align-self-center text-justify no-gutters">
                        <label for="nome">E-mail</label>
                        <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                            name="email" id="email" placeholder="Insira seu email cadastrado"
                            class="form-control" required="required" minlength="5" autofocus />
                    </div>

                    <div class="form-row">
                        <div class="col-12 align-self-center text-justify">
                            <label for="senha">Senha</label>
                            <input type="password" name="senha" id="cpf" class="form-control"
                                placeholder="Insira sua senha" required="required" minlength="5" />
                        </div>
                    </div>

                    <!--Card Footer-->
                    <div class="card-footer container-fluid">
                        <div class="row"> <!--Linha dos botões-->
                            <div class="col-4"></div>
                            <div class="col-4"><!--Botão1-->
                                <button name="login" id="login" class="btn btn-success form-control">Login</button>
                            </div><!--Botão1-->
                            <div class="col-4"><!--Botão2-->
                                <button name="login" onclick="btnNovoUsuario(event)" id="novoUsuario" class="btn btn-warning form-control">Novo Cadastro</button>
                            </div><!--Botão2-->
                        </div><!--Linha dos botões-->
                    </div><!--Card Footer-->
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Rodapé -->
<?php include_once './partials/footer.php' ?>