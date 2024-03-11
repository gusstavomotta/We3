<?php

class Usuario
{

    private $nome;
    private $email;
    private $cpf;
    private $idpessoa;

    public function __construct(string $nome, string $email, string $cpf, string $idpessoa)
    {

        $this->nome = $nome;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->idpessoa = $idpessoa;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getCpf()
    {
        return $this->cpf;
    }
    public function getIdPessoa()
    {
        return $this->idpessoa;
    }
    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }
    public function setEmail(string $email)
    {
        $this->email = $email;
    }
    public function setCpf(string $cpf)
    {
        $this->cpf = $cpf;
    }
    public function setIdPessoa(string $idpessoa)
    {
        $this->idpessoa = $idpessoa;
    }
    public function __toString()
    {
        $ret = "\nId do usuário: " . $this->getIdPessoa() . "\n";
        $ret .= "Nome do usuário: " . $this->getNome() . "\n";
        $ret .= "Cpf do usuário: " . $this->getCpf() . "\n";
        $ret .= "Email do usuário: " . $this->getEmail() . "\n";

        return (string) $ret;
    }
    public static function verificaRetornaUsuario($pessoa)
    {
        if ($pessoa && isset($pessoa['result']['results'][0])) {
            $dados = $pessoa['result']['results'][0];

            $usuario = new Usuario(
                $dados['nome'],
                $dados['email'],
                $dados['cpf'],
                $dados['idpessoa']
            );
        } else {
            return false;
        }
        return $usuario;
    }
}
