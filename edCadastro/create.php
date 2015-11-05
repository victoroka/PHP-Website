<?php
//conectando ao banco
include "conecta.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$password = $_POST['password'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$foto = $_FILES['foto']; 

//adicionar a variavel da foto e colocar foto no banco INSERT INTO do lado do estado e inserir a variavel no VALUES 

//executando a operacao SQL
$resultado = mysqli_query($conexao, "INSERT INTO bd(nome,email,senha,cidade,estado,foto) VALUES ('".$nome."','".$email."','".$password."','".$cidade."','".$estado."','".$foto."')") or die("Não foi possivel executar SQL:". mysqli_error($conexao));


if($resultado === TRUE){
    //COLOCAR UM HEADER LOCATION PARA "INDEX.PHP/LOGIN"
}else {
    echo "<br/>Erro no cadastro!";
}
//fechamento da conexao
mysqli_close($conexao);
?>