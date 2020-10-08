<?php 

namespace Moovin\Job\Backend;

class ContaCorrente extends Conta
{
    protected $limite = 600.00;
    protected $op_taxa = 2.50;

    public function __construct()
    {
        parent::__construct();  
    }
}