<?php 

namespace Moovin\Job\Backend;

class ContaPoupanca extends Conta
{
    protected $limite = 1000.00;
    protected $op_taxa = 0.8;

    public function __construct()
    {
        parent::__construct();  
    }
}