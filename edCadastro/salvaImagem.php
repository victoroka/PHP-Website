<?php

function salva($tam, $nome, $arquivo){
    $retorno = false;
    
    //Define tamanho e tipos aceitos
    $tipos_aceitos = array("image/x-png","image/png", "image/jpeg", "image/gif", "image/bmp");

        //verifica se o arquivo tem o tipo permitido
        if(array_search($arquivo['type'],$tipos_aceitos)===TRUE) {
            echo "Erro! Tipo de dados não permitido.<br/>
                    Utilize apenas JPG, PNG, BMP ou GIF".$arquivo['type'];
            exit;
        }

        //verifica se o arquivo é vazio
        if($arquivo['size']==0 OR $arquivo['tmp_name']==NULL) {
            echo "Erro! Arquivo vazio.";
            exit;
        }

        //Tamanho maior que o permitido
        if($arquivo['size']>$tam) {
            echo "Erro! Arquivo maior que o permitido.";
            exit;
        }

        //diz onde será salvo
        if (!file_exists('img/usuarios/'.$nome)) {
            mkdir('img/usuarios/'.$nome, 0777, true);
        }
        $destino = 'img/usuarios/'.$nome.'/' . $arquivo['name'];

        //move o temporário para o destino e verifica se tudo está ok
        if(  move_uploaded_file($arquivo['tmp_name'],$destino)  ) {
            $retorno = true;
        }
        else {
            echo "Erro ao salvar o arquivo.";
        }

    return $retorno;
}

?>