<?php
namespace filmes\routes;
class conexao {

    private static $instance = null;

    public static function getInstance (){
        if (self::$instance == null){
            self::$instance = new \PDO('mysql:host=localhost;dbname=filmes;charset=utf8','root','');
        }
        return self:: $instance;
    }
    private function __construct (){}
    private function __clone (){}
    private function __wakeup (){}  
}