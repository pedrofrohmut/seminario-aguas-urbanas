DROP TABLE IF EXISTS inscricao;

CREATE TABLE inscricao (
  /* IDETIFICAÇÃO */
  id                BIGINT        NOT NULL AUTO_INCREMENT,
  nome              VARCHAR(255)  NOT NULL,
  dataNascimento    DATE          NOT NULL,
  rg                VARCHAR(255)  NOT NULL,
  cpf               VARCHAR(255)  NOT NULL,
  profissao         VARCHAR(255)  NOT NULL,
  /* ENDEREÇO */
  endereco          VARCHAR(255)  NOT NULL,
  endNumero         BIGINT        NOT NULL,
  complemento       VARCHAR(255),
  bairro            VARCHAR(255),
  cidade            VARCHAR(255)  NOT NULL,
  uf                VARCHAR(255)  NOT NULL,
  cep               VARCHAR(255)  NOT NULL,
  /* CONSTATO */
  telefone          VARCHAR(255)  NOT NULL,
  outroTelefone     VARCHAR(255)  NOT NULL,
  email             VARCHAR(255)  NOT NULL,
  /* LOG */
  createDate        DATETIME DEFAULT CURRENT_TIMESTAMP,
  updateDate        DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  /* KEYS */
  PRIMARY KEY (id)
) /* table_option */
  ENGINE=InnoDB
  DEFAULT CHARSET=utf8
  DEFAULT COLLATE utf8_unicode_ci;
