<?php

class Db
{
    public static function dataBase()
    {
        return new PDO("mysql:dbhost=localhost;dbname=forum","root","");
    }
}