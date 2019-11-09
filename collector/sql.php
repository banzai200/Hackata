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

    function insert ($frete, $idDestino, $rua, $cidade){
        $valor = $this->select('SELECT COUNT(id) FROM servicos');
        $idServico = (int)$valor + 1;

        try {

            $data = [
                'id' => $idServico,
                'idDestino' => $idDestino,
                'valorFrete' => $frete,
            ];

            $id = $this->connect()->insert('names', $data);

            var_dump($id); // 50 || bool

        }

        catch (\Exception $e){
            echo $e->getMessage();
        }
    }

    function select($q){
        try{
            $quary = $this->connect()->selectDb($q);
            return $quary;

        }

        catch (\Exception $e){
            echo $e->getMessage();
        }


    }


    function update(){

        try{}

        catch (\Exception $e){
            echo $e->getMessage();
        }

    }
}



