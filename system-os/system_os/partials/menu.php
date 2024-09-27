<?php
    $urlHome = "home.php";
    if (isset($_GET['id'])){
        include_once "./valida.php";
        $urlHome="home.php$paramAuth";
    };
?>

<nav class="navbar navbar-dark bg-dark px-3">
        <a class="navbar-brand" href="home.php<?=$paramAuth?>">
            <img src="./img/logo.png" width="120" height="80" class="d-inline-block align-top p-10" alt="logotipo">
			    <h6 class="display-7 p-10">System O.S</h6>
        </a>
        <ul class="navbar-nav">
            <?php
                if(isset($_GET['usuario'])){
                    echo '<li><p class="nav-item nav-link display-7">Seja Bem-Vindo,'.$nome_usuario.'</p></li>';
                };
            ?>
            <li class="nav-item">
                <a class="nav-link" href="logoff.php"><h6 class="display-7">Sair</h6></a>
            </li>
        </ul>
    </nav> 
    