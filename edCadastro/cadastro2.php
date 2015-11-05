<!DOCTYPE html>
<html lang="pt-br">
	<head> 
		<meta charset="UTF-8">
        <meta name="author" content="LgndaryDuo" />
        <link rel="stylesheet" type="text/css" href="../EdumonStyle.css" />
        <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico" />
        <title>Cadastro - Parte II</title>
	</head>
	<body>
        <?php include "../php/headerCad.inc";
              include "../php/menuCad.inc";
?>
        <section>
            <article id="articleh1"><h1>Cadastro</h1></article>
            <article id="articlepadding">
		<form method="POST" enctype="multipart/form-data" action="valida2.php">
            <input type="hidden" name="nome" value="<?php echo $nome; ?>"> 
            <input type="hidden" name="email" value="<?php echo $email; ?>"> 
            <input type="hidden" name="password" value="<?php echo $password; ?>"> 
            <p style="color: red">* Campos obrigatórios</p>
            <p><label for="cidade">Cidade: </label>
                <input type="text" name="cidade" id="cidade" size="20"><span style="color: red"> *</span></p>
            <br/>
            <p><label for="estado">Estado: </label>
                <input type="text" name="estado" id="estado" size="20"><span style="color: red"> *</span></p>   
            <br/>  
            <p><label for="foto">Foto: </label>
                <input type="hidden" name="MAX_SIZE_FILE" value="10000000">
                <input type="file" name="foto" id="foto" size="20"></p>
            <br/>
         	<input type="submit" value="Cadastrar" name="cadastrar">
		</form>
            </article>
        </section>
        <?php include "../php/footer.inc"; ?>
	</body>
</html>