<!DOCTYPE html>
<html lang="pt-br">
	<head> 
		<title>Cadastro</title>
        <meta name="author" content="LgndaryDuo"/>
		<meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../EdumonStyle.css" />
        <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico"> 
	</head>
	<body>
        <?php include "../php/headerCad.inc";
              include "../php/menuCad.inc";
?>
        <section>
        <article>
	<h1> Cadastro </h1>
        </article>
            <article>
		<form method="POST" action="valida.php">
            <br/>
            <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome" size="20"><br/><br/>
            <label for="email">Email: </label>
                <input type="email" name="email" id="email" size="20" placeholder="example@email.com"><br/><br/>
            <label for="password">Senha: </label>
                <input type="password" name="password" id="password" size="20"><br/><br/>
			<input type="submit" value="Cadastrar" name="cadastrar">
		</form>	
            </article>
        </section>
        <?php include "../php/footer.inc"; ?>
	</body>
</html>