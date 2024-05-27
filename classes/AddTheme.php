<?php

require_once "../classes/Db.php";

class AddTheme 
{
    private string $tableForum;
    private string $pageForum;

    public function __construct($tableForum, $pageForum)
    {
        $this->tableForum = $tableForum;
        $this->pageForum = $pageForum;
    }

    public function addTheme()
    {
        $date = date("Y-m-d");
        $time = date("H:i");
        $_POST['theme'] = trim($_POST['theme']);
        $_POST['theme'] = htmlspecialchars($_POST['theme']);
        $_POST['msg'] = trim($_POST['msg']);
        $_POST['msg'] = htmlspecialchars($_POST['msg']);

        $db = Db::dataBase();
    
        if(isset($_POST['create_theme'])){
            $query = $db -> prepare("INSERT INTO {$this->tableForum} (`login`,`theme`,`msg`,`time_msg`,`date_msg`,`views`) VALUES (:login,:theme,:msg,:time_msg,:date_msg,:views)");
            $query -> execute([
                ":login" => $_SESSION['login'],
                ":theme" => $_POST['theme'],
                ":msg" => $_POST['msg'],
                ":time_msg" => $time,
                ":date_msg" => $date,
                ":views" => "0"
            ]);
            $queryRow = $db -> query("SELECT * FROM {$this->tableForum}");
            $countTheme = $queryRow -> rowCount();
            $limit = 10;
            $allPage = ceil($countTheme / $limit);
            header("Location: ../public/{$this->pageForum}.php?page=$allPage#page");
        }
    }
}