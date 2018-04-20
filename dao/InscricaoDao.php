<?php
class InscricaoDao {
  private $pdo;

  public function __construct($pdo) {
    $this->pdo = $pdo;
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

  public function add($inscricao) {
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
      :nome,
      :dataNascimento,
      :rg,
      :cpf,
      :profissao,
      :endereco,
      :endNumero,
      :complemento,
      :bairro,
      :cidade,
      :uf,
      :cep,
      :telefone,
      :outroTelefone,
      :email
    )";
    $statement = $this->pdo->prepare($sql);
    return $statement->execute([
      "nome"            => $inscricao->getNome(),
      "dataNascimento"  => $this->traduzDataParaBanco(
                           $inscricao->getDataNascimento()),
      "rg"              => $inscricao->getRg(),
      "cpf"             => $inscricao->getCpf(),
      "profissao"       => $inscricao->getProfissao(),
      "endereco"        => $inscricao->getEndereco(),
      "endNumero"       => $inscricao->getEndNumero(),
      "complemento"     => $inscricao->getComplemento(),
      "bairro"          => $inscricao->getBairro(),
      "cidade"          => $inscricao->getCidade(),
      "uf"              => $inscricao->getUf(),
      "cep"             => $inscricao->getCep(),
      "telefone"        => $inscricao->getTelefone(),
      "outroTelefone"   => $inscricao->getOutroTelefone(),
      "email"           => $inscricao->getEmail()
    ]);
  }
}
