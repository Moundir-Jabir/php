<?php
abstract class Model{ // class abstract mafiha hta chi haja abstract

    private static function getBdd(){
        return new PDO('mysql:dbname=miniblog;host=localhost;port=8888','root','root');
    }

    protected function getAll($table, $obj){
        $data = [];
        $db = self::getBdd();
        $query = $db->query('SELECT * FROM ' .$table);
        while($ligne = $query->fetch(PDO::FETCH_OBJ)){
            $data[] = new $obj($ligne);
        }
        $query = null;
        $db = null;
        return $data;
    }
}