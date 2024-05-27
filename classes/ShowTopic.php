<?php

require_once "../classes/Db.php";

class ShowTopic
{
    public string $forumTable;
    public string $commentPage;

    public function __construct($forumTable, $commentPage)
    {
        $this->forumTable = $forumTable;
        $this->commentPage = $commentPage;  
    }

    public function showTopic()
    {
        $db = Db::dataBase();
        
        $query = $db->query("SELECT users.login,users.avatar,users.status,users.date_reg,{$this->forumTable}.id,{$this->forumTable}.theme,{$this->forumTable}.msg,{$this->forumTable}.time_msg,{$this->forumTable}.date_msg FROM `users`,{$this->forumTable} WHERE users.login = {$this->forumTable}.login AND {$this->forumTable}.id='$_GET[id]'");
                    foreach ($query as $row) {
                        if (empty($_GET['page'])) {
                            header("Location: {$this->commentPage}.php?id=" . $row['id'] . "&page=1");
                        }
                        if ($_GET['page'] == 1) {
                            echo '<div class="forum__info" data-theme-id = ' . $row['id'] . '>
                                        <div class="forum-h1">
                                            <img src="/img/1.png" alt=""> 
                                            <div>' . $row['theme'] . '</div>
                                        </div>
                                        <div class="cont-message">
                                            <div class="profile">
                                                <div class="user"><i class="bi bi-person-fill"></i> ' . $row['login'] . '</div>
                                                <div class="status"><i class="bi bi-info-circle-fill"></i> ' . $row['status'] . '</div>
                                                <img src="../img/avatars/' . $row['avatar'] . '" alt="">
                                                <div class="info">
                                                <i class="bi bi-calendar-check-fill"></i> Регистрация: ' . $row['date_reg'] . '<br>
                                                </div>
                                            </div>
                                            <div class="message">
                                                <div class="date-message"><i class="bi bi-calendar3"></i> ' . $row['date_msg'] . ' &bull; <i class="bi bi-watch"></i> ' . $row['time_msg'] . ' </div><br>
                                                <div class="text" id="msg111">
                                                        <pre class="pre">
                                                        ' . $row['msg'] . '
                                                        </pre>
                                                </div>
                                            </div>';
                            $editTheme = $db->query("SELECT * FROM {$this->forumTable} WHERE login = '$_SESSION[login]' AND id = '$row[id]' OR '$_SESSION[status]' = 'Администратор'");
                            if ($editTheme->rowCount() > 0) {
                                echo '<div class="edit">
                                            <div class="text-edit"  data-del-theme = ' . $row['id'] . '>Удалить</div>
                                            <div class="text-edit" data-edit-theme = ' . $row['id'] . ' id="textEdit">Редактировать</div>
                                        </div>';
                            } ?>       
                                        </div>
                                    </div>
                            <? 
                        }
                    }
    }
}