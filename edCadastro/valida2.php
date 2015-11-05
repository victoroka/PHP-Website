<?php

	$nome = $_POST['nome'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $cidade = strip_tags($_POST['cidade']);
    $estado = strip_tags($_POST['estado']);
    //colocar variavel pra foto e pasta
    $erro = 0;

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