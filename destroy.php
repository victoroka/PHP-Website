<?php

//DESTROI OS COOKIES E VOLTA PARA A PAGINA INICIAL

if(isset($_COOKIE['email'])){
    setcookie('email', $email, time()+(-24*-60*-60*30), '/' );
    //destruindo o cookie
}
if(isset($_COOKIE['senha'])){
    setcookie('senha', $senha, time()+(-24*-60*-60*30), '/' );
    //destruindo o cookie
}

header('Location: index.php');
?>