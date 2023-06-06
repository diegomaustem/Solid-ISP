<?php 

abstract class Conta
{
    abstract public function depositar();
    abstract public function transferir();
    abstract public function realizarEmprestimo();
}

class ContaCorrente extends Conta 
{ 
    public function depositar() 
    { 
        return 'Deposito em conta corrente realizado.';
    }

    public function transferir()
    { 
        return 'Transferência em conta corrente realizada.';
    }

    public function realizarEmprestimo()
    {
        return 'Emprestimo em conta corrente realizado.';
    }
}

class ContaPoupanca extends Conta
{
    public function depositar() 
    {
        return 'Deposito conta poupança.';
    }

    public function transferir() {
        throw new Exception('Conta poupança não faz transferência'); 
    }
    public function realizarEmprestimo() {
        throw new Exception('Conta poupança não faz emprestimo');
    }
}

    $contaC = new ContaCorrente;
    print_r($contaC->depositar());

    $contaP = new ContaPoupanca;
    print_r($contaP->transferir());