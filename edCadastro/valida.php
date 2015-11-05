<?php

	$nome = strip_tags($_POST['nome']);
    $email = strip_tags($_POST['email']);
    $password = md5(strip_tags($_POST['password']));
    $password2 = md5(strip_tags($_POST['password2']));
    $erro = 0;


//verificaçao dos campos
    if(empty($nome) || strstr($email, "=")  || strstr($nome, ' ') == FALSE){
      echo "Preencha seu nome e sobrenome corretamente.<br>";
        $erro = 1;
} 

	if(strlen($email) < 5 || strstr($email, "=") || strstr($email, '@') == FALSE){ 
      echo "Preencha seu e-mail corretamente.<br>";
     	$erro = 1;
}

   if(empty($password) || strstr($email, "=")  || strlen($password) < 4){
      echo "Preencha sua senha corretamente, sem caracteres especiais.<br>";
        $erro = 1;
   }

  if($password != $password2){
      echo "Senhas não correspondem.";
      $erro = 1;
  }

    if ($erro == 0) {
      include "cadastro2.php";
    }
?>