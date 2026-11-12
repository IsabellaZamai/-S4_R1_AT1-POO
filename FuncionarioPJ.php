<?php 
require_once 'Cliente.php';

class ClientePJ extends Cliente{
    //atributos
    private string $cnpj;

    //medotos
    # [Override]
    public function __construct(string $nome, string $email, string $telefone, string $cnpj)
    {
        parent::__construct($nome, $email, $telefone);
        $this->cnpj = $cnpj;
    }

    public function getDados()
    {
        return "
        nome: {$this->nome}\n
        E-mail: {$this->email}\n
        telefone:{$this->telefone}\n
        CNPJ:{$this->cnpj}\n";
    }
}

?>