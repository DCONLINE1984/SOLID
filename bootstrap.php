<?php

/**
 * Bootstrap with an autoloader
 *
 * @author Dean Clow
 */

chdir('../../'); //make sure we are loading from the app directory

//specify our autoloader to take care of the including of the files we need
spl_autoload_register(function($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    include_once(getcwd() . '/' . $className . '.php');
});