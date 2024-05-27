<?php

$path=$_SERVER['DOCUMENT_ROOT'];

require_once "$path/classes/Db.php";

class DeleteQuoting
{
    private string $tableQuoting;

    public function __construct($tableQuoting)
    {
        $this->tableQuoting = $tableQuoting;
    }

    public function delQuoting()
    {
        $db = Db::dataBase();
        $users = $db -> query("SELECT `login` FROM users WHERE login = '$_SESSION[login]'");
        if($users -> rowCount() > 0) {
            $db -> query("DELETE FROM {$this->tableQuoting} WHERE id = '$_GET[id]' OR id_theme = '$_GET[idTheme]'");
        }
    }
}