<?php

    require_once "Model.php";

    class Contato extends Model{

        private $tabela = "CONTATO";
        private $id;
        private $nome;
        private $email;
        private $telefone;
        private $descricao;
        private $status;
        private $registro;

        public function setId($dado){
            $this->id = $dado;
        }

        public function setNome($dado){
            $this->nome = $dado;
        }

        public function setEmail($dado){
            $this->email = $dado;
        }

        public function setTelefone($dado){
            $this->telefone = $dado;
        }

        public function setDescricao($dado){
            $this->descricao = $dado;
        }

        public function setStatus($dado){
            $this->status = $dado;
        }

        public function setRegistro($dado){
            $this->registro = $dado;
        }

        public function registrar(){
            
            $dados = [
                      "nome"        => $this->nome,
                      "email"       => $this->email,
                      "telefone"    => $this->telefone,
                      "descricao"   => $this->descricao
                      ];

            return parent::inserir(
                $this->tabela,
                $dados
            );

        }

    }