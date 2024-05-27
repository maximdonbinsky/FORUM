<?php

$path=$_SERVER['DOCUMENT_ROOT'];

require_once "$path/classes/Db.php";

class DeleteComment
{
    private string $tableComments;

    public function __construct($tableComments)
    {
        $this->tableComments = $tableComments;
    }

    public function delComment()
    {
        $db = Db::dataBase();
        $users = $db -> query("SELECT `login` FROM users WHERE login = '$_SESSION[login]'");
        if($users -> rowCount() > 0) {
            $db -> query("DELETE FROM {$this->tableComments} WHERE id = '$_GET[id]' OR id_theme = '$_GET[idTheme]'");
        }
    }
}