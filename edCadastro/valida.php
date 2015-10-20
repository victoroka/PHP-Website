<?php
	$nome = $_POST['nome'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $erro = 0;
            
            
    if(empty($nome) || strstr($nome, ' ') == FALSE){
      echo "Preencha seu nome e sobrenome corretamente.<br>";
        $erro = 1;
} 

	if(strlen($email) < 5 || strstr($email, '@') == FALSE){ 
      echo "Preencha seu e-mail corretamente.<br>";
     	$erro = 1;
}

   if(empty($password) || strlen($password) < 4){
      echo "Preencha seu nome corretamente.<br>";
        $erro = 1;
   }

    if ($erro == 0) {
      include "cadastro2.php";
} else {
        echo "erro";
    }
?>