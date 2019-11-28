<?php

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

    // ** TRATA POST

    if(isset($_POST)){

        if (isset($_POST['JSON_DATA_HORTACOLAB'])) {

            $data = json_decode($_POST['JSON_DATA_HORTACOLAB']);

            if(count($data) == 7){
                
                $retorno = registrar($data->tempambiente, 
                                     $data->templiquido,
                                     $data->nivelreservatorio,
                                     $data->phliquido,
                                     $data->luminosidade,
                                     $data->conduteletrica,
                                     $data->vazaoliquido);

                $retorno = $retorno ? ["OK"] : ["FAIL"]; 

            } else {
                $retorno = ["FAIL"];
            }

        } else {
            $retorno = ["FAIL"];
        }

    } else {
        $retorno = ["FAIL"];
    }

    echo json_encode($retorno);