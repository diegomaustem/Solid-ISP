<?php 

abstract class ContaSolucao
{
    abstract public function depositar();
}

interface ServicosPorContas 
{
    public function transferir();
    public function realizarEmprestimo();
}

class ContaCorrente extends ContaSolucao implements ServicosPorContas
{ 
    public function depositar() 
    { 
        return 'Deposito conta corrente.';
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
    
class ContaPoupanca extends ContaSolucao
{
    public function depositar() 
    { 
        return 'Deposito conta poupança.';
    } 
}

    $contaC = new ContaCorrente;
    print_r($contaC->transferir());

    $contaP = new ContaPoupanca;
    print_r($contaP->depositar());