<?php
require 'vendor/autoload.php';

class sql{

    function connect ()
    {

        $pdo = new PDOConnector(
            'remotemysql.com', // server
            '51tdLUiERP',      // user
            'DVOgxV52Om',      // password
            '51tdLUiERP'   // database
        );

        $pdoConn = $pdo->connect('utf8', []); // charset, options

      return $dbConn = new Mysql($pdoConn);

    }

    function inset ($id,$name,$age){
        $data = [
            'id'   => id,
            'name' => name,
            'age'  => age,
        ];

        $id = $this->connect()->insert('names', $data);

        var_dump($id); // 50 || bool
    }

    function select(){



    }


    function update(){



    }
}



