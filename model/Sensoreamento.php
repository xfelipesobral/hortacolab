<?php

    require_once "Model.php";

    class Sensoreamento extends Model{

        /*
            id                INT NOT NULL AUTO_INCREMENT, 
            tempambiente      FLOAT NOT NULL DEFAULT 0,
            templiquido       FLOAT NOT NULL DEFAULT 0,
            nivelreservatorio FLOAT NOT NULL DEFAULT 0,
            phliquido         FLOAT NOT NULL DEFAULT 0,
            luminosidade      FLOAT NOT NULL DEFAULT 0,
            conduteletrica    FLOAT NOT NULL DEFAULT 0,
            vazaoliquido      FLOAT NOT NULL DEFAULT 0,
            registro          TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        */

        private $tabela = "SENSOREAMENTO";
        private $id;
        private $tempambiente;
        private $templiquido;
        private $nivelreservatorio;
        private $phliquido;
        private $luminosidade;
        private $conduteletrica;
        private $vazaoliquido;
        private $registro;

        public function setId($dado){
            $this->id = $dado;
        }

        public function setTempAmbiente($dado){
            $this->tempambiente = $dado;
        }

        public function setTempLiquido($dado){
            $this->templiquido = $dado;
        }

        public function setNivelReservatorio($dado){
            $this->nivelreservatorio = $dado;
        }

        public function setPhLiquido($dado){
            $this->phliquido = $dado;
        }

        public function setLuminosidade($dado){
            $this->luminosidade = $dado;
        }

        public function setCondutEletrica($dado){
            $this->conduteletrica = $dado;
        }

        public function setVazaoLiquido($dado){
            $this->vazaoliquido = $dado;
        }

        public function setRegistro($dado){
            $this->registro = $dado;
        }

        public function registrar(){
            
            $dados = [
                      "tempambiente"      => $this->tempambiente,
                      "templiquido"       => $this->templiquido,
                      "nivelreservatorio" => $this->nivelreservatorio,
                      "phliquido"         => $this->phliquido,
                      "luminosidade"      => $this->luminosidade,
                      "conduteletrica"    => $this->conduteletrica,
                      "vazaoliquido"      => $this->vazaoliquido,
                      ];

            return parent::inserir(
                $this->tabela,
                $dados
            );

        }

    }