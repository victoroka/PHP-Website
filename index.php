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
        <p>O site fala sobre blablabla.....</p>
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
        <p>Não é castrado? <b><a href="cadastro.php">Clique aqui</a></b> e se cadastre agora!</p>
    </article>
</section>
<?php include "php/footer.inc"; ?>
</body>
</html>