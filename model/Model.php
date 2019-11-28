<?php

    class Model{

        private static function processar($query, array $dados){
            include_once "../db/connect.php";

            $sql = $conn->prepare($query);
            if($sql->execute($dados)){
                return $sql;
            }
            
            return false;
        }

        public static function inserir($tabela, array $dados){
            // INSERT INTO tabela(parametros) VALUES (valores);
            $parametros = implode(", ", array_keys($dados));
            $valores = ":".implode(", :", array_keys($dados));

            $query = "INSERT INTO $tabela ($parametros) VALUES ($valores);";

            if(self::processar($query, $dados)){
                return true;
            }
            
            return false;
        }

    }