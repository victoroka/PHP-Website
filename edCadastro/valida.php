<?php
//var
   include "funcoesInjection.php";

	$name = $_POST['nome'];
    $mail = $_POST['email'];
    $senha = $_POST['password'];
    $erro = 0;
            
      
    $nome = escape_html($name); 
    $email = escape_html($mail);
    $password = escape_html($senha);
        

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

    if ($erro == 0) {
      include "cadastro2.php";
} else {
        echo "erro";
    }
?>