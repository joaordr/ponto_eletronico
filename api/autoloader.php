<?php

define('SISTEMA_DIR', __DIR__);

spl_autoload_register('autoloader');

function autoloader($classname)
{
    $diretorios[] = 'model';
    $diretorios[] = 'control';
    $diretorios[] = 'dao';

    foreach ($diretorios as $dir) {
        $filename = SISTEMA_DIR . "/$dir/" . $classname . '.php';
        if (file_exists($filename)) {
            include_once($filename);
            return;
        }
    }
}
