<?php

    header('Content-Type: application/json');
    $json = file_get_contents('php://input');
    $json = json_decode($json);

    require_once "../model/Sensoreamento.php";

    function registrar($tempambiente, $templiquido, $nivelreservatorio, $phliquido, $luminosidade, $conduteletrica, $vazaoliquido){

        $sensors = new Sensoreamento;

        $sensors->setTempAmbiente($tempambiente);
        $sensors->setTempLiquido($templiquido);
        $sensors->setNivelReservatorio($nivelreservatorio);
        $sensors->setPhLiquido($phliquido);
        $sensors->setLuminosidade($luminosidade);
        $sensors->setCondutEletrica($conduteletrica);
        $sensors->setVazaoLiquido($vazaoliquido);

        if($sensors->registrar()){
            return true;
            exit;
        }

        return false;
        exit;

    }

    if(isset($json)){

        if (isset($json->JSON_DATA_HORTACOLAB)) {

            $data = $json->JSON_DATA_HORTACOLAB;
            $count = count($data);

            $retorno = registrar($data->tempambiente, 
                                 $data->templiquido,
                                 $data->nivelreservatorio,
                                 $data->phliquido,
                                 $data->luminosidade,
                                 $data->conduteletrica,
                                 $data->vazaoliquido);

            $retorno = $retorno ? ["STATUS" => "OK"] : ["STATUS" => "FAIL"]; 

        } else {
            $retorno = ["STATUS" => "FAIL"];
        }

    } else {
        $retorno = ["STATUS" => "FAIL"];
    }

    echo json_encode($retorno);