<?php
/**
 * Created by PhpStorm.
 * User: williamsilva
 * Date: 2/25/16
 * Time: 11:29 AM
 */

include_once 'config/config.php';


use myapp\model\Pessoa;
use myapp\model\dao\PessoaDao;
use myapp\controller\PessoaController;

$pessoa = new Pessoa();
$pessoa->helloWorld();

$pessoaDao = new PessoaDao();
$pessoaDao->findPessoaById(12);

$pessoaController = new PessoaController();
$pessoaController->validarPessoa();

$passwd = password_hash('123456',PASSWORD_DEFAULT);
echo $passwd . " \n";

if(password_verify('123456',$passwd)){
    echo "Password Válido \n";
}


