<?php
/**
 * Created by PhpStorm.
 * User: williamsilva
 * Date: 2/25/16
 * Time: 11:29 AM
 */

require_once 'App/config/config.php';

use App\model\Pessoa;
use App\controller\PessoaController;
use App\model\dao\PessoaDao;

$pessoa = new Pessoa();
echo $pessoa->helloWorld();

$pessoaController = new PessoaController();
$pessoaController->validarPessoa();

$pessoaDao = new PessoaDao();
$pessoaDao->findPessoaById(2);