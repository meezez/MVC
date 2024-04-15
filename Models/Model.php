<?php

abstract class Model{
    private static $_bdd;

    //Instance la connexion à la base de donnée
    private static function setBDD(){
        self::$_bdd = new PDO('mysql:host=localhost;dbname=miniblog;charset=utf8', "root", "");
        self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    //Recupére la connexion à la base de donnée
    protected function getBDD(){
        if(self::$_bdd == null)
        self::setBDD();
    return self::$_bdd;
    }

    protected function getAll($table, $obj){
        $var = [];
        $req = $this->getBDD()->prepare('SELECT * FROM '.$table.' ORDER BY id desc');
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC)){
            $var[] = new $obj($data);
        }
        return $var;
        $req->closeCursor();
    }
}