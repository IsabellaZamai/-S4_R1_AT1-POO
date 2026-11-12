<?php
require_once 'FuncionarioInterface.php';

// Criando a classe abstrata
abstract class FuncionarioRepository implements FuncionarioInterface {

    // atributos
    protected string $nome;
    protected string $email;
    protected string $telefone;

    // métodos
    public function __construct(string $nome, string $email, string $telefone)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
    }
}
?>