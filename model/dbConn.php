<?php

// Connection to MySQL database 
function getDBConnection() :PDO
{
    $user = 'root';
    $pass = '';
    $dbname = 'pepinieres_baches';
    $host = 'localhost';

    try {
        $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
        $options = [
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ];
        $dbh = new PDO($dsn, $user, $pass, $options);

        return $dbh;
        
    } catch (PDOException $e) {
        print 'Error !: ' . $e->getMessage() . '<br/>';
        die();
    }
}