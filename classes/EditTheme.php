<?php

$path=$_SERVER['DOCUMENT_ROOT'];

require_once "$path/classes/Db.php";

class EditTheme
{
    private string $tableForum;

    public function __construct($tableForum)
    {
        $this->tableForum = $tableForum;
    }

    public function editTheme()
    {
        $db = Db::dataBase();
        $query = $db -> query("SELECT msg FROM {$this->tableForum} WHERE id = '$_GET[id]'");
        foreach($query as $row){
            static $array = [];
            $array[] = ["msg"=>$row['msg']];
        }
        echo json_encode($array);
    }

    public function updateTheme()
    {
        $db = Db::dataBase();
        $db -> query("UPDATE {$this->tableForum} SET msg = '$_POST[editText]' WHERE id = '$_GET[id]'");
    }
}