<?php

/**
 * Created by PhpStorm.
 * User: williamsilva
 * Date: 2/25/16
 * Time: 11:54 AM
 */
namespace App\controller;

use App\model\Pessoa;

class PessoaController
{


    public function validarPessoa(){

        $pessoa = new Pessoa();
        
        if($pessoa->helloWorld() != null){
        	echo "Validado \n";
        }
    }
}