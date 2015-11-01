<?php
    include "conecta.php";    

    $email = $_POST['email'];
    $senha = $_POST['password'];

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
