<?php 

namespace Moovin\Job\Backend;

abstract class Conta
{
    protected $saldo;
    
    public function __construct()
    {
        $this->saldo = (float) 0;
    }

    /* Método depositar o valor na conta */

    public function deposito($valor)
    {
        $this->saldo += $valor;
    }

    /* Método retorna o saldo */

    public function getSaldo()
    {
        return $this->saldo;
    }

    /* Método transfere o valor para outra conta */

    public function transferencia($valor, $conta)
    {
        $valor_atual = $this->getSaldo();
        
        if ($valor <= $valor_atual) {
            $this->saldo -= $valor;
            $conta->deposito($valor);
        } else {
            echo "Tranferencia Invalida.";
        }
    }

    /* Método sacar um valor da conta */

    public function saque($valor)
    {
        $valor_atual = $this->getSaldo();

        if ($valor <= $this->limite && ($this->op_taxa + $valor) <= $valor_atual) {
            $this->saldo -= ($this->op_taxa + $valor);
        } else {
            echo "Saque Invalido";
        }
    }

}
