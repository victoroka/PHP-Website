<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="author" content="LgndaryDuo"/>
    <link rel="stylesheet" type="text/css" href="EdumonStyle.css" />
    <script src="EdumonScript.js"></script>
    <title>Eduardo e Mônica</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"> 
</head>

<body onload="mensagemHoraData()">
        <?php include "php/header.inc";
              include "php/menu.inc";
?>
    
<section> 
    <article class="textoAtor">
        <p>O site fala um pouco sobre "Eduardo e Monica", uma canção composta por Renato Russo e lançada em 1986, no álbum Dois, do grupo Legião Urbana, que foi editada como o segundo single do álbum no mesmo ano.</p>
        <p>A canção, talvez uma das mais famosas da banda, narra, de forma linear, em quase cinco minutos, a história de amor de duas pessoas muito diferentes entre si e sua letra é composta de frases bem-humoradas e humorísticas que descrevem as personagens ao mesmo tempo em que mostram a evolução de sua relação.</p>
        <p>Este site foi desenvolvido pelos alunos Lucas Portella e Victor Oka da Universidade Presbiteriana Mackenzie em 2015.</p>
    </article>
    <article class="textoPersonagem">
        <h2>Login</h2>
        <form action="SobreOSite.php" method="post">
            <br/>
            <label for="email">Email: </label>
            <input type="email" value="" name="email" placeholder="example@email.com" /><br/>
            <br/>
            <label for="password">Senha: </label>
            <input type="password" value="" name="password" /><br/>
            <br/>
            <input type="submit" value="ENVIAR" />
        </form>
        <p>Não é castrado? <b><a href="edCadastro/cadastro.php"ss>Clique aqui</a></b> e se cadastre agora!</p>
    </article>
</section>
<?php include "php/footer.inc"; ?>
</body>
</html>