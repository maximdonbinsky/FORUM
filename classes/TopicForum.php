<?php

require_once "../classes/Db.php";

class TopicForum
{
    private string $forumTable;
    private string $pageMsgForum;
    private string $commentTable;

    public function __construct($forumTable,$pageMsgForum,$commentTable)
    {
        $this->forumTable = $forumTable;
        $this->pageMsgForum = $pageMsgForum;
        $this->commentTable = $commentTable;
    }
    public function topicForum()
    {
        $page = $_GET['page'];
        $limit = 10;
        $offset = ($page * $limit) - $limit;
        $db = Db::dataBase();
        $queryTheme = $db -> query("SELECT * FROM {$this->forumTable} LIMIT $limit OFFSET $offset");
        foreach ($queryTheme as $row) {
            echo "<div class = 'forum__content'>
                        <img src='/img/2.2.png' alt=''>  
                        <div class='forum-top forum-topic'><a data-forum-top = ".$row['id']." href={$this->pageMsgForum}.php?id=".$row['id'].">".$row['theme']."</a></div>
                        <div class='total-top'>";
                        $queryTotalTop = $db -> query("SELECT * FROM {$this->commentTable} WHERE id_theme = $row[id]"); 
                        $queryTotalTop = $queryTotalTop -> rowCount();
                        echo $queryTotalTop;
                        echo '</div>
                        <div class="total-msg">'.$row['views'].'</div>
                        <div class="last-msg">
                            <div class="last-msg-time"><b><i class="bi bi-calendar2-week-fill"></i> Дата: </b>'.$row['date_msg'].'</div>
                            <div class="last-msg-top"><b><i class="bi bi-chat-text-fill"></i> Текст: </b>'.$row['msg'].'</div>
                            <div class="last-msg-author"><b><i class="bi bi-person-fill"></i> Автор: </b>'.$row['login'].'</div>
                        </div>
                    </div>';
        }
    }
}