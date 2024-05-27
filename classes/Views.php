<?php

require_once "../classes/Db.php";

class Views
{
    private string $tableForum;

    public function __construct($tableForum)
    {
        $this->tableForum = $tableForum;
    }

    public function addViews()
    {
        $db = Db::dataBase();

        $db -> query("UPDATE {$this->tableForum} SET views = views + 1 WHERE id = '$_GET[id]'");
    }
}
