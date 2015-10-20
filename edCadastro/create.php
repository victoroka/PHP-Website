

<?php
//conectando ao banco
include "conecta.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$password = $_POST['password'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

//executando a operacao SQL
$resultado = mysqli_query($conexao, "INSERT INTO bd(nome,email,senha,cidade,estado) VALUES ('".$nome."','".$email."','".$password."','".$cidade."','".$estado."')") or die("Não foi possivel executar SQL:". mysqli_error($conexao));


if($resultado === TRUE){
    echo "<br/>Usuário cadastrado com sucesso!";
}else {
    echo "<br/>Erro no cadastro!";
}
//fechamento da conexao
mysqli_close($conexao);
?>