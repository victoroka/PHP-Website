<?php
//conectando ao banco
include "edCadastro/conecta.php";

$error = 0;
$emailAntigo = $_COOKIE['email'];
$senhaAntiga = $_COOKIE['senha'];

if(isset($_COOKIE['email'])){
    setcookie('email', $email, time()+(-24*-60*-60*30), '/' );
    //destruindo o cookie
}
if(isset($_COOKIE['senha'])){
    setcookie('senha', $senha, time()+(-24*-60*-60*30), '/' );
    //destruindo o cookie
}

/*====================================================
 OS COOKIES SAO DESTRUIDOS PARA NAO CONTINUAREM NA PAGINA APÓS A MUDANÇA DOS DADOS, MAS COMO PRECISO DELES PARA ACESSAR O BANCO, COLOQUEI ELES NUMA VARIAVEL ANTES DE DESTRUIR. 
 NOTA 10 PELO ESFORÇO? hahaha =]
=====================================================*/

if(isset($_POST['nome'])){
    $nome = strip_tags($_POST['nome']);
} else {
    $error = 1;
}

if(isset($_POST['email'])){
    $email = strip_tags($_POST['email']);
} else {
    $error += 6;
}

if(isset($_POST['password'])){
    $senha = sha1(strip_tags($_POST['password']));
} else {
    $error += 10;
}
  
/*===============================================================
diferentes IFs pois o usuario pode deixar campos em branco, assim cada IF verifica pela soma o que foi deixado em branco
DAMN YOU, USER.
=================================================================
   */
   
//SE TUDO FOR ALTERADO   
   if ($error == 0){
   //conexao para alterar os dados no banco
   $resultado = mysqli_query($conexao, "UPDATE bd SET nome='".$nome."', email='".$email."', senha='".$senha."' WHERE email='".$emailAntigo."' AND senha='".$senhaAntiga."'") or die("Não foi possivel executar SQL:". mysqli_error($conexao));
   }
   
//SE APENAS O NOME FOR ALTERADO
   if ($error == 16){ 
   $resultado = mysqli_query($conexao, "UPDATE bd SET nome='".$nome."' WHERE email='".$emailAntigo."' AND senha='".$senhaAntiga."'") or die("Não foi possivel executar SQL:". mysqli_error($conexao));
   }
   
//SE APENAS O EMAIL FOR ALTERADO
   if ($error == 11){ 
   $resultado = mysqli_query($conexao, "UPDATE bd SET email='".$email."' WHERE email='".$emailAntigo."' AND senha='".$senhaAntiga."'") or die("Não foi possivel executar SQL:". mysqli_error($conexao));
   }
   
//SE APENAS A SENHA FOR ALTERADA
   if ($error == 7){ 
   $resultado = mysqli_query($conexao, "UPDATE bd SET senha='".$senha."' WHERE email='".$emailAntigo."' AND senha='".$senhaAntiga."'") or die("Não foi possivel executar SQL:". mysqli_error($conexao));
   }   

//SE NOME E EMAIL FOREM ALTERADOS
   if ($error == 10){ 
   $resultado = mysqli_query($conexao, "UPDATE bd SET nome='".$nome."', email='".$email."' WHERE email='".$emailAntigo."' AND senha='".$senhaAntiga."'") or die("Não foi possivel executar SQL:". mysqli_error($conexao));
   }
   
//SE NOME E SENHA FOREM ALTERADOS
  if ($error == 6){ 
   $resultado = mysqli_query($conexao, "UPDATE bd SET nome='".$nome."', senha='".$senha."' WHERE email='".$emailAntigo."' AND senha='".$senhaAntiga."'") or die("Não foi possivel executar SQL:". mysqli_error($conexao));
   } 
   
//SE EMAIL E SENHA FOREM ALTERADOS
    if ($error == 1){ 
   $resultado = mysqli_query($conexao, "UPDATE bd SET email='".$email."', senha='".$senha."' WHERE email='".$emailAntigo."' AND senha='".$senhaAntiga."'") or die("Não foi possivel executar SQL:". mysqli_error($conexao));
   }    
   
              
if($resultado === TRUE){
    //seta novo cookie
    setcookie('email', $email, time()+(24*60*60*30), '/' );//1 dia
    setcookie('senha', $senha, time()+(24*60*60*30), '/' );//1 dia
    //volta pra pagina de login
    header('Location: perfilLogin.php');
}else {
    echo "<br/>Erro na atualização!";
}

//fechar conexão
mysqli_close($conexao);
?>       
   
   