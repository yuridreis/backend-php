<?php

require_once __DIR__ . '/vendor/autoload.php';

use Moovin\Job\Backend as Conta;

$conta_corrente = new Conta\ContaCorrente();
$conta_poupanca = new Conta\ContaPoupanca();

$conta_corrente->deposito(1000.00);

$conta_poupanca->deposito(500.00);

echo "<br> Valor da conta corrente = ". $conta_corrente->getSaldo();

echo "<br> Valor da conta poupança = ". $conta_poupanca->getSaldo();


$conta_corrente->transferencia(250, $conta_poupanca);

echo "<br> Valor da conta corrente apos transferencia = ". $conta_corrente->getSaldo();
echo "<br> Valor da conta poupança apos transferencia = ". $conta_poupanca->getSaldo();

$conta_poupanca->saque(10);
$conta_corrente->saque(10);

echo "<br> Valor da conta corrente apos saque de 10 cybers = ". $conta_corrente->getSaldo();
echo "<br> Valor da conta poupança apos saque de 10 cybers = ". $conta_poupanca->getSaldo();