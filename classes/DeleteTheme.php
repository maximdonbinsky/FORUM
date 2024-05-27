<?php

$path=$_SERVER['DOCUMENT_ROOT'];

require_once "$path/classes/Db.php";

class deleteTheme
{
    private string $tableForum;

    public function __construct($tableForum)
    {
        $this->tableForum = $tableForum;
    }

    public function delTheme()
    {
        $db = Db::dataBase();
        $users = $db -> query("SELECT `login` FROM users WHERE login = '$_SESSION[login]'");
        if($users -> rowCount() > 0){
            $db -> query("DELETE FROM {$this->tableForum} WHERE id = '$_GET[id]'");  
        }
    }
}