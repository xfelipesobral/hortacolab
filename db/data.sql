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

CREATE TABLE SENSOREAMENTO (
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

/**

    DATA_TESTS

    INSERT INTO SENSOREAMENTO (tempambiente, 
                               templiquido,
                               nivelreservatorio,
                               phliquido,
                               luminosidade,
                               conduteletrica,
                               vazaoliquido) VALUES
                            (51, 67, 95, 75, 85, 78, 87), 
                            (33, 7, 9, 73, 14, 34, 71), 
                            (21, 68, 39, 69, 32, 99, 12), 
                            (100, 6, 71, 17, 64, 83, 61), 
                            (82, 79, 38, 88, 45, 62, 91),
                            (20, 100, 42, 22, 77, 37, 13),
                            (34, 15, 94, 37, 17, 8, 82),
                            (8, 53, 39, 76, 44, 51, 84),
                            (7, 15, 12, 68, 64, 52, 71),
                            (61, 20, 3, 100, 41, 19, 5),
                            (39, 1, 42, 16, 42, 86, 100);
*/