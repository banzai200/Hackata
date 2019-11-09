<?php
require 'vendor/autoload.php';

$pdo = new PDOConnector(
    'remotemysql.com', // server
    '51tdLUiERP',      // user
    'DVOgxV52Om',      // password
    '51tdLUiERP'   // database
);

$pdoConn = $pdo->connect('utf8', []); // charset, options

$dbConn = new Mysql($pdoConn);