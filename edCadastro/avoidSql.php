<?php
    include "conecta.php";    

    $email = strip_tags($_POST['email']);
    $senha = md5(strip_tags($_POST['password']));

    setcookie('email', $email, time()+(24*60*60) );//1 dia
    setcookie('senha', $senha, time()+(24*60*60) );//1 dia

    $find = false;

      // executando a operação de SQL
      $resultado = mysqli_query($conexao, "SELECT nome, email, senha from bd WHERE email='$email' AND senha='$senha'") or die("Não foi possível executar a SQL: ".mysqli_error($conexao));
      if($resultado){
          while($row = mysqli_fetch_array($resultado) ){
             if($row["email"] == $email && $row["senha"] == $senha)
             {
                //echo "<h3>Bem vindo " .$row["nome"]. ".</h3>";
                 header('Location: ../SobreOSite.php');
                $find = true;
             }
          }
      }

      if(!$find) echo "Erro no login!";
      // fechamento da conexão   
      mysqli_close($conexao);

?>
