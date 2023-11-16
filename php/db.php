<?php 
    // define('DB_HOST', '26.133.26.68');
    define('DB_HOST', '127.0.0.1');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'web');

    $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($mysql->connect_errno) exit('Error');
    $mysql->set_charset('utf8');
    
?>