<?php
//conectando ao banco
include "conecta.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$password = $_POST['password'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$foto = $_FILES['foto']; 
$resultado = true;
$tamanho_maximo = $_POST['MAX_SIZE_FILE'];
$arquivo = $foto['name'];

//executando a operacao SQL
$resultado = mysqli_query($conexao, "INSERT INTO bd(nome,email,senha,cidade,estado,foto) VALUES ('".$nome."','".$email."','".$password."','".$cidade."','".$estado."','".$arquivo."')") or die("Não foi possivel executar SQL:". mysqli_error($conexao));


if($resultado === TRUE){
    //COLOCAR UM HEADER LOCATION PARA "INDEX.PHP/LOGIN"
}else {
    echo "<br/>Erro no cadastro!";
}

include "salvaImagem.php";
$salvo = salva($tamanho_maximo, $nome, $foto);
    if($salvo) {
        echo "Imagem salva.";
    }

//fechamento da conexao
mysqli_close($conexao);
?>