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

?>
            </article>
        </section>
    </body>
</html>