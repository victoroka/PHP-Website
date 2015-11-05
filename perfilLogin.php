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
              include "edCadastro/read.php";
?>
        <section>
            <article><h1>Perfil do Usuário</h1></article>
            <article>
                <?php

echo $msg;

?>
            </article>
        </section>
    </body>
</html>