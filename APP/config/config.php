<?php

    $base = 'http://localhost/BolosVovo/APP';
    $db_host =  'sql10.freemysqlhosting.net'; 
    $db_port = 3306;
    $db_name = 'sql10729339';
    $db_user = 'sql10729339';
    $db_pwd = '7y1GJbBsBE';

    $pdo = new PDO('mysql:host='.$db_host.';dbname='.$db_name, $db_user, $db_pwd);
