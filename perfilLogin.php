<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="author" content="LgndaryDuo" />
        <link rel="stylesheet" type="text/css" href="EdumonStyle.css" />
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        <title>Perfil</title>
    </head>
    <body>
        <?php include "php/header.inc";
              include "php/menu.inc";
?>
        <section>
            <article><h1>Perfil do Usuário</h1></article>
            <article>
                <?php
/* verifica se o cookie está setado e de acordo com o cookie, 
o banco de dados é checado */
if(isset($_COOKIE['email'])){
      
   echo "Olá " . $_COOKIE['email']."</br>";
   echo "<p>Sua senha em sha1 é: " . $_COOKIE['senha']."</p>";
}

include "edCadastro/conecta.php";
include "edCadastro/read.php";

$email = $_COOKIE['email'];
$senha = $_COOKIE['senha'];

echo $msgbv;
echo "Nome da foto: $foto";
/*echo $msgimg;
erro aqui BECAUSE FUCKING MAC FOLDERS
*/
echo "<br>";
echo "<br>";
?>
       <form action="editarDados.php" method="post">
           <label for="logout"><h4>Clique aqui para alterar seus dados: </h4></label>
        <input type="submit" value="Alterar Dados" name="alterar">
                </form>
              
        <form action="destroy.php" method="post">
            <label for="logout"><h4>Clique aqui para fazer Logout: </h4></label>
        <input type="submit" value="Alterar Dados" name="alterar">
                </form>
            </article>
        </section>
    </body>
</html>