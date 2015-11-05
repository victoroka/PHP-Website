<!DOCTYPE html>
<html lang="pt-br">
	<head> 
		<meta charset="UTF-8">
        <meta name="author" content="LgndaryDuo" />
        <link rel="stylesheet" type="text/css" href="../EdumonStyle.css" />
        <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico" />
        <title>Cadastro - Parte I</title>
	</head>
	<body>
        <?php include "../php/headerCad.inc";
              include "../php/menuCad.inc";
?>
        <section>
        <article id="articleh1"><h1> Cadastro </h1></article>
        <article id="articlepadding">
		<form method="POST" action="valida.php">
            <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome" size="20"> 
            <br/>
            <br/>
            <label for="email">Email: </label>
                <input type="email" name="email" id="email" size="20"> 
            <br/>
            <br/>
            <label for="password">Senha: </label>
                <input type="password" name="password" id="password" size="20">
            <br/>
            <br/>
            <label for="password">Repita a senha: </label>
                <input type="password" name="password2" id="password" size="20">
            <br/>
            <br/>
            <input type="submit" value="Cadastrar" name="cadastrar">
		</form>	
        </article>
        </section>
        <?php include "../php/footer.inc"; ?>
	</body>
</html>