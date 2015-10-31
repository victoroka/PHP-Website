<!DOCTYPE html>
<html lang="pt-br">
	<head> 
		<title>Cadastro</title> 
		<meta charset="UTF-8">
	</head>
	<body>
	<h1> Cadastro </h1>
		<form method="POST" action="valida2.php">
            <input type="hidden" name="nome" value="<?php echo $nome; ?>"> 
            <input type="hidden" name="email" value="<?php echo $email; ?>"> 
            <input type="hidden" name="password" value="<?php echo $password; ?>"> 
                    
            <p><label for="cidade">Cidade: </label>
                <input type="text" name="cidade" id="cidade" size="20"></p>
            <p><label for="estado">Estado: </label>
                <input type="text" name="estado" id="estado" size="20"></p>     
                    
         	<input type="submit" value="Cadastrar" name="cadastrar">
		</form>	
	</body>
</html>