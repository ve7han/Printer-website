<?php
// autoload -> load all the files you need once you need them instead of include them each time 
// for exemple DB instead of each time do require DB  autoload will handle it 
session_start();
require_once './bootstrap.php';

spl_autoload_register('autoload');

function autoload($class_name){
    $array_paths = array(
        'database/',
        'app/classes/',
        'models/',
        'controllers/'
    );
    
    $parts = explode('\\',$class_name); // app \ class \ Redirect   => seperate files with '\'
    $name = array_pop($parts); //get the last element from parts in this case Redirect
                             // exemple : c:\xampp\htdocs\Imprimerie\database\DB.php => 
                             // with array pop we get last element which is DB.php

    foreach($array_paths as $path){
        $file = sprintf($path.'%s.php',$name); // concatenate file with .php
        if(is_file($file)){ // verify if the file exits then required
            include_once $file;
        }
    }

}

?>