<?php
require_once 'FuncionarioCLT.php';
require_once 'FuncionarioPJ.php';

$f[0] = new FuncionarioCLT("João", "joao@email.com", "99999-9999", 2500, true);
$f[1] = new FuncionarioPJ("Maria", "maria@email.com", "98888-8888", "12.345.678/0001-90", 5000, false);

foreach ($f as $funcionario) {
    echo $funcionario->getDados();

    if ($funcionario->status) {
        echo "Funcionário contratado!\n";
    } else {
        echo "Funcionário demitido!\n";
    }
}
?>