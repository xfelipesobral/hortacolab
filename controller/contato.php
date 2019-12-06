<?php

    header('Content-Type: application/json');
    $json = file_get_contents('php://input');
    $json = json_decode($json);

    require_once "../model/Contato.php";

    function registrar($nome, $email, $telefone, $descricao){

        $dados = new Contato;

        $dados->setNome($nome);
        $dados->setEmail($email);
        $dados->setTelefone((int)$telefone);
        $dados->setDescricao($descricao);

        if($dados->registrar()){
            return true;
            exit;
        }

        return false;
        exit;

    }

    if(isset($json)){

        if (isset($json->JSON_DATA_HORTACOLAB)) {

            $data = $json->JSON_DATA_HORTACOLAB;

            $retorno = registrar($data->nome, 
                                 $data->email,
                                 $data->telefone,
                                 $data->descricao);

            $retorno = $retorno ? ["STATUS" => "OK"] : ["STATUS" => "FAIL"]; 

        } else {
            $retorno = ["STATUS" => "FAIL"];
        }

    } else {
        $retorno = ["STATUS" => "FAIL"];
    }

    echo json_encode($retorno);