<?php

require_once "../classes/Db.php";

class AddComment
{
    private string $commentTable;
    private string $commentPage;

    public function __construct($commentTable, $commentPage)
    {
        $this->commentTable = $commentTable;
        $this->commentPage = $commentPage;
    }

    public function addComment() 
    {
        $db = Db::dataBase();

        if(isset($_POST["addComment"])) {
            $date = date("Y-m-d");
            $time = date("H:i:s");
            $_POST['comment'] = trim($_POST['comment']);
            $_POST['comment'] = htmlspecialchars($_POST['comment']);
            $query = $db -> prepare("INSERT INTO {$this->commentTable} (`login`,`id_theme`,`comment`,`date_comment`,`time_comment`) VALUES (:login,:id_theme,:comment,:date_comment,:time_comment)");
            $query -> execute([
                ":login" => $_SESSION['login'],
                ":id_theme" => $_GET['id'],
                ":comment" => $_POST['comment'],
                ":date_comment" => $date,
                ":time_comment" => $time
            ]);
            $limit = 10;
            $queryRow = $db -> query("SELECT * FROM {$this->commentTable} WHERE id_theme = '$_GET[id]'");
            $countComments = $queryRow -> rowCount();
            $allPage = ceil($countComments / $limit);
            header("Location: {$this->commentPage}.php?id=" . $_GET['id'] . "&page=$allPage#anchor1");
        }
    }
}