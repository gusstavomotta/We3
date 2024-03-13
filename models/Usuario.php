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

    public function get_nome()
    {
        return $this->nome;
    }
    public function get_email()
    {
        return $this->email;
    }
    public function get_cpf()
    {
        return $this->cpf;
    }
    public function get_id_pessoa()
    {
        return $this->idpessoa;
    }

    public function __toString()
    {
        $ret = "\nId do usuário: " . $this->get_id_pessoa() . "\n";
        $ret .= "Nome do usuário: " . $this->get_nome() . "\n";
        $ret .= "Cpf do usuário: " . $this->get_cpf() . "\n";
        $ret .= "Email do usuário: " . $this->get_email() . "\n";

        return (string) $ret;
    }
    public static function verifica_retorna_usuario($pessoa)
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
