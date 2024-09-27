<?php

    session_set_cookie_params([
        'lifetime'=> 60*60, //tempo do cookie em segundos
        'path'=>'/', //caminho do cookie
        'domain'=> 'localhost', //dominio
        'secure'=> false, //Apenas por httpS ---> (S)
        'httponly'=> true, //Apenas por HTTP(Não por JavaScript)
        'samesite'=>'Strict'
    ]);

    session_start();
    $_SESSION['autenticado'] = false;
    $_SESSION['id'] = null;
    $_SESSION['nome'] = null;
    $_SESSION['email'] = null;

    if(isset($_POST['email']) && isset($_POST['senha'])){

        $email = $_POST['email'];
        $senha = $_POST['senha'];
        include_once "../../conexao-system-os/bd.php";

        $user = select_sql("SELECT * FROM usuarios WHERE email='$email';");
        $user = $user[0];

        if(isset($user['email']) && $senha = $user['senha']){

            $_SESSION['autenticado'] = true;
            $_SESSION['id'] = $user['id'];
            $_SESSION['nome'] = $user['nome'];
            $_SESSION['email'] = $user['email'];
            header('Location: home.php?usuario='.$_SESSION['nome'].'&id='.$_SESSION['id']);
        }else{
            header('Location: frmLogin.php?erro=Não autorizado!');
        }
    }
?>