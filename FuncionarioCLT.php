<?php 
require_once 'Cliente.php';
//Criando a classe clietne fisico
class ClientePF extends Cliente{
    //atributos
    private string $cpf;

    //medotos
    # [Override]
    public function __construct(string $nome, string $email, string $telefone, string $cpf)
    {
       parent::__construct($nome, $email, $telefone);
       $this->cpf = $cpf;

    }
    public function getDados()
    {
        return "
        nome: {$this->nome}\n
        E-mail: {$this->email}\n
        telefone:{$this->telefone}\n
        CPF:{$this->cpf}\n";
    }
}

?>