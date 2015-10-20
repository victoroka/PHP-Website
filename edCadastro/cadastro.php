<!DOCTYPE html>
<html lang="pt-br">
	<head> 
		<title>Cadastro</title> 
		<meta charset="UTF-8">
	</head>
	<body>
	<h1> Cadastro </h1>
		<form method="POST" action="valida.php">
            <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome" size="20"> 
            <label for="email">Email: </label>
                <input type="email" name="email" id="email" size="20"> 
            <label for="password">Senha: </label>
                <input type="password" name="password" id="password" size="20">
			<input type="submit" value="Cadastrar" name="cadastrar">
		</form>	
	</body>
</html>