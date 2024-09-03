<?php $title='System OS | Cadastro'?>

<?php include './partials/head.php' ?>

<?php include './partials/navbar.php' ?>

<div class="container-fluid principal" >
        <div class="row">


            <div class="col-12 d-flex justify-content-center">
                <div class="col-4 bg-light p-5 rounded m-5 ">
                <form>
                  <div class="row mb-4">
                    <div class="col">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="form3Example1" class="form-control" />
                        <label class="form-label" for="form3Example1">CPF</label>
                      </div>
                    </div>
                    <div class="col">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="form3Example2" class="form-control" />
                        <label class="form-label" for="form3Example2">Nome</label>
                      </div>
                    </div>
                  </div>

                  <!-- Email input -->
                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" id="form3Example3" class="form-control" />
                    <label class="form-label" for="form3Example3">Email</label>
                  </div>

                  <!-- Password input -->
                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" id="form3Example4" class="form-control" />
                    <label class="form-label" for="form3Example4">Senha</label>
                  </div>
                <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4">Cadastrar</button>
                </form>
                </div>
                
                </div>    
            </div>


        </div>
</div>

<?php include './partials/footer.php' ?>