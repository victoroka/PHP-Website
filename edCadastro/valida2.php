<?php
 
    include "funcoesInjection.php";

	$nome = $_POST['nome'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $city = $_POST['cidade'];
    $state = $_POST['estado'];
    $erro = 0;

    $cidade = escape_html($city);
    $estado = escape_html($state);

    if(empty($cidade) || strlen($cidade) < 2){
        echo "Voce deve preencher a cidade corretamente.<br />";
         $erro = 1;
}
				
     if(empty($estado) || strlen($estado) != 2){
         echo "Voce deve preencher o estado corretamente. (Somente as siglas)<br />";
         $erro = 1;
}

     if ($erro==0) {
      include "create.php";
}
?>