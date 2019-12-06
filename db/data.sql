/*
    Sensoreamento

    id                -> Identificação
    tempambiente      -> Temperatura Ambiente da estufa
    luminosidade      -> Luminosidade solar direta (LDR)
    phliquido         -> Análise do PH do Líquido nutriente.
    nivelreservatorio -> Nível do Líquido nutriente no reservatório.
    templiquido       -> Temperatura do Líquido nutriente.
    conduteletrica    -> Condutibilidade Elétrica para análise de sólidos dissolvidos.
    vazaoliquido      -> Vazão da bomba do líquido nutriente no sistema tubular
    registro          -> Data e hora da recepção dos dados

*/

DROP DATABASE IF EXISTS HORTACOLAB;
CREATE DATABASE IF NOT EXISTS HORTACOLAB;

USE HORTACOLAB;

DROP TABLE IF EXISTS SENSOREAMENTO;
DROP TABLE IF EXISTS CONTATO;

CREATE TABLE IF NOT EXISTS SENSOREAMENTO (
    id                INT NOT NULL AUTO_INCREMENT, 
    tempambiente      FLOAT NOT NULL DEFAULT 0,
    templiquido       FLOAT NOT NULL DEFAULT 0,
    nivelreservatorio FLOAT NOT NULL DEFAULT 0,
    phliquido         FLOAT NOT NULL DEFAULT 0,
    luminosidade      FLOAT NOT NULL DEFAULT 0,
    conduteletrica    FLOAT NOT NULL DEFAULT 0,
    vazaoliquido      FLOAT NOT NULL DEFAULT 0,
    registro          TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS CONTATO (
    id        INT NOT NULL AUTO_INCREMENT,
    nome      VARCHAR(100) NOT NULL,
    email     VARCHAR(150) NOT NULL UNIQUE,
    telefone  BIGINT NOT NULL UNIQUE,
    descricao VARCHAR(200) NOT NULL,
    status    ENUM("A", "I") DEFAULT "A",
    registro  TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
);
