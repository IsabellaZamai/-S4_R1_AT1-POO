<?php 
//criando a classe cliente
abstract class Cliente{
    //atributos
    protected string $nome;
    protected string $email;
    protected string $telefone;

    //medotos
    public function __construct(string $nome, string $email, string $telefone)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
    }
    protected function getDados(){}
}


?>