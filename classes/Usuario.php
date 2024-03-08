<?php 

class Usuario {

    private $nome;
    private $email;
    private $cpf;
    private $idpessoa;

    public function __construct(string $nome, string $email, string $cpf, string $idpessoa){

        $this->nome = $nome;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->idpessoa = $idpessoa;
    }

    public function getNome(){
        return $this->nome;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getCpf(){
        return $this->cpf;
    }
    public function idPessoa(){
        return $this->idpessoa;
    }
    public function setNome(string $nome){
        $this->nome = $nome;
    }
    public function setEmail(string $email){
        $this->email = $email;
    }
    public function setCpf(string $cpf){
        $this->cpf = $cpf;
    }
    public function setIdPessoa(string $idpessoa){
        $this->idpessoa = $idpessoa;
    }
}