<?php
/**
 * Created by PhpStorm.
 * User: williamsilva
 * Date: 2/25/16
 * Time: 11:30 AM
 */

function __autoload($class){
	require_once str_replace("\\","/",$class) . ".php";    
}