<?php
function loader_normal_class($class) {
    if (strpos($class, "Model_") === false) {
        $filename = APPPATH . DIRECTORY_SEPARATOR . str_replace('\\', '/', $class) . '.php';
        if (file_exists($filename)) {
            require_once($filename);
        }else{
            $filename = APPPATH. "third_party" . DIRECTORY_SEPARATOR . str_replace('\\', '/', $class) . '.php';
            if (file_exists($filename)) {
                require_once($filename);
            }
        }
    }
}
function loader_database_class($File){
    if (strpos($File,"Model_Base_") !== false){
        $File = str_replace("Model_","",$File);
        if (file_exists(APPPATH."models/Base/{$File}.php")) {
            require_once(APPPATH . "models/Base/{$File}.php");
        }
    }else if (strpos($File,"Model_") !== false){
        $File = str_replace("Model_","",$File);
        if (file_exists(APPPATH."models/{$File}.php")) {
            require_once(APPPATH . "models/{$File}.php");
        }
    }
}

spl_autoload_register('loader_normal_class');
spl_autoload_register('loader_database_class');