CREATE SCHEMA IF NOT EXISTS sistema_financeiro DEFAULT CHARACTER SET utf8 ;
use sistema_financeiro;

CREATE TABLE usuario (
  usuario_id INT(11) NOT NULL AUTO_INCREMENT,
  login VARCHAR(45) NOT NULL,
  senha VARCHAR(45) NOT NULL,
  nome VARCHAR(45) NULL,
  email VARCHAR(45) NULL,
  PRIMARY KEY (usuario_id),
  UNIQUE INDEX login_UNIQUE (login ASC),
  UNIQUE INDEX email_UNIQUE (email ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


CREATE TABLE status_movimentacao (
  status_movimentacao_id INT(11) NOT NULL AUTO_INCREMENT,
  descricao VARCHAR(45) NOT NULL,
  PRIMARY KEY (status_movimentacao_id))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE movimentacao (
  movimentacao_id INT(11) NOT NULL AUTO_INCREMENT,
  descricao VARCHAR(45) NOT NULL,
  valor DOUBLE NOT NULL,
  data_movimentacao DATE NOT NULL,
  data_registro DATETIME NOT NULL,
  usuario_id INT(11) NOT NULL,
  tipo_movimentacao_id INT NOT NULL,
  status_movimentacao_id INT(11) NOT NULL,
  PRIMARY KEY (movimentacao_id),
  INDEX fk_movimentacao_usuario_idx (usuario_id ASC),
  INDEX fk_movimentacao_tipo_movimentacao1_idx (tipo_movimentacao_id ASC),
  INDEX fk_movimentacao_status_movimentacao1_idx (status_movimentacao_id ASC),
  CONSTRAINT fk_movimentacao_usuario
    FOREIGN KEY (usuario_id)
    REFERENCES usuario (usuario_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_movimentacao_tipo_movimentacao1
    FOREIGN KEY (tipo_movimentacao_id)
    REFERENCES tipo_movimentacao (tipo_movimentacao_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_movimentacao_status_movimentacao1
    FOREIGN KEY (status_movimentacao_id)
    REFERENCES status_movimentacao (status_movimentacao_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;