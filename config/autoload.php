<?php
/**
 * Created by PhpStorm.
 * User: williamsilva
 * Date: 2/25/16
 * Time: 11:30 AM
 */

function __autoload($class){

    $directories = ['controller/','model/','model/dao/'];
    $parts = explode('\\', $class);

    foreach($directories as $directory){

        $localPath = $directory.end($parts) . ".php";

        if(file_exists($localPath)) {
            require_once $localPath;
            break;
        }

    }
}