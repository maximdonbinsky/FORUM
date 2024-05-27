<?php

$path=$_SERVER['DOCUMENT_ROOT'];

require_once "$path/classes/Db.php";

class EditComment
{
    private string $tableComment;

    public function __construct($tableComment)
    {
        $this->tableComment = $tableComment;
    }

    public function editComment()
    {
        $db = Db::dataBase();
        $query = $db -> query("SELECT * FROM {$this->tableComment} WHERE id = '$_GET[id]'");
        foreach($query as $row){
            static $array = [];
            $array[] = ["comment" => $row['comment'],"id_theme" => $row['id_theme']];
        }
        echo json_encode($array);
    }

    public function updateComment()
    {
        $db = Db::dataBase();
        $db -> query("UPDATE {$this->tableComment} SET comment = '$_POST[editText]' WHERE id = '$_GET[id]'");
    }
}