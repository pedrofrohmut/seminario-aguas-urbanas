/*** PostgreSQL ***/
DROP TABLE IF EXISTS inscricao;

CREATE TABLE inscricao (
  /* IDETIFICAÇÃO */
  id                BIGSERIAL  NOT NULL /*AUTO_INCREMENT*/,
  nome              CHAR(255)  NOT NULL,
  dataNascimento    DATE       NOT NULL,
  rg                CHAR(255)  NOT NULL,
  cpf               CHAR(255)  NOT NULL,
  profissao         CHAR(255)  NOT NULL,
  /* ENDEREÇO */
  endereco          CHAR(255)  NOT NULL,
  endNumero         BIGINT     NOT NULL,
  complemento       CHAR(255),
  bairro            CHAR(255),
  cidade            CHAR(255)  NOT NULL,
  uf                CHAR(255)  NOT NULL,
  cep               CHAR(255)  NOT NULL,
  /* CONSTATO */
  telefone          CHAR(255)  NOT NULL,
  outroTelefone     CHAR(255)  NOT NULL,
  email             CHAR(255)  NOT NULL,
  /* LOG */
  createDate        TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  /* KEYS */
  PRIMARY KEY (id)
);

SELECT * FROM inscricao;
