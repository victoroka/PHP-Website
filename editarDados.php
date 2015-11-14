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
                <h2>Escreva nos campos os novos dados:</h2>
            <form action="update.php" method="post">
                <label for="nome">Digite o novo nome: </label>
                <input type="text" name="nome" id="nome" size="20"><span style="color: red"> *</span>
            <br/>
            <br/>
            <label for="email">Digite o novo Email: </label>
                <input type="email" name="email" id="email" size="20"><span style="color: red"> *</span>
            <br/>
            <br/>
            <label for="password">Digite a nova Senha: </label>
                <input type="password" name="password" id="password" size="20"><span style="color: red"> *</span>
            <br/>
            <br/>
                
                
    <!--Após alterar os dados o usuario volta para a pagina de login-->
       
        <p> <input type="submit" value="Alterar Dados" name="alterar"></p>
                </form>
            </article>
        </section>
    </body>
</html>