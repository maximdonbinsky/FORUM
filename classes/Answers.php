<?php

require_once "../classes/Db.php";

class Answers
{
    private string $tableAnswers;

    public function __construct($tableAnswers)
    {
        $this->tableAnswers = $tableAnswers;
    }

    public function addAnswer()
    {
        $db = Db::dataBase();
        $date = date("Y-m-d");
        $time = date("H:i:s");
        $_POST['quotingText'] = trim($_POST['quotingText']);
        $_POST['quotingText'] = htmlspecialchars($_POST['quotingText']);

        $query = $db -> prepare("INSERT INTO {$this->tableAnswers} (`user`,`id_theme`,`id_comment`,`msg`,`date_msg`,`time_msg`) VALUES (:user,:id_theme,:id_comment,:msg,:date_msg,:time_msg)");
        $query -> execute([
            ":user" => $_SESSION['login'],
            ":id_theme" => $_GET['idTheme'],
            ":id_comment" => $_GET['idComment'],
            ":msg" => $_POST['quotingText'],
            ":date_msg" => $date,
            ":time_msg" => $time
        ]);
    }

    public function showAnswer()
    {
        $db = Db::dataBase();
        $query = $db -> query("SELECT * FROM {$this->tableAnswers} WHERE id_theme = '$_GET[idTheme]' AND id_comment = '$_GET[idComment]' ORDER BY `id` DESC LIMIT 1");
        foreach($query as $row){
            static $array = [];
            $array[] = ["user" => $row['user'],"msg" => $row['msg']];
        }
        echo json_encode($array);
    }
}