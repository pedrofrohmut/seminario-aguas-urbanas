<?php
class InscricaoDao {
  private $mysqli;

  public function __construct($mysqli) {
    $this->mysqli = $mysqli;
  }
  public function traduzDataParaBanco($data) {
    if ($data == '') {
      return '';
    }
    else {
      $dataSplit = explode('/', $data);
      return "{$dataSplit[2]}-{$dataSplit[1]}-{$dataSplit[0]}";
    }
  }
  public function new($inscricao) {
    // TODO: implementar este método
    // $nome = $this->mysqli->real_escape_string($inscricao->getNome());
    $data = $this->mysqli->real_escape_string($inscricao->getDataNascimento());
    $data = $this->traduzDataParaBanco($data);
    $sql = "
    INSERT INTO inscricao (
      nome,
      dataNascimento,
      rg,
      cpf,
      profissao,
      endereco,
      endNumero,
      complemento,
      bairro,
      cidade,
      uf,
      cep,
      telefone,
      outroTelefone,
      email
    )
    VALUES (
      '{$this->mysqli->real_escape_string($inscricao->getNome())}',
      '{$data}',
      '{$this->mysqli->real_escape_string($inscricao->getRg())}',
      '{$this->mysqli->real_escape_string($inscricao->getCpf())}',
      '{$this->mysqli->real_escape_string($inscricao->getProfissao())}',
      '{$this->mysqli->real_escape_string($inscricao->getEndereco())}',
       {$this->mysqli->real_escape_string($inscricao->getEndNumero())},
      '{$this->mysqli->real_escape_string($inscricao->getComplemento())}',
      '{$this->mysqli->real_escape_string($inscricao->getBairro())}',
      '{$this->mysqli->real_escape_string($inscricao->getCidade())}',
      '{$this->mysqli->real_escape_string($inscricao->getUf())}',
      '{$this->mysqli->real_escape_string($inscricao->getCep())}',
      '{$this->mysqli->real_escape_string($inscricao->getTelefone())}',
      '{$this->mysqli->real_escape_string($inscricao->getOutroTelefone())}',
      '{$this->mysqli->real_escape_string($inscricao->getEmail())}'
    )";
    // return $sql;
    return $this->mysqli->query($sql);
  }
}
