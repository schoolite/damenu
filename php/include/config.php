<?php
    ob_start();
    session_start();

    // Database details
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBNAME', 'damenu');

    // setup database connection
    $db = new PDO("mysql:host=" . DHOST . "; dbname=" . DBNAME, DBUSER , DBPASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // autoload
    function autoload($classname){

        $classname = strtolower($classname);

        $classpath = "classes/" .  $classname .".php";
        if(file_exists($classpath)){
            require_once($classpath);
        }

        $classpath = "../classes/" .  $classname .".php";
        if(file_exists($classpath)){
            require_once($classpath);
        }

        $classpath = "../../classes/" .  $classname .".php";
        if(file_exists($classpath)){
            require_once($classpath);
        }
    }

    $db = new Database($db);

    ?>