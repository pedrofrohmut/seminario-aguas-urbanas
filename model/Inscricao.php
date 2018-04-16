<?php
class Inscricao {
  private $id;
  // IDENTIFICACAO
  private $nome;
  private $dataNascimento;
  private $rg;
  private $cpf;
  private $profissao;
  // ENDEREÇO
  private $endereco;
  private $endNumero;
  private $complemento;
  private $bairro;
  private $cidade;
  private $uf;
  private $cep;
  // CONTATO
  private $telefone;
  private $outroTelefone;
  private $email;

  //CONSTRUTOR
  public function __construct() {
    
  }
  // GETTERS
  public function getId() {
    return $this->id;
  }
  public function getNome() {
    return $this->nome;
  }
  public function getDataNascimento() {
    return $this->dataNascimento;
  }
  public function getRg() {
    return $this->rg;
  }
  public function getCpf() {
    return $this->cpf;
  }
  public function getProfissao() {
    return $this->profissao;
  }
  public function getEndereco() {
    return $this->endereco;
  }
  public function getEndNumero() {
    return $this->endNumero;
  }
  public function getComplemento() {
    return $this->complemento;
  }
  public function getBairro() {
    return $this->bairro;
  }
  public function getCidade() {
    return $this->cidade;
  }
  public function getUf() {
    return $this->uf;
  }
  public function getCep() {
    return $this->cep;
  }
  public function getTelefone() {
    return $this->telefone;
  }
  public function getOutroTelefone() {
    return $this->outroTelefone;
  }
  public function getEmail() {
    return $this->email;
  }
  // SETTERS
  public function setId($id) {
    $this->id = $id;
  }
  public function setNome($nome) {
    $this->nome = $nome;
  }
  public function setDataNascimento($dataNascimento) {
    $this->dataNascimento = $dataNascimento;
  }
  public function setRg($rg) {
    $this->rg = $rg;
  }
  public function setCpf($cpf) {
    $this->cpf = $cpf;
  }
  public function setProfissao($profissao) {
    $this->profissao = $profissao;
  }
  public function setEndereco($endereco) {
    $this->endereco = $endereco;
  }
  public function setEndNumero($endNumero) {
    $this->endNumero = $endNumero;
  }
  public function setComplemento($complemento) {
    $this->complemento = $complemento;
  }
  public function setBairro($bairro) {
    $this->bairro = $bairro;
  }
  public function setCidade($cidade) {
    $this->cidade = $cidade;
  }
  public function setUf($uf) {
    $this->uf = $uf;
  }
  public function setCep($cep) {
    $this->cep = $cep;
  }
  public function setTelefone($telefone) {
    $this->telefone = $telefone;
  }
  public function setOutroTelefone($outroTelefone) {
    $this->outroTelefone = $outroTelefone;
  }
  public function setEmail($email) {
    $this->email = $email;
  }
}
