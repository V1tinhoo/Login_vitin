<?php
class DB
{
    public static function connect(){
        $host = "";
        $user = "vitinho";
        $pass = "";
        $table = "vitinho";
        return new PDO("mysql:host={$host};dbname={$table};charset=UTF8", $user, $pass);
        
    }
}
