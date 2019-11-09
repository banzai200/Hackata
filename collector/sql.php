<?php
namespace Simplon\Mysql;
require 'vendor/autoload.php';


class sql{

    function connect ()
    {

        $pdo = new \Simplon\Mysql\PDOConnector(
            'remotemysql.com', // server
            '51tdLUiERP',      // user
            'DVOgxV52Om',      // password
            '51tdLUiERP'   // database
        );
        try {
            $pdoConn = $pdo->connect('utf8', []); // charset, options
        }
        catch (\Exception $e){
            echo $e->getMessage();
        }
      return $dbConn = new Mysql($pdoConn);

    }

    function insert ($id,$name,$age){
        $data = [
            'id'   => $id,
            'name' => $name,
            'age'  => $age,
        ];

        $id = $this->connect()->insert('names', $data);

        var_dump($id); // 50 || bool
    }

    function select(){



    }


    function update(){



    }
}



