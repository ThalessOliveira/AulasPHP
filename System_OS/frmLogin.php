<?php $title='System OS | Login'?>

<?php include './partials/head.php' ?>

<?php include './partials/navbar.php' ?>

<div class="container-fluid principal" >
        <div class="row">


            <div class="col-12 d-flex justify-content-center">
                <div class="col-4 bg-light p-5 rounded m-5 ">
                <form>
                  <div class="row mb-4">

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
                <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4">Login</button>
                <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-block mb-4">Novo Usuário</button>
                </form>
                </div>
                
                </div>    
            </div>


        </div>
</div>

<?php include './partials/footer.php' ?>